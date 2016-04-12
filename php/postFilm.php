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
		$extension_upload = strtolower(  substr(  strrchr($_FILES['mini']['name'], '.')  ,1)  );
		echo $extension_upload;
	}
?>
