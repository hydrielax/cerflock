<!DOCTYPE html>

<html>
<?php $path = $_SERVER['PHP_SELF']; $file = basename (dirname( $path)); ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="alternate" hreflang="en" href="/en/<?php echo $file; ?>" />
	<link rel="alternate" hreflang="fr" href="/fr/<?php echo $file; ?>" />
	<link rel="canonical" href="https://www.cerflock.herokuapp.com/fr/<?php echo $file; ?>" />
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
					<h2>The Great Enigma</h2>
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
					<p>To do so, find the hidden enigmas that will appear every day on the site! In his great gentleness, Cerf'Lock
						will give you some tips to find them on his <a href="https://www.facebook.com/sotb2020" target="_blank">facebook page</a>...</p>
					<p>Will you find the truth?</p>
				</div>
			</div>
			<div id="soiree" class="carte wohover" style="background:var(--box-color);flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-top:1rem;margin-right:2rem;margin-bottom:1rem;">	
				<div class="texte">
					<h2>The BDE Party</h2>
				</div>					
				<div class="image">
					<img src="/data/photos/soiree_bde.jpg" alt="Une photo de gens qui s'ambiancent en soirée" />
				</div>
				<div class="texte">
					<p>Congratulations to the light blue team, who brilliantly won the treasure hunt !!</p>
					<p>And thank you to the BDE for organizing this evening! We just hope the doors haven't suffered too much ...</p>
				</div>
			</div>
		</div>
		
		<br id="indices">
		<h2>The Clues of the Great Enigma</h3>
		<p>You miss the clues on Facebook? Don't panic, you can find them here! These clues will allow you to find the corresponding puzzles hidden on this site, so good luck!</p>
		<div class="jeu" style="grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));">
			<div class="carte wohover">
				<div class="texte">
					<h3>Clue n°1</h3>
					<p>As a great member among the members, Serge Lelama was a really handsome boy... But I think he has not yet revealed all his secrets! Maybe you can admire his portrait 😉</p>
				</div>
			</div>
			<div class="carte wohover">
				<div class="texte">
					<h3>Clue n°2</h3>
					<p>Did you know? Legal notices are a mandatory part of websites. And it can sometimes be very interesting to read them! Even read them... twice 😉</p>
				</div>
			</div>
			<div class="carte wohover">
				<div class="texte">
					<h3>Clue n°3</h3>
				</div>
				<div class="image">
					<img src="/data/indice3.png" alt="Des lunettes, un nœud pap et un verre de vin">
				</div>
			</div>
			<a href="/en/enigms/Sa-dernière-gueule-de-bois" class="carte wohover">
				<div class="texte">
					<h3>Clue n°4</h3>
					<p>Still looking for the link to the last riddle? Yet it is hidden right before your eyes...</p>
				</div>
			</a>
		</div>

		<br id="movie">
		<h2>The official movie!</h2>
		<p>Did you like our trailer? You can now discover the entire film right here, or watch again our trailer if you want!</p>
		<div style="display:flex;flex-wrap: wrap;">
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-right:2rem;margin-bottom: 2rem;">
				<svg viewBox="0 0 16 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;max-height:470px;" class="carte" 
				src="https://www.youtube.com/embed/0r3XtQbaBTk" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
				gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
			</div>
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-right:2rem;margin-bottom:2rem;">
				<svg viewBox="0 0 16 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;max-height:470px;" class="carte" src="https://www.youtube.com/embed/FT2VKCnAJmg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<br>
		<h2>Thanks</h2>
		<p>For helping us on the movie, we would like to thank:</p>
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
					<h3>Maxime, Aymane and Tuc</h3>
					<p>They forced us (except Tuc 😍) to assign them a role in the movie... and so they have. Thanks to them!<p>
					<p><a href="https://www.facebook.com/groups/977708136084935" target="_blank">Maxime's <i>neurchi</i></a></p>
				</div>
			</div>
		</div>
		<br>
		<div style="display:flex;flex-wrap: wrap;">
			<div style="flex-basis: 200px;flex-grow: 1;margin-right: 2rem;">
				<h1>The choregraphy !</h1>
				<p>Our beautiful chorea impressed you? You can watch it again here!</p>
				<p>We thank in passing our fantastic choreographer Léa;)</p>
			</div>
			<div style="display:grid;flex-basis:400px;flex-shrink:0;flex-grow:1;max-width:100%;margin-top:1rem;">
				<svg viewBox="0 0 16.9 9" style="grid-area: 1/1/1/1;"></svg>
				<iframe style="grid-area: 1/1/1/1;width: 100%;height: 100%;max-width:unset;max-height:470px;" class="carte" src="https://www.youtube.com/embed/9h3w5S1wXf8?start=2777" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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