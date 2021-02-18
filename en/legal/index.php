<!DOCTYPE html>

<html>
<?php $path = $_SERVER['PHP_SELF']; $file = basename (dirname( $path)); ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex">
	<link rel="alternate" hreflang="en" href="/en/<?php echo $file; ?>" />
	<link rel="alternate" hreflang="fr" href="/fr/<?php echo $file; ?>" />
	<link rel="canonical" href="https://www.cerflock.fr/fr/<?php echo $file; ?>" />
	<link rel="manifest" href="/manifest.json">
	<title>Legal Mentions - Cerf'Lock Holmes</title>

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

			<a href="tel:+33783653406" class="quick-access" title="Call us!">
				<div class="icon"><img src="/data/icons/tel.svg" class="svg" alt="Call us!"></div>
			</a>
			<a href="/fr/<?php echo $file; ?>" class="quick-access" title="En Français dans le texte...!">
				<div class="icon"><img src="/data/icons/fr.svg" alt="Version française"></div>
			</a>
			<a href="javascript:void(0);" onclick="changeMode()" class="quick-access" title="Join the dark side...">
				<div class="icon"><img src="/data/icons/dark.svg" class="svg" alt="Enable/Disable dark mode"></div>
			</a>

			<a href="javascript:void(0);" onclick="open_close_menu()" id="menu">
				<div class="icon"><img src="/data/icons/menu.svg" class="svg" alt="Menu"></div>
			</a>
			<a href="/en/home" id="titre">
				<div class="icon"><img src="/data/logo_rond.png" alt=""></div>
				<span>Cerf'Lock Holmes</span>
			</a>
			<a href="/en/program">
				<div class="icon"><img src="/data/icons/programme.svg" class="svg page" alt=""></div>
				<span>Program</span>
			</a>
			<a href="/en/members">
				<div class="icon"><img src="/data/icons/membres.svg" class="svg page" alt=""></div>
				<span>Members</span>
			</a>
			<a href="/en/campaigns">
				<div class="icon"><img src="/data/icons/campaigns.svg" class="svg page" alt=""></div>
				<span>Campaigns</span>
			</a>
			<a href="/en/allos">
				<div class="icon"><img src="/data/icons/allos.svg" class="svg page" alt=""></div>
				<span>Allos</span>
			</a>

		</nav>
	</header>

	<main>
		<h1>Legal Mentions</h1>
		<p>Here is some information we have to post: happy reading!</p>
		<h2>Contact</h2>
		<p>For any question or request for information, you can contact us by the following means:</p>
		<ul>
			<li>by mail: <a href="mailto:contact@cerflock.fr">contact@cerflock.fr</a></li>
			<li>by phone: <a href="tel:+33783653406">+33 7 83 65 34 06</a></li>
		</ul>
		<h2>Cookies</h2>
		<p>This site uses exactly two cookies, to record your choice of day/night mode. In accordance with European law, your consent is not required for this type of cookies. Their sole purpose is to keep your display preferences when you change page on the site. In order to preserve your privacy, we do not use any audience measurement cookies.</p>
		<h2>Site editor</h2>
		<p>This site was created by Alexis Delage for the Château Porc association, domiciled with Mr. Cassel, apartment 1003, 2 rue Nathalie Sarraute, 44200 Nantes. The publication director is Adrien Gaillard, president of the association.</p>
		<p>If you are interrested in the source code of this website, you can find it on <a href="https://github.com/hydrielax/cerflock">Github</a>.</p>
		<h2>Site host</h2>
		<p>This site is hosted by 1 & 1 IONOS SARL, 7 place de la Gare, BP 70109, 57200 Sarreguemines C.</p>
		<h2>Intellectual property</h2>
		<p>All texts and images on this site are the exclusive property of the Château Porc association, except for the following exceptions:
		</p>
		<ul>
			<li>some images of the pages <a href="/en/allos">Allos</a> and <a href="/en/home">Home</a> are royalty-free images that can be reused, taken from the sites <a href="https://pixabay.com" target="_blank">Pixabay</a> and <a href="https://www.pexels.com">Pexels</a> (for more details, please contact us);</li>
			<li>the images of the navigation menu (visible only on mobile) come from the Flaticon site.</li>
		</ul>
		<h2>Did you know ?</h2>
		<p>Before we choosed the name <i>Cerf'Lock Holmes,</i> our list was called <i>Sex 
			on the Biche</i> (you can also find <a href="https://en.sexonthebiche.fr" target="_blank">
			the <i>Sex on the Biche</i> website here</a>). But before all of that, our first name was <i>Château Porc,</i> 
			which has been choosed as the offical name of the association.</p>
	</main>

	<footer>
		<div id="piedDePage">
			<img id="footerlogo" src="/data/logo.png" alt="Logo de Cerf'Lock Holmes" loading="lazy"/>
			<div id="footertext">
				<div id="footer1">
					<h2 class="titlefont">Cerf'Lock Holmes</h2>
					<p>© Château Porc 2021</p>
					<p><a href="/en/enigms/Un-scandale-en-peignoir">Legal mentions</a></p>
					<p><i>This site has been made with does, love, and fun!</i></p>
				</div>
				<div id="footer2">
					<h2>Social Network</h2>
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