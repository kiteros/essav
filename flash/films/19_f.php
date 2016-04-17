<?php 
	session_start();
?>

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
	<body>
	<ul id="menu-demo2">
			<li><a href="#">Créations</a>
				<ul>
					<li><a href="#">Photos</a></li>
					<li><a href="../../pages/films.php">Films</a></li>
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
					<li><a href="../../pages/acc.php">News du site</a></li>
					<li><a href="../../admin/addNews.php">Partie administrateur</a></li>
				</ul>
			</li>
			<li><a href="#">Liens</a>
				<ul>
					<li><a href="#">Météo</a></li>
					<li><a href="#">Mignovillard</a></li>
				</ul>
			</li>
		</ul>

<?php
	include('../../include/bdd.php');
	$searchMyFilm = $bdd->prepare('SELECT * FROM film WHERE idFilm = :idf');
	$idFF = $_GET['id'];
	$searchMyFilm->execute(array(
		'idf' => $idFF
	));

	$myfilm = $searchMyFilm->fetch();
	$yt = $myfilm['yt_adress'];
	echo '<br/><br/><h2>' . $myfilm['titre'] . '</h2>';
	echo '<br/><br/><br/><iframe src="' . $yt . '" frameborder="0" allowfullscreen></iframe>';
	echo '<br/><br/><br/><p>' . $myfilm['description'] . '</p>';
?>
	<br/><br/><h2>Poster un commentaire</h2><br/>

	<form action="#" method="post">
		<textarea name="texte" class="inComm">Votre commentaire ici</textarea><br/><br/>
		<input type="hidden" name="surn" value="<?php echo $_SESSION['surnom']; ?>" />
		<input type="submit" value="Poster" class="buttonGreen2" />
	</form>

	<br/><br/>
	<hr><br/><br/>
	<?php
		/*On ajoute les commentaires ici*/
		if(isset($_POST['surn'])){
			$addCom = $bdd->prepare('INSERT INTO commentaire (id, personne, id_personne, texte , date_, id_film) VALUES (NULL, :pers, :id_pers, :texte, CURRENT_DATE(), :idF)');

			$addCom->execute(array(
				'pers' => $_SESSION['surnom'],
				'id_pers' => $_SESSION['id'],
				'texte' => $_POST['texte'],
				'idF' => $idFF
			));
		}
		/*On liste les commentaires ici*/
		$selectCom = $bdd->prepare('SELECT * FROM commentaire WHERE id_film = :idf');

		$selectCom->execute(array(
			'idf' => $idFF
		));

		while($filmData = $selectCom->fetch()){
			?>
				<h2><?php echo $filmData['personne']; ?></h2>
				<p><?php echo $filmData['texte']; ?></p>
				<p>Ecrit le <?php echo $filmData['date_']; ?></p><br/>
				<hr>
				<br/>
			<?php
		}
	?>
	</body>

</html>