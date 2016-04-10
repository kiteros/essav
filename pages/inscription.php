<!DOCTYPE html>

<html>

	<head>

	    <meta charset="utf-8" />
		<link rel="stylesheet" href="../style/style.css" />
	    <title>EssaWeb</title>

	</head>


	<!--Ici page toute simple d'inscription au site !-->
	<body class="bodyInscr">
		<div class="present">
			<h1>Vous avez eu raison de vous inscrire</h1>
			<p>C'est un très bon choix que vous n'allez pas regreter</p>
		</div>
		<div class="cuve">
			<div class = "connect">
				<br/>
				<form action="../php/inscriptione.php" method = "post">
					<input type="text" placeholder="Prenom" name="pren" class="inp"/><br/><br/>
					<input type="text" placeholder="Nom" name="name" class="inp"/><br/><br/>
					<input type="text" placeholder="Surnom" name="nick" class="inp"/><br/><br/>
					<input type="text" placeholder="Email" name="mail" class="inp"/><br/><br/>
					<input type="password" placeholder="Mot de passe" name ="pass" class="inp"/><br/><br/>
					<input type="password" placeholder="Retapez le mot de passe" name="pass2" class="inp"/><br/><br/>
					<input type="submit" value="S'inscrire" class="buttonOrange" />
				</form>
				<p> Vous possédez déjà un compte?</p>
				<form action="begin.php" method = "post">
					<input type="submit" value="Se connecter" class="buttonGreen" />
				</form>
				<br/>
			</div>
		</div>
	</body>

	<footer>
	</footer>
</html>