<!DOCTYPE html>

<html>
<?php $path = $_SERVER['PHP_SELF']; $file = basename (dirname( $path)); ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="alternate" hreflang="en" href="/en/<?php echo $file; ?>" />
	<link rel="alternate" hreflang="fr" href="/fr/<?php echo $file; ?>" />
	<link rel="canonical" href="https://www.cerflock.fr/fr/<?php echo $file; ?>" />
	<link rel="manifest" href="/manifest.json">
	<title>Mentions Légales - Cerf'Lock Holmes</title>

	<link rel="shortcut icon" href="/data/favicons/favicon_16.ico" type="image/x-icon" />
	<link rel="icon" href="/data/favicons/favicon_32.png" sizes="32x32" />
	<link rel="icon" href="/data/favicons/favicon_48.png" sizes="48x48" />
	<link rel="icon" href="/data/favicons/favicon_96.png" sizes="96x96" />
	<link rel="icon" href="/data/favicons/favicon_144.png" sizes="144x144" />

	<?php echo '<link rel="stylesheet" type="text/css" href="/css/style.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/style.css') . '" />'; ?>
	<?php echo '<link rel="stylesheet" type="text/css" href="/css/topnav.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/topnav.css') . '" />'; ?>

	<?php echo '<script type="text/javascript" src="/js/scripts.js?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/js/scripts.js') .'"></script>' ?>
	
</head>

<body>
	<script type="text/javascript">
		autoChangeMode();
	</script>

	<header>
		<nav>

			<a href="tel:+33123456789" class="quick-access" title="Appelez-nous !">
				<div class="icon"><img src="/data/icons/tel.svg" class="svg" alt="Appelez-nous !"></div>
			</a>
			<a href="/en/<?php echo $file; ?>" class="quick-access" title="In English, please!">
				<div class="icon"><img src="/data/icons/en.png" alt="English version"></div>
			</a>
			<a href="javascript:void(0);" onclick="changeMode()" class="quick-access" title="Rejoignez le côté obscur...">
				<div class="icon"><img src="/data/icons/dark.svg" class="svg" alt="Activer/Désactiver le mode nuit"></div>
			</a>

			<a href="javascript:void(0);" onclick="open_close_menu()" id="menu">
				<div class="icon"><img src="/data/icons/menu.svg" class="svg" alt="Menu"></div>
			</a>
			<a href="/fr/home" id="titre">
				<div class="icon"><img src="/data/logo_rond.png" alt=""></div>
				<span>Cerf'Lock Holmes</span>
			</a>
			<a href="/fr/program">
				<div class="icon"><img src="/data/icons/programme.svg" class="svg page" alt=""></div>
				<span>Programme</span>
			</a>
			<a href="/fr/members">
				<div class="icon"><img src="/data/icons/membres.svg" class="svg page" alt=""></div>
				<span>Membres</span>
			</a>
			<a href="/fr/campaigns">
				<div class="icon"><img src="/data/icons/campaigns.svg" class="svg page" alt=""></div>
				<span>Campagnes</span>
			</a>
			<a href="/fr/allos">
				<div class="icon"><img src="/data/icons/allos.svg" class="svg page" alt=""></div>
				<span>Allos</span>
			</a>
		</nav>
	</header>

	<main>
		<h1>Mentions Légales</h1>
		<p>Voici quelques informations que nous devons afficher : bonne lecture !</p>
		<h2>Contact</h2>
		<p>Pour toute question ou demande d'information, vous pouvez nous contacter par les moyens suivants :</p>
		<ul>
			<li>par courriel : <a href="mailto:contact@cerflock.fr">contact@cerflock.fr</a></li>
			<li>par téléphone : <a href="tel:+33123456789">+33 1 23 45 67 89</a></li>
		</ul>
		<h2>Cookies</h2>
		<p>Ce site utilise exactement deux cookies, pour enregistrer votre choix du mode jour/nuit. 
			Conformément à la loi européenne, votre consentement n'est pas exigé pour ce type de cookies. 
			Ils ont pour unique but de conserver vos préférences d'affichage lorsque vous changer de page sur 
			le site. Afin de préserver votre vie privée, nous n'utilisons aucun cookie de mesure d'audience.</p>
		<h2>Éditeur du site</h2>
		<p>Ce site est édité par l'association Château Porc, domiciliée chez M. Cassel, appartement 1003, 2 
			rue Nathalie Sarraute, 44200 Nantes. Le directeur de pubication est Adrien Gaillard, président de l'association.</p>
		<h2>Hébergeur du site</h2>
		<p>Ce site est hébergé par 1&1 IONOS SARL, 7 place de la Gare, BP 70109, 57200 Sarreguemines C.</p>
		<h2>Propriété intellectuelle</h2>
		<p>L'ensemble des textes et images de ce site sont la propriété exclusive de l'association Château Porc, 
			sauf pour les exceptions suivantes :
		</p>
		<ul>
			<li>les images de la page <a href="/fr/allos">Allos</a> sont des images libres de droit pouvant 
				être réutilisées, issues du site <a href="https://pixabay.com" target="_blank">Pixabay</a> pour le 
				tandem et du site <a href="https://www.pexels.com">Pexels</a> pour les autres ;</li>
			<li>les textes et images des œuvres de Arthur Conan Doyle reproduites sur ce site sont soumises aux
				 règles stipulées au bas de leurs pages respectives ;
			</li>
			<li>les images du menu de navigation (visibles uniquement sur mobile) sont issues du site Flaticon.</li>
		</ul>
		<h2>Le saviez-vous ?</h2>
		<p>Avant d'avoir pour nom <i>Cerf'Lock Holmes,</i> notre liste avait pour fake nom <i>Sex 
			on the Biche</i> (vous pouvez d'ailleurs retrouver <a href="https://www.sexonthebiche.fr" target="_blank">
			le site des Sex on the Biche</a> ici). Mais encore avant, au tout début, nous avions pour fake fake nom <i>Château Porc,</i> 
			qui a donc été retenu pour le nom officiel de l'association.</p>
		<h2>Vous avez tout lu ?</h2>
		<p>Bravo ! Pour vous récompenser, nous avons caché sur cette page un lien vers une page secrète, saurez-vous le trouver ?</p>

	</main>

	<footer>
		<div id="piedDePage">
			<img id="footerlogo" src="/data/logo.png" alt="Logo de Cerf'Lock Holmes" loading="lazy"/>
			<div id="footertext">
				<div id="footer1">
					<h2 class="titlefont">Cerf'Lock Holmes</h2>
					<p>© Château Porc 2021</p>
					<p><a href="/fr/bonus">Mentions légales</a></p>
					<p><i>Fait avec des biches, de l'amour, de l'humour et du fun !</i></p>
				</div>
				<div id="footer2">
					<h2>Nos Réseaux !</h2>
					<p>
						<a href="https://www.facebook.com/sotb2020" target="_blank" class="hidden" title="Facebook" id="facebook">
							<button style="--first-color:#1877f2;">
								<img src="/data/rs/facebook.svg" class="svg" />
								Facebook
							</button>
						</a>
						<a href="https://www.youtube.com/channel/UCXkxERW_Eq3eXeSNH2yEp9A" target="_blank" class="hidden" title="Youtube" id="youtube">
							<button style="--first-color: #e20d0d;">
								<img src="/data/rs/youtube.svg" class="svg" />Youtube</button>
						</a>
						<br>
						<a href="https://open.spotify.com/playlist/6mOcAqZZDB6RzSHoNwz7tp" target="_blank" class="hidden" title="Spotify - Biche Party" id="spotify1">
							<button style="--first-color:#1aaf4e;">
								<img src="/data/rs/spotify.svg" class="svg" />
								Biche Party
							</button>
						</a>
						<a href="https://open.spotify.com/playlist/1Xn8tMqHAQYBKv0SsroFRT" target="_blank" class="hidden" title="Spotify - Cocktail Auditif" id="spotify2">
							<button style="--first-color:#1aaf4e;">
								<img src="/data/rs/spotify.svg" class="svg" />
								Cocktail Auditif
							</button>
						</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<script>
		convert();
	</script>
</body>

</html>