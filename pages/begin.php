<!DOCTYPE html>

<html>

	<head>

	    <meta charset="utf-8" />
		<link rel="stylesheet" href="../style/style.css" />
	    <title>EssaWeb</title>

	</head>


	<!--Ici page toute simple d'inscription au site !-->
	<body class="bodyConnect">
		<div class="present"><br/>
			<h1> Bonjour cher cousin </h1><br/>
			<p> Bienvenue à toi dans le plus beau site de tout les temps. Admire et contemple la version 2.0 du site !</p>
		</div>
		<div class="cuve">
			<div class = "connect">
				<br/>
				<form action="../php/connexion.php" method = "post">
					<input type="text" placeholder="Surnom ou Email" name="name" class="inp"/><br/><br/>
					<input type="password" placeholder="Mot de passe" name ="pass" class="inp"/><br/><br/>
					<input type="submit" value="Se connecter" class="buttonGreen" />
				</form>
				<p> Pas encore inscrit? C'est le moment de le faire</p>
				<form action="inscription.php" method = "post">
					<input type="submit" value="S'inscrire" class="buttonOrange" />
				</form>
				<br/>
			</div>
			<p>Il est très fortement déconseillé d'utiliser ce site sur smartphone ou tablette. Certaines choses risquent de ne pas fonctionner</p><br/>
		</div>
		
	</body>

	<footer>
	</footer>
</html>