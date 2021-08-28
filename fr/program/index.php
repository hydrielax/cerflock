<!DOCTYPE html>

<html>
<?php $path = $_SERVER['PHP_SELF']; $file = basename (dirname( $path)); ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="alternate" hreflang="en" href="/en/<?php echo $file; ?>" />
	<link rel="alternate" hreflang="fr" href="/fr/<?php echo $file; ?>" />
	<link rel="canonical" href="https://cerflock.herokuapp.com/fr/<?php echo $file; ?>" />
	<link rel="manifest" href="/manifest.json">
	<title>Programme - Cerf'Lock Holmes</title>

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
			<a href="/fr/program" class="active">
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

	<main>
		<h1>Programme</h1>
		<p>Découvrez les actions et engagements des Cerf'Lock Holmes !</p>
		<br>
		<details class="box" >
			<summary><h2>Vie centralienne 🎉</h2></summary>
			<p>La vie à Centrale manque parfois un peu de piquant, vous ne trouvez pas ? Voici nos projets pour dynamiser tout ça !</p>
			<ul>
				<li> Ouverture d'un <b>bar</b> à la MDE, pour profiter de notre fameux cocktail « Sex on the Biche » !</li>
				<li> <b>Rénovation</b> de la MDE avec des ateliers/concours décorations de la MDE </li>
			</ul>
		</details>
		<br>
		<details class="box" >
			<summary><h2>Écologie 🌿</h2></summary>
			<p>Face à l’urgence écologique, Cerf'Lock relève le défi et s’engage ! Nous comptons :</p>
			<ul>
				<li>Travailler tout au long du mandat en étroite <b>collaboration</b> avec les différents clubs et assos écolos de l’école</li>
				<li>Reconduire l’<b>amphi écologie</b> de début d’année et le <b>kit pour des campagnes écoresponsables</b></li>
				<li>Travailler à l’élaboration d’un <b>guide d’alternatives écologiques</b> qui serait diffusé aux différents clubs de l’école</li>
				<li>Organiser en partenariat avec l’administration et les associations concernées des ateliers de <b>fresque du climat</b> à la rentrée, notamment pour ceux n’ayant pas un tel atelier prévu dans leur cursus</li>
				<li>Nous <b>associer</b> aux clubs et assos écolos de l'école pour <b>informer</b> et <b>former</b> les élèves en matière d'environnement, notamment à l'occasion de journées mondiales ou semaines thématiques</li>
				<li><b>Encourager la généralisation du bilan carbone</b> à toutes les activités associatives nantraliennes</li>
			</ul>
		</details>
		<br>
		<details class="box" >
			<summary><h2>Sensibilisation 🧡</h2></summary>
			<p>Pour faire de Centrale le lieu le plus bienveillant et inclusif possible, voici nos projets de sensibilisation !</p>
			<ul>
				<li>Dépoussiérer l’image de la sensibilisation, drôle ou grave, mais toujours proche des étudiants et des sujets qui vous concernent : l’incontournable prévention lors des soirées, l’indispensable don du sang et de moelle osseuse, mais aussi la <b>dépendance</b>,
					la <b>santé mentale</b> et les violences sexistes et sexuelles</li>
				<li><b>Informer</b> et <b>former</b> les étudiants par une multitude d’actions : communication, conférences, ateliers, défis, lors de <b>mois thématiques</b> !</li>
				<li>Mettre en place un <b>accompagnement des victimes</b> de violences sexistes et sexuelles en coopération avec les associations concernées</li>
				<li>Rechercher l’<b>exemplarité</b> dans nos pratiques et nos événements, dans une démarche d’amélioration tout au long de l’année avec les responsables d’événements et en formant systématiquement les staffeurs au sein du BDE…</li>
				<li>...Puis en le proposant à toute association !</li>
				<li>Lutter contre tout type de discrimination, violence et isolement : nous serons à votre écoute, avec <b>bienveillance </b>et <b>sérieux</b>, pour vous accompagner sur tout sujet !</li>
			</ul>
		</details>
		<br>
		<details class="box" >
			<summary><h2>Côté Élèves 🎓</h2></summary>
			<p>Et enfin, que serait un Bureau Des Élèves sans élèves à bureauter ? Voici nos propositions pour vous !</p>
			<ul>
				<li>Meilleure <b>intégration</b> des élèves étrangers</li>
				<li>Promouvoir le cursus ingénieur dans les milieux défavorisés</li>
				<li>Encourager la <b>parité</b> au sein de Centrale</li>
				<li>Faire un <b>guide d’arrivée</b> à Nantes (démarches Tan, lieux d'intérêt, certificat médical, ...)</li>
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
					<p><a href="/fr/legal">Mentions légales</a></p>
					<p><i>Fait avec des biches, de l'amour, de l'humour et du fun !</i></p>
				</div>
				<div id="footer2">
					<h2>Nos Réseaux !</h2>
					<p>
						<a href="https://www.facebook.com/cerflock" target="_blank" class="hidden" title="Facebook" id="facebook">
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