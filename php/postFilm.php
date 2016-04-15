<?php

	if($_FILES['mini']['error'] == UPLOAD_ERR_NO_FILE){
		$erreur = "Fichier manquant";
	}else if($_FILES['mini']['error'] == UPLOAD_ERR_INI_SIZE){
		$erreur = "fichier depassant la taille maximale autorisee par PHP";
	}else if($_FILES['mini']['error'] == UPLOAD_ERR_FORM_SIZE){
		$erreur = "fichier dépassant la taille maximale autorisee par le formulaire";
	}else if($_FILES['mini']['error'] == UPLOAD_ERR_PARTIAL){
		$erreur = "fichier transfere partiellement";
	}

	if($_FILES['mini']['error'] > 0){
		echo $erreur;
	}else{
		include('../include/bdd.php');
		$idF = $bdd->query('SELECT f_id FROM idfilm');
		$donnees = $idF->fetch();
		$idFilm = $donnees['f_id'] + 1;
		$extension_upload = strtolower(  substr(  strrchr($_FILES['mini']['name'], '.')  ,1)  );
		$nom = "../flash/" . $idFilm . "." . $extension_upload;
		$resultat = move_uploaded_file($_FILES['mini']['tmp_name'],$nom);
		if ($resultat) echo "Transfert réussi";
		$up_film = $bdd->prepare('UPDATE idfilm SET f_id = :I');

		$up_film->execute(array(
			'I' => $idFilm
		));

		$addFilm = $bdd->prepare('INSERT INTO film (id, idFilm, yt_adress, mini_adress, titre, description) VALUES (NULL, :idfilm, :yt, :mini, :titre, :descr)');

		$addFilm->execute(array(
			'idfilm' => $idFilm,
			'yt' => $_POST['yt'],
			'mini' => $nom,
			'titre' => $_POST['movieTitle'],
			'descr' => $_POST['description']
		));

		
		
	}

?>
