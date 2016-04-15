<?php
	include('../include/bdd.php');

	$email = $_POST['mail'];
	$prenom = $_POST['pren'];
	$name = $_POST['name'];
	$surname = $_POST['nick'];
	$pass = sha1($_POST['pass']);

	$addUser = $bdd->prepare('INSERT INTO utilisateurs (id, pass, email, nom, prenom, surnom) VALUES (NULL, :pass, :mail, :nom, :pren, :surn)');
	$addUser->execute(array(
		'pass' => $pass,
		'mail' => $email,
		'nom' => $name,
		'pren' => $prenom,
		'surn' => $surname
	));

	$verifUser = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = :mail AND pass = :pass');
	$verifUser->execute(array(
		'mail' => $email,
		'pass' => $pass
	));
	$donnees = $verifUser->fetch();
	session_start();
	$_SESSION['id'] = $donnees['id'];
	$_SESSION['prenom'] = $donnees['prenom'];
	$_SESSION['nom'] = $donnees['nom'];
	$_SESSION['surnom'] = $donnees['surnom'];
	$_SESSION['email'] = $donnees['email'];
	header('Location : ../pages/acc.php');
	
?>