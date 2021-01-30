<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="alternate" hreflang="en" href="/en/program" />
	<link rel="alternate" hreflang="fr" href="/fr/program" />
	<link rel="canonical" href="https://www.cerflock.fr/fr/program" />
	<link rel="manifest" href="/manifest.json">
	<title>Programme - Cerf'Lock Holmes</title>

	<link rel="shortcut icon" href="/data/favicon_16.ico" type="image/x-icon" />
	<link rel="icon" href="/data/favicon_32.png" sizes="32x32" />
	<link rel="icon" href="/data/favicon_48.png" sizes="48x48" />
	<link rel="icon" href="/data/favicon_96.png" sizes="96x96" />
	<link rel="icon" href="/data/favicon_144.png" sizes="144x144" />

	<?php echo '<link rel="stylesheet" type="text/css" href="/css/style.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/style.css') . '" />'; ?>
	<?php echo '<link rel="stylesheet" type="text/css" href="/css/topnav.css?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/css/topnav.css') . '" />'; ?>

	<?php echo '<script type="text/javascript" src="/js/scripts.js?' . filemtime($_SERVER['DOCUMENT_ROOT'].'/js/scripts.js') .'"></script>' ?>
	<script type="text/javascript">
		checkLanguage("fr", "program");
	</script>
</head>

<body>
	<script type="text/javascript">
		autoChangeMode();
	</script>

	<header>
		<nav>

			<a href="tel:+33123456789" class="quick-access" title="Appelez-nous !">
				<div class="icon"><img src="/data/tel.svg" class="svg" alt="Appelez-nous !"></div>
			</a>
			<a href="/en/program" onclick="changeLanguage()" class="quick-access" title="In English, please!">
				<div class="icon"><img src="/data/en.png" alt="English version"></div>
			</a>
			<a href="javascript:void(0);" onclick="changeMode()" class="quick-access" title="Rejoignez le côté obscur...">
				<div class="icon"><img src="/data/dark.svg" class="svg" alt="Activer/Désactiver le mode nuit"></div>
			</a>

			<a href="javascript:void(0);" onclick="open_close_menu()" id="menu">
				<div class="icon"><img src="/data/menu.svg" class="svg" alt="Menu"></div>
			</a>
			<a href="/fr/home" id="titre">
				<div class="icon"><img src="/data/logo_rond.png" alt=""></div>
				<span>Cerf'Lock Holmes</span>
			</a>
			<a href="/fr/program" class="active">
				<div class="icon"><img src="/data/programme.svg" class="svg page" alt=""></div>
				<span>Programme</span>
			</a>
			<a href="/fr/members">
				<div class="icon"><img src="/data/membres.svg" class="svg page" alt=""></div>
				<span>Membres</span>
			</a>
			<a href="/fr/campaigns">
				<div class="icon"><img src="/data/campaigns.svg" class="svg page" alt=""></div>
				<span>Campagnes</span>
			</a>
			<a href="/fr/allos">
				<div class="icon"><img src="/data/allos.svg" class="svg page" alt=""></div>
				<span>Allos</span>
			</a>
		</nav>
	</header>

	<button id="boutonEnigme" onclick="showEnigme()" type="button" title="Ouvrir une énigme">
		<svg viewBox="0 0 24 24" alt="Énigme">
		<g transform="translate(1,1)">
		<path 
		   d="M 10.96875 3 C 9.21782 3 7.56187 3.4216019 6 4.2636719 L 6.7773438 6.0507812 C 7.5582637 5.6672613 8.2600456 5.3933025 8.8847656 5.2265625 C 9.5177356 5.0598325 10.162692 4.9765625 10.820312 4.9765625 C 11.806753 4.9765625 12.563734 5.1968119 13.089844 5.6386719 C 13.615944 6.0805419 13.878906 6.7136725 13.878906 7.5390625 C 13.878906 7.9809325 13.822111 8.369625 13.707031 8.703125 C 13.591951 9.036605 13.394724 9.369635 13.115234 9.703125 C 12.835754 10.036615 12.247563 10.586476 11.351562 11.353516 C 10.251483 12.356846 9.10046 14.139 9 16 L 11 16 L 10.994141 15.96875 C 10.994141 15.21007 11.125612 14.601138 11.388672 14.142578 C 11.659952 13.675688 12.201805 13.087576 13.015625 12.378906 C 14.010295 11.536836 14.673153 10.903726 15.001953 10.478516 C 15.338993 10.053316 15.589506 9.6041363 15.753906 9.1289062 C 15.918406 8.6536762 16 8.1071944 16 7.4902344 C 16 6.0728944 15.55227 4.97119 14.65625 4.1875 C 13.76024 3.39546 12.53061 3 10.96875 3 z M 9 17 L 9 19 L 11 19 L 11 17 L 9 17 z "
		   />  
	   </g></svg>
	</button>

	<main>
		<h1>Programme</h1>
		<p>Découvrez les actions et engagements des Cerf'Lock Holmes !</p>
		<h2>Vie centralienne 🎉</h2>

		<p>La vie à Centrale manque parfois un peu de piquant, vous ne trouvez pas ? Voici nos projets pour dynamiser tout ça !</p>

		<ul>
			<li> Ouverture d'un <b>bar</b> à la MDE, pour profiter de notre fameux cocktail « Sex on the Biche » !</li>
			<li>
				<b>Rénovation</b> de la MDE avec des ateliers/concours décorations de la MDE
			</li>
		</ul>
		<h2>Écologie 🌿</h2>

		<p>Face à l’urgence écologique, Cerf'Lock relève le défi et s’engage ! Nous comptons :</p>
		<ul>
			<li>
				Travailler tout au long du mandat en étroite <b>collaboration</b> avec les différents clubs et assos écolos de l’école
			</li>
			<li>
				Reconduire l’<b>amphi écologie</b> de début d’année et le <b>kit pour des campagnes écoresponsables</b>
			</li>
			<li>
				Travailler à l’élaboration d’un <b>guide d’alternatives écologiques</b> qui serait diffusé aux différents clubs de l’école
			</li>
			<li>
				Organiser en partenariat avec l’administration et les associations concernées des ateliers de <b>fresque du climat</b> à la rentrée (dans l’idéal de manière obligatoire au cours d’un atelier dédié pour les nouveaux étudiants à leur rentrée — sous
				l’hypothèse d’une situation sanitaire compatible)
			</li>
			<li>
				Nous <b>associer</b> aux clubs et assos écolos de l'école pour <b>informer</b> et <b>former</b> les élèves en matière d'environnement, notamment à l'occasion de journées mondiales ou semaines thématiques
			</li>
			<li>
				<b>Encourager la généralisation du bilan carbone</b> à toutes les activités associatives nantraliennes
			</li>
		</ul>
		<h2>Sensibilisation 🧡</h2>

		<p>Pour faire de Centrale le lieu le plus bienveillant et inclusif possible, voici nos projets de sensibilisation !</p>
		<ul>
			<li>
				Dépoussiérer l’image de la sensibilisation, drôle ou grave, mais toujours proche des étudiants et des sujets qui vous concernent : l’incontournable prévention lors des soirées, l’indispensable don du sang et de moelle osseuse, mais aussi la <b>dépendance</b>,
				la <b>santé mentale</b> et les violences sexistes et sexuelles
			</li>
			<li>
				<b>Informer</b> et <b>former</b> les étudiants par une multitude d’actions : communication, conférences, ateliers, défis, lors de <b>mois thématiques</b> !
			</li>
			<li>
				Mettre en place un <b>accompagnement des victimes</b> de violences sexistes et sexuelles en coopération avec les associations concernées
			</li>
			<li>
				Rechercher l’<b>exemplarité</b> dans nos pratiques et nos événements, dans une démarche d’amélioration tout au long de l’année avec les responsables d’événements et en formant systématiquement les staffeurs au sein du BDE…
			</li>
			<li>
				...Puis en le proposant à toute association !
			</li>
			<li>
				Lutter contre tout type de discrimination, violence et isolement : nous serons à votre écoute, avec <b>bienveillance </b>et <b>sérieux</b>, pour vous accompagner sur tout sujet !
			</li>
		</ul>
		<h2>Côté Élèves 🎓</h2>

		<p>Et enfin, que serait un Bureau Des Élèves sans élèves à bureauter ? Voici nos propositions pour vous !</p>
		<ul>
			<li>
				Meilleure <b>intégration</b> des élèves étrangers
			</li>
			<li>
				Promouvoir le cursus ingénieur dans les milieux défavorisés
			</li>
			<li>
				Encourager la <b>parité</b> au sein de Centrale
			</li>
			<li>
				Faire un <b>guide d’arrivée</b> à Nantes (démarches Tan, lieux d'intérêt, certificat médical, ...)
			</li>
		</ul>
	</main>

	<footer>
		<div id="piedDePage">
			<img id="footerlogo" src="/data/logo.png" alt="Cerf'Lock Holmes" />
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