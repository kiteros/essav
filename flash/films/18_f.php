<!DOCTYPE html>

<html>
	<head>

	    <meta charset="utf-8" />
		<link rel="stylesheet" href="../../style/style.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	    <title>EssaWeb</title>

	</head>

	<header>
		<p>Logo du site</p>
		<p>Photo de la maison</p>
		<hr/>
	</header>

<?php
	include('../../include/bdd.php');
	$searchMyFilm = $bdd->prepare('SELECT * FROM film WHERE idFilm = :idf');

	$searchMyFilm->execute(array(
		'idf' => $_GET['id']
	));

	$myfilm = $searchMyFilm->fetch();
	$yt = $myfilm['yt_adress'];
	echo '<br/><br/><h2>' . $myfilm['titre'] . '</h2>';
	echo '<br/><br/><br/><iframe src="' . $yt . '" frameborder="0" allowfullscreen></iframe>';
	echo '<br/><br/><br/><p>' . $myfilm['description'] . '</p>';

	
?>

</html>