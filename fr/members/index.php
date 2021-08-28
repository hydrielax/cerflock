<!DOCTYPE html>

<html>
<?php $path = $_SERVER['PHP_SELF']; $file = basename (dirname( $path)); ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex">
	<link rel="alternate" hreflang="en" href="/en/<?php echo $file; ?>" />
	<link rel="alternate" hreflang="fr" href="/fr/<?php echo $file; ?>" />
	<link rel="canonical" href="https://www.cerflock.herokuapp.fr/fr/<?php echo $file; ?>" />
	<link rel="manifest" href="/manifest.json">
	<title>Membres - Cerf'Lock Holmes</title>

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
			<a href="/fr/members" class="active">
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
		<h1>Membres</h1>
		<p>Découvrez les plus grands enquêteurs de Centrale !</p>
		<br>
		<div class="jeu">
			<?php 
				$handle = fopen("https://www.cerflock.herokuapp.fr/data/membres.csv", "r");
				$lost = fgetcsv($handle, 3000, ',', '"');
				while (($membre = fgetcsv($handle, 3000, ',', '"')) !== FALSE) {
					if ($membre[0] == "Adrien") {
						echo '<a href="/fr/members/adrien/"';
					} else if ($membre[0] == "Clément") {
						echo '<a href="/fr/enigms/Le-diademe-de-Beryl"';
					} else {
						echo '<div';
					}
					echo " class=carte><div class=image><img src='/data/photos_membres/" . $membre[6] . ".png' alt=''>";
					echo "</div><div class=texte><h3>" . $membre[0] . " " . $membre[1] . "</h3>";
					echo "<h4>" . $membre[2] . "</h4>";
					echo "<p style='font-size:0.9em;'>" . $membre[4] . "</p></div>";
					if ($membre[0] == "Adrien" || $membre[0] == "Clément") {
						echo '</a>';
					} else {
						echo '</div>';
					}
				}
				fclose($handle);
			?>
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
						<a href="https://www.facebook.com/cerflock" target="_blank" class="hidden" title="Facebook" id="facebook">
							<button style="--first-color:#1877f2;">
								<img src="/data/rs/facebook.svg" class="svg" loading="lazy"/>
								Facebook
							</button>
						</a>
						<a href="https://www.youtube.com/channel/UCXkxERW_Eq3eXeSNH2yEp9A" target="_blank" class="hidden" title="Youtube" id="youtube">
							<button style="--first-color: #e20d0d;">
								<img src="/data/rs/youtube.svg" class="svg" loading="lazy"/>
								Youtube
							</button>
						</a>
						<br>
						<a href="https://www.instagram.com/cerflock_holmes/" target="_blank" class="hidden" title="Spotify - Playlist Mystère" id="spotify1">
							<button style="--first-color:#ef0075;">
								<img src="/data/rs/instagram.svg" class="svg" />
								Instagram
							</button>
						</a>
						<a href="https://open.spotify.com/playlist/1fcV5tWk0cSRl4hKsOmDF4?si=MKbTxA8QTn2oF3V94aSTGQ" target="_blank" class="hidden" title="Spotify - Playlist Mystère" id="spotify1">
							<button style="--first-color:#1aaf4e;">
								<img src="/data/rs/spotify.svg" class="svg" />
								Spotify
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