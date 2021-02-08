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
	<title>Cerf'Lock Holmes</title>

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
				<div class="icon"><img src="/data/icons/dark.svg" class="svg" class="svg" alt="Activer/Désactiver le mode nuit"></div>
			</a>

			<a href="javascript:void(0);" onclick="open_close_menu()" id="menu">
				<div class="icon"><img src="/data/icons/menu.svg" class="svg" class="svg" alt="Menu"></div>
			</a>
			<a href="/fr/home" class="active" id="titre">
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

	<img src="/data/photos/groupe-fun.jpg"  style="width:100%;max-height:100vh;object-fit:cover;object-position: center bottom;">

	<main style="padding-top:1rem;">
		<div style="display:flex;flex-wrap: wrap;">
			<div style="flex-basis: 200px;flex-grow: 1;margin-right: 2rem;">
				<h1>Bienvenue&nbsp;!</h1>
				<p>Bienvenue sur le site officiel des Cerf'Lock Holmes !</p>
				<p>Candidats au BDE de Centrale Nantes pour l'année 2021, nous sommes juste la meilleure liste de tout l'univers 😉</p>
				<p>Alors, êtes-vous prêts à mener l'enquête avec nous ?</p>
			</div>
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-top:1rem;">
				<svg viewBox="0 0 16 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;" class="carte" 
				src="https://www.youtube-nocookie.com/embed/ObIiAPKLvhU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
				gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
			</div>
		</div>
		<br><br>
		<h2>Découvre nos mystérieux events...</h2>
		<p>Envie de t'amuser et sortir un peu de cette atmosphère morose ? 
			Ne t'inquiète pas, Cerf'Lock t'as concocté quelques surprises !</p>
		<br>
		<style>
			.jeu {
				grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
			}
			.carte h2 {
				position: relative;
				top: -4rem;
				color: var(--text-color-light);
				text-shadow: 2px 2px 8px var(--text-color-dark);
				height: 0;
				margin: 0;
				padding: 0;
			}
		</style>
		<div class="jeu">
			<a href="/fr/campaigns#grande-enigme" class="carte">
				<img src="/data/photos/serge.jpg" alt="feu Serge Lelama, chef regretté des Cerfs-Volants
">
				<h2>La Grande Énigme</h2>
			</a>
			<a href="/fr/campaigns#soiree" class="carte">
				<img src="/data/photos/soiree.jpg" alt="Les grandes soirées de Cerf'Lock !">
				<h2>La Soirée BDE</h2>
			</a>
			<a href="/fr/allos" class="carte">
				<img src="/data/photos/zoom.jpg" alt="Un magnifique JB capturé en plein Zoom ;)">
				<h2>Les Allos</h2>
			</a>
		</div>
		<br>
		<h1>Tu en veux encore ?</h1>
		<p>Parce qu'on est jamais à cours d'idées, tu peux encore découvrir tous ces bonus préparés rien que pour toi !</p>
		<br>
		<div class="jeu">
			<a href="/fr/campaigns#movie" class="carte">
				<div class="image">
					<img src="/data/photos/film.jpg" alt="Image de Joshua tenant une caméra">
				</div>
				<div class="texte">
					<h3>Le film</h3>
					<p>Envie de voir et revoir notre trailer et notre super film ? Clique ici !</p>
				</div>
			</a>
			<a href="/fr/program" class="carte">
				<div class="image">
					<img src="/data/photos/adrien-loin.jpg" alt="Image d'Adrien regardant au loin">
				</div>
				<div class="texte">
					<h3>Le Programme</h3>
					<p>Nos actions ne se limitent pas qu'aux campagnes ! Cerf'Lock garde toujours un coup d'avance...</p>
				</div>
			</a>
			<a href="/fr/members" class="carte">
				<div class="image">
					<img src="/data/photos/groupe.jpg" alt="Photo de groupe des membres">
				</div>
				<div class="texte">
					<h3>Les Membres</h3>
					<p>Tu veux savoir qui nous sommes ? Découvre-nous !</p>
				</div>
			</a>
			<a href="https://www.youtube.com/channel/UCXkxERW_Eq3eXeSNH2yEp9A" target="_blank" class="carte">
				<div class="image">
					<img src="/data/photos/youtube.jpg" alt="Image de caméra">
				</div>
				<div class="texte">
					<h3>Youtube</h3>
					<p>Découvre ou redécouvre toutes nos vidéos des campagnes et des précampagnes !</p>
				</div>
			</a>
			<a href="https://www.facebook.com/sotb2020" target="_blank" class="carte">
				<div class="image">
					<img src="/data/photos/facebook.jpg" alt="Image Facebook">
				</div>
				<div class="texte">
					<h3>Facebook</h3>
					<p>Suis toutes nos dernières actus sur les réseaux !</p>
				</div>
			</a>
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