<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=essav;charset=utf8', 'root', 'wrmp6157');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}

	$email = $_POST['name'];
	$pass = sha1($_POST['pass']);
	/*On va utiliser les expressions régulières pour savoir si l'utilisateur à tapé un nom ou une adresse email*/

	$verif = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = :mail AND pass = :pass');

	$verif->execute(array(
		'mail' => $email,
		'pass' => $pass
	));
	$nbFound = $verif->rowCount();
	$donnees = $verif->fetch();
	if($nbFound == 0){
		header('Location : ../pages/begin.php?error=unknown');
	}else{
		session_start();
		$_SESSION['id'] = $donnees['id'];
		$_SESSION['prenom'] = $donnees['prenom'];
		$_SESSION['nom'] = $donnees['nom'];
		$_SESSION['surnom'] = $donnees['surnom'];
		$_SESSION['email'] = $donnees['email'];
	}
?>