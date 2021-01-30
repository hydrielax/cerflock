<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="alternate" hreflang="en" href="/en/allos" />
	<link rel="alternate" hreflang="fr" href="/fr/allos" />
	<link rel="canonical" href="https://www.cerflock.fr/fr/allos" />
	<link rel="manifest" href="/manifest.json">
	<title>Allos - Cerf'Lock Holmes</title>

	<link rel="shortcut icon" href="/data/favicon_16.ico" type="image/x-icon" />
	<link rel="icon" href="/data/favicon_32.png" sizes="32x32" />
	<link rel="icon" href="/data/favicon_48.png" sizes="48x48" />
	<link rel="icon" href="/data/favicon_96.png" sizes="96x96" />
	<link rel="icon" href="/data/favicon_144.png" sizes="144x144" />

	<?php echo '<link rel="stylesheet" type="text/css" href="/css/style.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/style.css') . '" />'; ?>
	<?php echo '<link rel="stylesheet" type="text/css" href="/css/topnav.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/topnav.css') . '" />'; ?>
	<?php echo '<link rel="stylesheet" type="text/css" href="/css/cartes.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/cartes.css') . '" />'; ?>

	<?php echo '<script type="text/javascript" src="/js/scripts.js?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/js/scripts.js') .'"></script>' ?>
	<script type="text/javascript">
		checkLanguage("en", "allos");
	</script>
</head>

<body>
	<script type="text/javascript">
		autoChangeMode();
	</script>

	<header>
		<nav>

			<a href="tel:+33123456789" class="quick-access" title="Call us!">
				<div class="icon"><img src="/data/tel.svg" class="svg" alt="Call us!"></div>
			</a>
			<a href="/fr/allos" onclick="changeLanguage()" class="quick-access" title="En Français dans le texte...!">
				<div class="icon"><img src="/data/fr.svg" alt="Version française"></div>
			</a>
			<a href="javascript:void(0);" onclick="changeMode()" class="quick-access" title="Join the dark side...">
				<div class="icon"><img src="/data/dark.svg" class="svg" alt="Enable/Disable dark mode"></div>
			</a>

			<a href="javascript:void(0);" onclick="open_close_menu()" id="menu">
				<div class="icon"><img src="/data/menu.svg" class="svg" alt="Menu"></div>
			</a>
			<a href="/en/home" id="titre">
				<div class="icon"><img src="/data/logo_rond.png" alt=""></div>
				<span>Cerf'Lock Holmes</span>
			</a>
			<a href="/en/program">
				<div class="icon"><img src="/data/programme.svg" class="svg page" alt=""></div>
				<span>Program</span>
			</a>
			<a href="/en/members">
				<div class="icon"><img src="/data/membres.svg" class="svg page" alt=""></div>
				<span>Members</span>
			</a>
			<a href="/en/campaigns">
				<div class="icon"><img src="/data/campaigns.svg" class="svg page" alt=""></div>
				<span>Campaigns</span>
			</a>
			<a href="/en/allos" class="active">
				<div class="icon"><img src="/data/allos.svg" class="svg page" alt=""></div>
				<span>Allos</span>
			</a>

		</nav>
	</header>

	<button id="boutonEnigme" onclick="showEnigme()" type="button" title="Open an enigm">
		<svg viewBox="0 0 24 24" alt="Enigm">
		<g transform="translate(1,1)">
		<path 
		   d="M 10.96875 3 C 9.21782 3 7.56187 3.4216019 6 4.2636719 L 6.7773438 6.0507812 C 7.5582637 5.6672613 8.2600456 5.3933025 8.8847656 5.2265625 C 9.5177356 5.0598325 10.162692 4.9765625 10.820312 4.9765625 C 11.806753 4.9765625 12.563734 5.1968119 13.089844 5.6386719 C 13.615944 6.0805419 13.878906 6.7136725 13.878906 7.5390625 C 13.878906 7.9809325 13.822111 8.369625 13.707031 8.703125 C 13.591951 9.036605 13.394724 9.369635 13.115234 9.703125 C 12.835754 10.036615 12.247563 10.586476 11.351562 11.353516 C 10.251483 12.356846 9.10046 14.139 9 16 L 11 16 L 10.994141 15.96875 C 10.994141 15.21007 11.125612 14.601138 11.388672 14.142578 C 11.659952 13.675688 12.201805 13.087576 13.015625 12.378906 C 14.010295 11.536836 14.673153 10.903726 15.001953 10.478516 C 15.338993 10.053316 15.589506 9.6041363 15.753906 9.1289062 C 15.918406 8.6536762 16 8.1071944 16 7.4902344 C 16 6.0728944 15.55227 4.97119 14.65625 4.1875 C 13.76024 3.39546 12.53061 3 10.96875 3 z M 9 17 L 9 19 L 11 19 L 11 17 L 9 17 z "
		   />  
	   </g></svg>
	</button>



	<main>
		<h1>Allos</h1>
		<p>
			The <i>Allos</i> are a famous event of the Centrale Nantes' campaigns: you call us fot the <i>allô</i> you want, and we try to answer your demand as soon as possible! To participate, you just have to call this number: <a href="tel:+33123456789">01.23.45.67.89</a>!
			You can call on thursday afternoon, and during all the weekend of the campaigns😉 Choose your <i>allô</i> in the list below!
		</p>
		<div class="jeu">
			<div class="carte">
				<div class="image">
					<img src="/data/allo/echec.jpg" alt="Image de jeu d'échecs">
				</div>
				<div class="texte">
					<h2>Chess Allô</h2>
					<p>We come and play chess with you! Will you defeat our champions?</p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/allo/karaoke.jpg" alt="Image de Karaoké">
				</div>
				<div class="texte">
					<h2>Karaoke Allô</h2>
					<p>Want to sing? Call us and we sing with you!<br>(Singing quality is not guaranteed)</p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/allo/escape.jpg" alt="Image d'escape game">
				</div>
				<div class="texte">
					<h2>Escape Game Allô</h2>
					<p>We come and organize a true escape game at your home! Will you escape?</p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/allo/magie.jpg" alt="Image de magie">
				</div>
				<div class="texte">
					<h2>Magic Allô</h2>
					<p>Want to see somethings wonderful? Discover our best magicians!</p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/allo/pictionnary.jpg" alt="Dessin de JB">
				</div>
				<div class="texte">
					<h2>Pictionnary Allô</h2>
					<p>We challenge you at Pictionnary! Be wareful, you can maybe lose...</p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/allo/tandem.jpg" alt="Vélo Tandem">
				</div>
				<div class="texte">
					<h2>Tandem Allô</h2>
					<p>Fancy a bike ride? Cerf'Lock offers you even better: a tandem ride!</p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/allo/prank.jpg" alt="Cerf Mystérieux dans le noir">
				</div>
				<div class="texte">
					<h2>Mystery Allô</h2>
					<p>What is hiding behind this allô? Try it, and you'll know it!</p>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div id="piedDePage">
			<img id="footerlogo" src="/data/logo.png" alt="Cerf'Lock Holmes" />
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