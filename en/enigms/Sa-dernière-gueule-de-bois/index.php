<!DOCTYPE html>

<html>
<?php $path = $_SERVER['PHP_SELF']; $file = "enigms/" . basename (dirname( $path)); ?>

<head>
<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex">
	<link rel="alternate" hreflang="en" href="/en/<?php echo $file; ?>" />
	<link rel="alternate" hreflang="fr" href="/fr/<?php echo $file; ?>" />
	<link rel="canonical" href="https://cerflock.herokuapp.com/fr/<?php echo $file; ?>" />
	<link rel="manifest" href="/manifest.json">
	<title>Riddle n°4 - Cerf'Lock Holmes</title>

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
		<h1>Riddle n°4</h1>
		<p>Cerf’Lock received some unbelievable news this morning: a member of the Stealing Deers Gang is a traitor and actually from a rival gang, the <b>MoriArty</b>! Surely he is responsible for Serge Lelama’s death.</p>
		<p>Furthermore, another information just came from the morgue: after a full review of his body, the following note has been found in Serge’s pocket.</p>
		<p><i>“Few tips for my petty jokers:</i></p>
		<ul>
			<li><i>eat 5 fruit and vegetables a day</i></li>
			<li><i>sleep at least 8 hours per night (to favor the production of growth hormones)</i></li>
			<li><i>and don’t leave your shoes everywhere in the flat.”</i></li>
		</ul>
		<p>After this discovery, Cerf’Lock decided to visit a few suspects to identify the traitor. Will you find it too?</p>
		<h3>8 a.m.: David Chalet</h3>
		<p>Cerf’Lock bumped into a closed door, on which the following post-it is stuck: “Do not hesitate to slide a message under this door, I will answer you as soon as possible and I’ll come back to you when I have additional information.” Looking through the keyhole, Cerf’Lock observed a dusty pile of flip flops scattered like a true chaotic dump. Being absent so often definitely makes this member a not to be missed suspect in this case, thought the great detective.</p>
		<h3>9 a.m.: Fabienne Hamon</h3>
		<p>While Cerf’Lock intended to interview this other suspect, but it was eventually him who got interviewed. As soon as he arrived, she welcomed him saying “Hello, what’s your internal weather?” and added “Have you ever tried the gazpacho with vodka? Look: tomato cucumber, pepper, onion and of course… vodka! The ideal dish after party! I follow the advice of a great culinary expert and it’s the only thing I eat!” Noticing this gastronomic inventiveness, Cerf’Lock wondered whether Serge’s poisoning was rather food poisoning...</p>
		<h3>10 a.m.: Sébastien Barlet</h3>
		<p>Wanting to interview  this potential culprit, Cerf’Lock found him devastated, staggering in front of the Rez A. It turned out that the suspect stayed at the party until 4 a.m. at the “fun floor.” He answered each question Cerf’Lock asked with inaudible gurgles.</p>
		<h3>11 a.m.: Emmanuel Rozière</h3>
		<p>He had been seen on Serge’s death day drinking a glass with him in a bar. In addition to radically breaching the curfew, this made him an important suspect in this case. Cerf’Lock found him totally drunk with his brain upside-down. As he wanted to interview him, the suspect cut him right away: “No, no questions… Yes I’m a bit sluggish this morning, and so what! Nothing can compete with the power of concrete!” Surely he went to the same party as the previous suspect and just like him, did not go back to his place before 4 a.m.</p>
		<h3>12 p.m.: Frédéric Dorel</h3>
		<p>Cerf’Lock visited this other suspect while he was doing a voodoo invocation. “What’re you doing?” Cerf’Lock asked him. “Well it’s obvious , I’m creating a religion.” Seeing that Cerf’Lock was surprised by the armada of shoes paving his living room, he added: “This is a religion worshiping the shoes, this mess is necessary and salutary.”  Cerf’Lock wondered whether a religion worshiping poison could have led him to be guilty of Serge’s murder.</p>
		<h3>1 p.m.: Arnaud Poitou</h3>
		<p>Cerf’Lock found him elaborating a Machiavellian plan to fuck up Centrale Lyon. Cerf’Lock got amazed in front of his well organised and cleaned flat, with no signs of dust on the floor. A basket with three kinds of fruits was standing on the dresser and a sweet flavor of leek and pumpkin soup was in the air. Questioning him, Cerf’Lock found out that on the day when Serge died he had slept all day long, as he had got used to doing since September, getting up only an hour to look out for the Intercentrales resurgence.</p>
		<h3>2 p.m.: Jean-Baptiste Avrillier</h3>
		<p>Cerf’Lock found his last suspect in the middle of a photoshoot of a demolition site. He had large dark circles under his eyes. Cerf’lock also noticed one detail: he was wearing the same socks than Serge was, the day of his death. Very much happy to meet Cerf’Lock, the suspect offered him a selfie to capture this historic moment: the demolition of the building C. After this disturbing interview and rushing because of the curfew, Cerf’Lock found his way home, thinking.</p>
		<br>
		<p>“Oh, yes, yes! he claimed suddenly, this is elementary!”</p>
		<p>So, did you find it too?</p>
		<br>
		<br>
		<details class="box" style="width: max-content;">
			<summary>Answer</summary>
			<p>The traitor is Arnaud Poitou!</p>
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