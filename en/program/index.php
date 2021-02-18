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
	<title>Program - Cerf'Lock Holmes</title>

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
			<a href="/en/program" class="active">
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
		<h1>Program</h1>
		<p>Discover all actions and engagments of Cerf'Lock Holmes!</p>
		<br>
		<details class="box" >
			<summary><h2>Life at Centrale Nantes 🎉</h2></summary>
			<p>Life at Centrale Nantes can be a bit boring, don't you think? In order to shake it off, we would like:</p>
			<ul>
				<li>to open a <b>bar </b>at the Student's Home (MDE), so that anyone can enjoy of our famous cocktail ‘<i>Sex on the Biche</i>’!</li>
				<li>to renovate the Student's Home through workshops or contests of interior decoration</li>
			</ul>
		</details>
		<br>
		<details class="box" >
			<summary><h2>Ecology 🌿</h2></summary>
			<p>Facing the ecological urgency, Cerf'Lock takes up the challenge and commits himself! We intend:</p>
			<ul>
				<li><b>to work closely</b> with the various ecological clubs and associations of the school all along the year</li>
				<li>to renew the <b>Ecology Lecture</b> at the beginning of the school year and <b>the kit for more eco-friendly campaigns</b></li>
				<li> to work on a <b>guide of ecological alternatives</b> that would be given to all the clubs of the school</li>
				<li>to set up workshop on the <b>climate fresco</b> at the start of the school year in collaboration with the administration and the involved associations, especially for those who don't have such a workshop in their study programme</li>
				<li>to join forces with the environmental clubs and associations of the school to <b>inform and educate </b>students about environment, especially for world days or theme weeks</li>
				<li> to support the <b>spread of carbon accounting</b> for all community activities in Centrale Nantes</li>
			</ul>
		</details>
		<br>
		<details class="box" >
			<summary><h2>Awareness raising 🧡</h2></summary>
			<p>For Centrale Nantes to be as caring and inclusive place as possible, we pledge:</p>
			<ul>
				<li>to shake up the general perception of awareness raising : funny or serious, but always close of the students and the subjects that matter to you, meaning the unavoidable prevention at parties, the necessary blood and bone marrow donations, but also the <b>addiction</b>, the <b>mental health</b> and the gender-based violences</li>
				<li>to <b>inform</b> and to <b>educate</b> the students by a variety of actions : communication, conferences, workshops, challenges, during themed months! </li>
				<li>to establish a <b>support for victims of gender-based violences</b> with the concerned clubs and associations</li>
				<li>to aim to be <b>exemplary</b> in our work and our events by a continuous  improvement approach with the event organizers and by systematically training the staff of our BDE</li>
				<li>...and then to offer this approach and this training to any association!</li>
				<li>to fight against all kinds of discriminations, violences and isolations: we will be listening to you, with <b>caring</b> and <b>seriousness</b>, to support you on any subject!</li>
			</ul>
		</details>
		<br>
		<details class="box" >
			<summary><h2>For Students 🎓</h2></summary>
			<p>And finally, what would be a Student Association without students associating? Yes, the joke was better in french, I'm sorry. Anyway, we commit ourselves: </p>
			<ul>
				<li>to work on a better <b>integration</b> of the international students</li>
				<li>to <b>promote</b> the engineering field in the disadvantaged areas</li>
				<li>to support the <b>gender-parity</b> within Centrale Nantes</li>
				<li>to set up a <b>guide for the arrival</b> at Nantes (how Tan works, places of interest, medical certificate...)</li>
			</ul>
		</details>
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