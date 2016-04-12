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
					<li><a href="#">News du site</a></li>
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
		<h1>News du site</h1><br/>
		<hr id="ahr">

		<?php
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=essav;charset=utf8', 'root', 'wrmp6157');
			}
			catch(Exception $e)
			{
		        die('Erreur : '.$e->getMessage());
			}
			/*On fait une boucle qui récupère les news*/
			$selectNews = $bdd->query('SELECT * FROM newsAdmin LIMIT 0,30');

			while($result = $selectNews->fetch()){
				?>
					<br/>
					<h2><?php echo $result['title'];?></h2>
					<p><?php echo $result['texte'];?></p>
					<p>Ecrit par <?php echo $result['auteur']; ?> le <?php echo $result['date_']?></p><br/>
					<hr id="ahr">
				<?php
			}
		?>
	</body>

	<footer>
		<br/>
	</footer>
</html>