<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=essav;charset=utf8', 'root', 'wrmp6157');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}

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
	echo 'tout en ordre';
	
?>