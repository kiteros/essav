<!DOCTYPE html>

<html>

	<head>

	    <meta charset="utf-8" />
		<link rel="stylesheet" href="" />
	    <title>EssaWeb</title>

	</head>

	<!--Ici page toute simple d'inscription au site !-->
	<body>
		<div class = "connect">
			<form action="../php/connection.php" method = "post">
				<input type="text" placeholder="Nom d'utilisateur ou Email" name="name"/>
				<input type="password" placeholder="Mot de passe" name ="pass" />
				<input type="submit" value="Se connecter" />
			</form>
		</div>
	</body>

	<footer>
	</footer>
</html>