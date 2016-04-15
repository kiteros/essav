<?php
	include('../include/bdd.php');

	$email = $_POST['name'];
	$pass = sha1($_POST['pass']);
	/*On va utiliser les expressions régulières pour savoir si l'utilisateur à tapé un nom ou une adresse email*/
	if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
		/*On cherrche un email*/
		$verif = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = :mail AND pass = :pass');

		$verif->execute(array(
			'mail' => $email,
			'pass' => $pass
		));
	}else{
		/*On cherche un nom*/
		$verif = $bdd->prepare('SELECT * FROM utilisateurs WHERE surnom = :surn AND pass = :pass');

		$verif->execute(array(
			'surn' => $email,
			'pass' => $pass
		));
	}

	$nbFound = $verif->rowCount();
	$donnees = $verif->fetch();
	echo $nbFound;
	if($nbFound == 0){
		header('Location: ../pages/begin.php?error=unknown');
		exit;
	}else{
		session_start();
		$_SESSION['id'] = $donnees['id'];
		$_SESSION['prenom'] = $donnees['prenom'];
		$_SESSION['nom'] = $donnees['nom'];
		$_SESSION['surnom'] = $donnees['surnom'];
		$_SESSION['email'] = $donnees['email'];
		
	}
	header('Location: ../pages/acc.php');
	exit;
?>