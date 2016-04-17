<!DOCTYPE html>

<html>

	<head>

	    <meta charset="utf-8" />
		<link rel="stylesheet" href="../style/style.css" />
	    <title>EssaWeb</title>

	</head>

	<header>
		<p>Logo du site</p>
		<p>Photo de la maison</p>
		<hr/>
	</header>

	<body>
		<ul id="menu-demo2">
			<li><a href="#">Créations</a>
				<ul>
					<li><a href="#">Photos</a></li>
					<li><a href="films.php">Films</a></li>
					<li><a href="#">Livres</a></li>
					<li><a href="#">Autre</a></li>
				</ul>
			</li>
			<li><a href="#">Rubriques</a>
				<ul>
					<li><a href="#">Philosophie</a></li>
					<li><a href="#">Articles</a></li>
					<li><a href="#">Ajouter une rubrique</a></li>
				</ul>
			</li>
			<li><a href="#">Divers</a>
				<ul>
					<li><a href="#">Annonçes</a></li>
					<li><a href="#">Conversations</a></li>
					<li><a href="acc.php">News du site</a></li>
					<li><a href="../admin/addNews.php">Partie administrateur</a></li>
				</ul>
			</li>
			<li><a href="#">Liens</a>
				<ul>
					<li><a href="#">Météo</a></li>
					<li><a href="#">Mignovillard</a></li>
				</ul>
			</li>
		</ul>
		<hr/><br/>
		<h1>Postez des annonces</h1><br/>
		<p>Cet rubrique remplace enfait les news de l'ancien site. Vous pourrez y retrouver toutes vos vieilles news. Postez des avis de reherches, ou bien racontez vos vacances!</p>
		<br/><br/>
		<hr id="ahr">

		<form action="#" method="post">
			<br/><br/>
			<textarea name="text_n" class="inComm">Votre texte ici</textarea><br/><br/>
			<input type="submit" value="Poster" class="buttonGreen2"/>
		</form>

		<?php
			include('../include/bdd.php');
		?>
	</body>

	<footer>
		<br/>
	</footer>
</html>