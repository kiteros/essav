<!DOCTYPE html>

<html>

	<head>

	    <meta charset="utf-8" />
		<link rel="stylesheet" href="../style/style.css" />
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
					<li><a href="#">Films</a></li>
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
		<h1>Poster des films</h1>
		<div class="addConv" />
			<a href="#?w=500" rel="popup_name" class="poplight"><img src="../style/images/add.png" width="250px" height="250px" class="btn_ouvrir" title="ajouter" alt="ajouter"  /></a>
		</div>
		<div id="popup_name" class="popup_block">
			<br/><h2> Ajout de film</h2><br/>
			<p> Pour ajouter une vidéo sur le site, c'est très facile :</p><br/>
			<ul>
				<li>Rendez vous sur Youtube en cliquant <a href="#">ici</a></li>
				<li>Cliquez sur poster une vidéo</li>
				<li>Glissez votre vidéo dans le cadre et attendez que le traitement se termine</li>
				<li>Avant de la poster, vérifiez bien qu'en bas à droite, la vidéo est classée en non-répertoriée</li>
				<li>Postez la vidéo et copiez le lien qui apparaîtra à votre écran</li>
				<li>Collez-le dans le cadre ci-dessous</li>
			</ul>
			<br/>
			<form action="../php/postFilm.php" method="post" enctype="multipart/form-data">
				<input type="text" placeholder="adresse de la vidéo youtube" /><br/><br/>
				<p>Image miniature (jpg, png, gif...): </p>
				<input type="file" value="image miniature" name="mini" /><br/><br/>
				<input type="text" placeholder="Titre du film" name="movieTitle" /><br/><br/>
				<textarea name="desciption">Brève description de votre film(acteurs, figurants...)</textarea><br/><br/>
				<input type="submit" value="Poster" class="buttonOrange" />
			</form>
		</div>
	</body>
	<script>
			$(document).ready(function() {
				$('a.poplight[href^=#]').click(function() {
					var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
					var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

					//Récupérer les variables depuis le lien
					var query= popURL.split('?');
					var dim= query[1].split('&amp;');
					var popWidth = dim[0].split('=')[1]; //La première valeur du lien

					//Faire apparaitre la pop-up et ajouter le bouton de fermeture
					$('#' + popID).fadeIn().css({
						'width': Number(popWidth)
					})
					.prepend('<a href="#" class="close"><img src="../style/images/close.png" class="btn_close" title="Fermer" alt="Fermer" width="30px" height="30px" /></a>');

					//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
					var popMargTop = ($('#' + popID).height() + 80) / 2;
					var popMargLeft = ($('#' + popID).width() + 80) / 2;

					//On affecte le margin
					$('#' + popID).css({
						'margin-top' : -popMargTop,
						'margin-left' : -popMargLeft
					});

					//Effet fade-in du fond opaque
					$('body').append('<div id="fade"></div>'); //Ajout du fond opaque noir
					//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
					$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

					return false;
				});

				//Fermeture de la pop-up et du fond
				$('a.close, #fade').live('click', function() { //Au clic sur le bouton ou sur le calque...
					$('#fade , .popup_block').fadeOut(function() {
						$('#fade, a.close').remove();  //...ils disparaissent ensemble
					});
					return false;
				});
			});
		</script>


	<footer>
		<br/>
	</footer>
</html>