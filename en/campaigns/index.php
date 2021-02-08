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
	<title>Campaigns - Cerf'Lock Holmes</title>

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
			<a href="/en/campaigns" class="active">
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
		<h1>Campaigns</h1>

		<style>h2{font-size: 2.6rem;margin-top:1rem;}</style>
		<div style="display:flex;flex-wrap: wrap;">
			<div id="grande-enigme" class="carte wohover" style="background:var(--box-color);flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-top:1rem;margin-right:2rem;margin-bottom:1rem;">
				<div class="texte">
					<h2>The Great Enigm</h2>
				</div>
				<div class="image">
					<img src="/data/photos/serge.jpg" alt="feu Serge Lelama, boss regretté des Cerfs-Volants
" />
				</div>	
				<div class="texte">
					<p>Stupor and amazement at the Stealing Deers! According to the autopsy report, their revered gang leader, Serge Lelama, would not be
						dead of old age... But of poisoning!</p>
					<p>How is it possible? Who is behind this terrible assassination of the beloved leader of the largest Nantes gang?
						Help Cerf'Lock investigate and uncover the truth!</p>						
					<p>To do this, find the hidden enigms that will appear every day on the site! In his great gentleness, Cerf'Lock
						will give you some tips to find them on his <a href="https://www.facebook.com/sotb2020" target="_blank">facebook page</a>...</p>
					<p>Will you find the truth?</p>
				</div>
			</div>
			<div id="soiree" class="carte wohover" style="background:var(--box-color);flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-top:1rem;margin-right:2rem;margin-bottom:1rem;">	
				<div class="texte">
					<h2>The BDE Party</h2>
				</div>					
				<div class="image">
					<img src="/data/photos/soiree.jpg" alt="Une photo de gens qui s'ambiancent en soirée" />
				</div>
				<div class="texte">
					<p>We are waiting for you on Saturday evening  on 6 p.m. for the biggest party of the campaigns!</p>
					<p>With the Turkeys and the Djangoat Unchained, we will set the tone for the evening to the rhythm of several challenges 
						and games to brighten up this period a little 😘</p>
					<p>What exactly are we going to do? Mystery... We are not going to spoil your surprise!</p>
				</div>
			</div>
		</div>

		<br id="movie">
		<h2>The official movie!</h2>
		<p>Did you like our film? You can watch it again below, as well as its trailer!</p>
		<div style="display:flex;flex-wrap: wrap;">
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-right:2rem;margin-bottom: 2rem;">
				<svg viewBox="0 0 16 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;" class="carte" 
				src="https://www.youtube-nocookie.com/embed/ObIiAPKLvhU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
				gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
			</div>
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-right:2rem;margin-bottom:2rem;">
				<svg viewBox="0 0 16 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;" class="carte" 
				src="https://www.youtube-nocookie.com/embed/ObIiAPKLvhU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
				gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
			</div>
		</div>
		<br>
		<h2>Thanks</h2>
		<p>We would like to thank the following people for their invaluable help with the film:</p>
		<div class="jeu">
			<div class="carte">
				<div class="image">
					<img src="/data/friperie.png" alt="Logo Friperie" />
				</div>
				<div class="texte">
					<h3>Destock' Vintage</h3>
					<p>This superb thrift store, located in the center of Nantes, offers plenty of beautiful second-hand clothes, to have fun and help the planet!</p>
					<p><a href="https://www.facebook.com/DestockVintage" target="_blank">Their Facebook page</a></p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/fontaine.jpg" alt="Logo Philippe Fontaine" />
				</div>
				<div class="texte">
					<h3>Philippe Fontaine</h3>
					<p>An expert in kites, we met him on the day of filming! It's his kite that you can see in the movie 😉</p>
					<p><a href="https://www.facebook.com/philippe.fontaine.921" target="_blank">His Facebook page</a>
					</p>
				</div>
			</div>
			<div class="carte">
				<div class="image">
					<img src="/data/maxime-aymane-tuc.jpg" alt="Photo de Maxime, Aymane et Tuc" />
				</div>
				<div class="texte">
					<h3>Maxime Gras</h3>
					<p>How not to quote him? With his particular style, he is always there for others, and we wanted to thank him for his involvement in the film!<p>
					<p><a href="https://www.facebook.com/groups/977708136084935" target="_blank">His <i>neurchi</i></a></p>
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