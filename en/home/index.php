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
			<a href="/en/home" class="active" id="titre">
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

	<img src="/data/photos/groupe-fun.jpg"  style="width:100%;max-height:100vh;object-fit:cover;object-position: center bottom;">

	<main style="padding-top:1rem;">
		<div style="display:flex;flex-wrap: wrap;">
			<div style="flex-basis: 200px;flex-grow: 1;margin-right: 2rem;">
				<h1>Welcome!</h1>
				<p>Welcome on the offical website of Cerf'Lock Holmes!</p>
				<p>We candidate for the 2021 BDE of Centrale Nantes, and we are just the best list of all the universe 😉</p>
				<p>So, are you ready to investigate with us?</p>
			</div>
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-top:1rem;">
				<svg viewBox="0 0 16 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;" class="carte" 
				src="https://www.youtube-nocookie.com/embed/ObIiAPKLvhU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
				gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
			</div>
		</div>
		<br><br>
		<h2>Discover our mysterious events...</h2>
		<p>Want to have fun and get away from this gloomy atmosphere? Don't worry, Cerf'Lock has concocted some surprises for you!</p>
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
			<a href="/en/campaigns#grande-enigme" class="carte">
				<img src="/data/photos/enigme.jpg" alt="Inspector Lestrade investigate">
				<h2>The Great Enigm</h2>
			</a>
			<a href="/en/campaigns#soiree" class="carte">
				<img src="/data/photos/soiree.jpg" alt="The greeat parties of Cerf'Lock!">
				<h2>The BDE Party</h2>
			</a>
			<a href="/en/allos" class="carte">
				<img src="/data/photos/zoom.jpg" alt="A beautiful JB captured during a zoom session ;)">
				<h2>The "Allôs"</h2>
			</a>
		</div>
		<br>
		<h1>Do you want more?</h1>
		<p>Because we are never out of ideas, you can still discover all these bonuses prepared just for you!</p>
		<br>
		<div class="jeu">
			<a href="/en/campaigns#movie" class="carte">
				<div class="image">
					<img src="/data/photos/film.jpg" alt="Joshua and a camera">
				</div>
				<div class="texte">
					<h3>The movie</h3>
					<p>Want to see again and again our trailer and our fantastic movie? Click here!</p>
				</div>
			</a>
			<a href="/en/program" class="carte">
				<div class="image">
					<img src="/data/photos/adrien-loin.jpg" alt="Adrien looking far far away...">
				</div>
				<div class="texte">
					<h3>The Program</h3>
					<p>Our actions are not limited to the campaigns! Cerf'Lock is always one step ahead ...</p>
				</div>
			</a>
			<a href="/en/members" class="carte">
				<div class="image">
					<img src="/data/photos/groupe.jpg" alt="Group photo">
				</div>
				<div class="texte">
					<h3>Members</h3>
					<p>Who are we? Discover the members of the list!</p>
				</div>
			</a>
			<a href="https://www.youtube.com/channel/UCXkxERW_Eq3eXeSNH2yEp9A" target="_blank" class="carte">
				<div class="image">
					<img src="/data/photos/youtube.jpg" alt="Camera Picture">
				</div>
				<div class="texte">
					<h3>Youtube</h3>
					<p>Discover or rediscover all of our campaign and pre-campaign videos!</p>
				</div>
			</a>
			<a href="https://www.facebook.com/sotb2020" target="_blank" class="carte">
				<div class="image">
					<img src="/data/photos/facebook.jpg" alt="facebook Picture">
				</div>
				<div class="texte">
					<h3>Facebook</h3>
					<p>Follow all our latest news on the social networks!</p>
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
					<p><a href="/en/legal">Legal mentions</a></p>
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