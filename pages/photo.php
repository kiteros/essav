<?php 
	session_start();
?>

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
					<li><a href="annonce.php">Annonçes</a></li>
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
		<h1>Postez des photos!!</h1><br/><br/>
		<form action="../php/postPhoto.php" method="post" enctype="multipart/form-data">
			<input type="text" placeholder="Titre" name="titlePhoto" class="inComm"/><br/><br/>
			<input type="file" value="image" name="phot" class="inComm" /><br/><br/>
			<textarea name="desc" placeholder="Brève description facultative" class="inComm"></textarea><br/><br/>
			<input type="submit" value="poster" class="buttonGreen2" />
		</form>
		<br/><br/>
		<hr>
		<br/><br/>
		<?php 
			include('../include/bdd.php');
			$search_photo = $bdd->query('SELECT * FROM photo ORDER BY id DESC');

			while($photos = $search_photo->fetch()){
				/*Ici on crée le fichier correspondant au film*/
				?>
				<div class="centerImage">
					<h2><?php echo $photos['nom_photo']; ?></h2><br/><br/>
					<img src="<?php echo $photos['adresse_photo']; ?>" width="750px" height="500px" />
					<p><?php echo $photos['description']; ?>
					<p>Posté par <?php echo $photos['createur']; ?> le <?php echo $photos['date_']; ?></p>
					
				</div>
				<br/><br/><hr>
				<?php
			}
		?>

	</body>

	<footer>
		<br/>
	</footer>
</html>