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
	<title>Campagnes - Cerf'Lock Holmes</title>

	<link rel="shortcut icon" href="/data/favicons/favicon_16.ico" type="image/x-icon" />
	<link rel="icon" href="/data/favicons/favicon_32.png" sizes="32x32" />
	<link rel="icon" href="/data/favicons/favicon_48.png" sizes="48x48" />
	<link rel="icon" href="/data/favicons/favicon_96.png" sizes="96x96" />
	<link rel="icon" href="/data/favicons/favicon_144.png" sizes="144x144" />

	<?php echo '<link rel="stylesheet" type="text/css" href="/css/style.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/style.css') . '" />'; ?>
	<?php echo '<link rel="stylesheet" type="text/css" href="/css/topnav.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/topnav.css') . '" />'; ?>
	<?php echo '<link rel="stylesheet" type="text/css" href="/css/cartes.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/cartes.css') . '" />'; ?>

	<?php echo '<script type="text/javascript" src="/js/scripts.js?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/js/scripts.js') .'"></script>' ?>
	
</head>

<body>
	<script type="text/javascript">
		autoChangeMode();
	</script>

	<header>
		<nav>

			<a href="tel:+33783653406" class="quick-access" title="Appelez-nous !">
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
			<a href="/fr/campaigns" class="active">
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
		<h1>Campagnes</h1>

		<style>h2{font-size: 2.6rem;margin-top:1rem;}</style>
		<div style="display:flex;flex-wrap: wrap;">
			<div id="grande-enigme" class="carte wohover" style="background:var(--box-color);flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-top:1rem;margin-right:2rem;margin-bottom:1rem;">
				<div class="texte">
					<h2>La Grande Énigme</h2>
				</div>
				<div class="image">
					<img src="/data/photos/serge.jpg" alt="feu Serge Lelama, boss regretté des Cerfs-Volants
" />
				</div>	
				<div class="texte">
					<p>Stupeur et stupéfaction chez les Cerfs-Volants
 ! D'après le rapport de l'autopsie, le vénéré chef du gang, Serge Lelama, ne serait pas 
						mort de vieillesse... Mais d'empoisonnement !</p>
					<p>Comment est-ce possible ? Qui se cache derrière ce terrible assassinat du chef bien-aimé du plus grand gang nantais ? 
						Aide Cerf'Lock à mener l'enquête pour découvrir la vérité !</p>						
					<p>Pour ce faire, trouve les énigmes cachées qui apparaîtront chaque jour sur le site ! Dans sa grande mansuétude, Cerf'Lock
						te donnera quelques pistes pour les trouver sur sa <a href="https://www.facebook.com/sotb2020" target="_blank">page facebook</a>...</p>
					<p>Trouveras-tu la vérité ?</p>
				</div>
			</div>
			<div id="soiree" class="carte wohover" style="background:var(--box-color);flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-top:1rem;margin-right:2rem;margin-bottom:1rem;">	
				<div class="texte">
					<h2>La Soirée BDE</h2>
				</div>					
				<div class="image">
					<img src="/data/photos/soiree.jpg" alt="Une photo de gens qui s'ambiancent en soirée" />
				</div>
				<div class="texte">
					<p>On vous attend samedi soir pour la plus grande soirée des campagnes, dès 21h !</p>
					<p>Avec les Dindes et les Djangoat Unchained, nous ambiancerons la soirée au rythme
						de plusieurs défis et jeux pour égayer un peu cette période 😘</p>
					<p>Qu'est-ce qu'on va faire exactement ? Mystère... On ne va quand même pas te gâcher la 
						surprise !</p>
				</div>
			</div>
		</div>

		<br id="movie">
		<h2>Le film officiel !</h2>
		<p>Notre trailer a saisi ta curiosité ? Tu veux savoir ce qui vas arriver à Sherlock ? Découvre-le dans notre film !</p>
		<!--p>Notre film sortira en exclusivité samedi soir ! Mais que va-t-il s'y passer ? Découvrez-en un petit extrait avec notre trailer !</p-->
		<div style="display:flex;flex-wrap: wrap;">
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-right:2rem;margin-bottom: 2rem;max-height:80vh;">
				<svg viewBox="0 0 16 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;max-height:470px;" class="carte" 
				src="https://www.youtube.com/embed/0r3XtQbaBTk" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
				gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
			</div>
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-right:2rem;margin-bottom:2rem;">
				<svg viewBox="0 0 16 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;max-height:470px;" class="carte" 
				src="https://www.youtube.com/embed/0r3XtQbaBTk" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
				gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
			</div>
		</div>
		<br>
		<h2>Remerciements</h2>
		<p>Pour leur aide précieuse apportée au film, nous tenions à remercier :</p>
		<div class="jeu">
			<div class="carte">
				<div class="image">
					<img src="/data/friperie.png" alt="Logo Friperie" />
				</div>
				<div class="texte">
					<h3>Destock' Vintage</h3>
					<p>Cette superbe friperie, située en plein centre de Nantes, propose plein de beaux vêtements de seconde main, pour se faire plaisir et aider la planète !</p>
					<p><a href="https://www.facebook.com/DestockVintage" target="_blank">Leur page Facebook</a></p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/fontaine.jpg" alt="Logo Philippe Fontaine" />
				</div>
				<div class="texte">
					<h3>Philippe Fontaine</h3>
					<p>Expert en cerfs-volants, nous l'avons rencontré le jour même du tournage ! C'est son cerf-volant que vous pouvez apercevoir dans le film 😉</p>
					<p><a href="https://www.facebook.com/philippe.fontaine.921" target="_blank">Sa page Facebook</a>
					</p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/maxime-aymane-tuc.jpg" alt="Photo de Maxime, Aymane et Tuc" />
				</div>
				<div class="texte">
					<h3>Maxime, Aymane et Tuc</h3>
					<p>Ils ont forcé (sauf Tuc 😍) pour y être... donc ils y sont. Merci à eux !<p>
					<p><a href="https://www.facebook.com/groups/977708136084935" target="_blank">Le neurchi de Maxime</a></p>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div id="piedDePage">
			<img id="footerlogo" src="/data/logo.png" alt="Logo de Cerf'Lock Holmes" loading="lazy"/>
			<div id="footertext">
				<div id="footer1">
					<h2 class="titlefont">Cerf'Lock Holmes</h2>
					<p>© Château Porc 2021</p>
					<p><a href="/fr/legal">Mentions légales</a></p>
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
								<img src="/data/rs/youtube.svg" class="svg" />
								Youtube
							</button>
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