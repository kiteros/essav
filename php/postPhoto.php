<?php
	session_start();

	if($_FILES['phot']['error'] == UPLOAD_ERR_NO_FILE){
		$erreur = "Fichier manquant";
	}else if($_FILES['phot']['error'] == UPLOAD_ERR_INI_SIZE){
		$erreur = "fichier depassant la taille maximale autorisee par PHP";
	}else if($_FILES['phot']['error'] == UPLOAD_ERR_FORM_SIZE){
		$erreur = "fichier dépassant la taille maximale autorisee par le formulaire";
	}else if($_FILES['phot']['error'] == UPLOAD_ERR_PARTIAL){
		$erreur = "fichier transfere partiellement";
	}

	if($_FILES['phot']['error'] > 0){
		echo $erreur;
	}else{
		include('../include/bdd.php');
		$idF = $bdd->query('SELECT f_id FROM idfilm');
		$donnees = $idF->fetch();
		$idFilm = $donnees['f_id'] + 1;
		$extension_upload = strtolower(  substr(  strrchr($_FILES['phot']['name'], '.')  ,1)  );
		$nom = "../flash/" . $idFilm . "." . $extension_upload;
		$resultat = move_uploaded_file($_FILES['phot']['tmp_name'],$nom);
		$up_film = $bdd->prepare('UPDATE idfilm SET f_id = :I');

		$up_film->execute(array(
			'I' => $idFilm
		));

		$addPhoto = $bdd->prepare('INSERT INTO photo (id, adresse_photo, id_photo, nom_photo, createur, id_createur, description, date_) VALUES (NULL, :adress, :idp, :name, :createur, :idc, :d, CURRENT_DATE())');

		$addPhoto->execute(array(
			'adress' => $nom,
			'idp' => $idFilm,
			'name' => $_POST['titlePhoto'],
			'createur' => $_SESSION['surnom'],
			'idc' => $_SESSION['id'],
			'd' => $_POST['desc']
		));

		header('Location: ../pages/photo.php');
		exit;

	}
?>