<?php
	session_start();
	$surn = 'administrator ' . $_SESSION['surnom'];
?>

<!DOCTYPE html>

<html>

	<head>

	    <meta charset="utf-8" />
		<link rel="stylesheet" href="../style/style.css" />
	    <title>EssaWeb-admin</title>

	</head>

	<body>
		<h2>Ajouter une news au site pour les ayant droit</h2><br/>
			<div class="middleForm">
				<form action="#" method="post">
					<input type="text" placeholder="titre de la news" name="title" /><br/>
					<textarea rows="5" col="50" name="textarea">Une news bien interresante</textarea><br/><br/>
					<input type="submit" value="Poster" class="buttonOrange"/>
				</form>
				<form action="../pages/acc.php" method="post">
					<input type="submit" value="retourner au menu" />
				</form>
			</div>
			<?php
				if(isset($_POST['textarea'])){
					/*On a posté la nouvelle news*/
					include('../include/bdd.php');

					$addnew = $bdd->prepare('INSERT INTO newsAdmin (id, title, texte, date_, auteur) VALUES (NULL, :title, :texte, CURRENT_DATE(), :auteur)');

					$addnew->execute(array(
						'title' => $_POST['title'],
						'texte' => $_POST['textarea'],
						'auteur' => $surn
					));
				}
			?>

	</body>

</html>
