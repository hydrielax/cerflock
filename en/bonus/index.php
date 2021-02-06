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
	<title>Bonus - Cerf'Lock Holmes</title>

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

			<a href="tel:+33123456789" class="quick-access" title="Call us!">
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
			<a href="/en/events">
				<div class="icon"><img src="/data/events.svg" alt=""></div>
				<span>Events</span>
			</a>
			<a href="/en/allos">
				<div class="icon"><img src="/data/icons/allos.svg" class="svg page" alt=""></div>
				<span>Allos</span>
			</a>

		</nav>
	</header>

	<main>
		<h1>Chapitre premier<br>M. Sherlock Holmes</h1>

		<p>En 1878, reçu médecin à l’Université de Londres, je me rendis à Netley pour suivre les cours prescrits aux chirurgiens de l’armée ; et là, je complétai mes études. On me désigna ensuite, comme aide-major, pour le 5e régiment de fusiliers de Northumberland
			en garnison aux Indes.</p>

		<p>Avant que j’eusse pu le rejoindre, la seconde guerre d’Afghanistan avait éclaté. En débarquant à Bombay, j’appris que mon corps d’armée s’était engagé dans les défilés ; il avait même poussé très avant en territoire ennemi. A l’exemple de plusieurs
			autres officiers dans mon cas, je partis à sa poursuite aussitôt ; et je parvins sans encombre à Kandahar, où il stationnait. J’entrai immédiatement en fonctions.
		</p>

		<p>Si la campagne procura des décorations et de l’avancement à certains, à moi elle n’apporta que déboires et malheurs. On me détacha de ma brigade pour m’adjoindre au régiment de Berkshire ; ainsi je participai à la fatale bataille de Maiwand. Une balle
			m’atteignit à l’épaule ; elle me fracassa l’os et frôla l’artère sous-clavière. Je n’échappai aux sanguinaires Ghazis que par le dévouement et le courage de mon ordonnance Murray : il me jeta en travers d’un cheval de bât et put me ramener dans nos
			lignes.
		</p>

		<p>Épuisé par les souffrances et les privations. Je fus dirigé, avec un convoi de nombreux blessés, sur l’hôpital de Peshawar. Bientôt, j’entrai en convalescence ; je me promenais déjà dans les salles, et même j’allais me chauffer au soleil sous la véranda,
			quand la fièvre entérique me terrassa : c’est le fléau de nos colonies indiennes. Des mois durant, on désespéra de moi. Enfin je revins à la vie. Mais j’étais si faible, tellement amaigri, qu’une commission médicale décida mon rapatriement immédiat.
			Je m’embarquai sur le transport Oronte et, un mois plus tard, je posai le pied sur la jetée de Portsmouth. Ma santé était irrémédiablement perdue. Toutefois, un gouvernement paternel m’octroya neuf mois pour l’améliorer.
		</p>

		<p>Je n’avais en Angleterre ni parents ni amis : j’étais aussi libre que l’air – autant, du moins, qu’on peut l’être avec un revenu quotidien de neuf shillings et six pence ! Naturellement, je me dirigeai vers Londres, ce grand cloaque où se déversent
			irrésistiblement tous les flâneurs et tous les paresseux de l’Empire. Pendant quelque temps, je menai dans un hôtel privé du Strand une existence sans but et sans confort ; je dépensais très libéralement. A la fin, ma situation pécuniaire m’alarma.
			Je me vis en face de l’alternative suivante : ou me retirer quelque part à la campagne, ou changer du tout au tout mon train de vie. C’est à ce dernier parti que je m’arrêtai ; et, pour commencer, je résolus de quitter l’hôtel pour m’établir dans un
			endroit moins fashionable et moins coûteux.</p>

		<p>Le jour où j’avais mûri cette grande décision, j’étais allé prendre un verre au Criterion Bar ; quelqu’un me toucha l’épaule. Je reconnus l’ex-infirmier Stamford, que j’avais eu sous mes ordres à Barts. Pour un homme réduit à la solitude, c’était vraiment
			une chose agréable que l’apparition d’un visage familier. Auparavant Stamford n’avait jamais été un réel ami, mais, ce jour-là, je l’accueillis avec chaleur, et lui, parallèlement, parut enchanté de la rencontre. Dans l’exubérance de ma joie, je l’invitai
			à déjeuner au Holborn ; nous partîmes ensemble en fiacre.</p>

		<p>« A quoi avez-vous donc passé le temps, Watson ? me demanda-t-il sans dissimuler son étonnement, tandis que nous roulions avec une bruit de ferraille à travers les rues encombrées de Londres. Vous êtes aussi mince qu’une latte et aussi brun qu’une noix
			! »
		</p>

		<p>Je lui racontai brièvement mes aventures.</p>

		<p>« Pauvre diable ! fit-il avec compassion, après avoir écouté mon récit. Qu’est-ce que vous vous proposez de faire maintenant ?</p>

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