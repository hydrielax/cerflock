<!DOCTYPE html>

<html>
<?php $file = "allos/uber"; ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="alternate" hreflang="en" href="/en/<?php echo $file; ?>" />
	<link rel="alternate" hreflang="fr" href="/fr/<?php echo $file; ?>" />
	<link rel="canonical" href="https://www.cerflock.herokuapp.fr/fr/<?php echo $file; ?>" />
	<link rel="manifest" href="/manifest.json">
	<title>Allô Coursier Vélo - Cerf'Lock Holmes</title>

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
			<a href="/fr/program">
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

	<style>
		a.gros-bouton {
			float:right;
			margin-top:1.5rem;
		}
		button.gros-bouton {
			font-size:1.5rem;
			height:2em;
			padding:0.5em;
			margin:auto 0;
		}
		@media screen and (max-width: 500px) {
			button.gros-bouton {
				font-size: 1.1rem;
			}
		}
	</style>
	<main>
		<h1>Allô Coursier Vélo</h1>
		<style>h2{font-size: 2.9rem;}</style>
		<p>
			Voici tous les menus que tu peux nous commander ! Tu n'as plus qu'à faire ton choix 😉
		</p>
		<h2>Pita à composer</h2>
		<div class="jeu">
			<div>
				<h3>Choix Protéine</h3>
				<ul>
					<li>Blanc de Poulet grillé</li>
					<li>Poulet épicé mariné</li>
					<li>Poulet caesar</li>
					<li>Bœuf</li>
					<li>Fallafels nature</li>
					<li>Fallafels épicé</li>
					<li>Halloumi</li>
					<li>Boulettes de lentilles bio</li>
					<li>Thon</li>
				<ul>
			</div>
			<div>
				<h3>Choix Pain 🌿</h3>
				<ul>
					<li>pain blanc</li>
					<li>pain complet</li>
				</ul>
				<h3>Choix Base 🌿</h3>
				<ul>
					<li>Guacamole</li>
					<li>Houmous</li>
					<li>Tzatziki</li>
					<li>Sans</li>
				</ul>
			</div>
			<div>
				<h3>Choix Légumes (6 max) 🌿</h3>
				<ul>
					<li>Alfalfa</li>
					<li>Carottes</li>
					<li>Champignons</li>
					<li>Concombres</li>
					<li>Cornichons</li>
					<li>Maïs</li>
					<li>Oignons</li>
					<li>Olives</li>
					<li>Piment jalapenos</li>
					<li>Poivrons verts</li>
					<li>Tomates</li>
				</ul>
			</div>
			<div>
				<h3>Choix Fromage 🌿</h3>
				<ul>
					<li>cheddar</li>
					<li>cream cheese</li>
					<li>feta</li>
					<li>parmesan</li>
					<li>sans</li>
				</ul>
				<h3>Choix Salade 🌿</h3>
				<ul>
					<li>iceberg</li>
					<li>romaine</li>
					<li>mâche</li>
					<li>sans</li>
				</ul>
			</div>
			<div>
				<h3>Choix Sauce</h3>
				<ul>
					<li>Aïoli</li>
					<li>Barbecue</li>
					<li>Burger</li>
					<li>Caesar</li>
					<li>Curry</li>
					<li>Fromage blanc tomates confites</li>
					<li>Hot-Pit</li>
					<li>Miel moutarde</li>
					<li>Piment d’espelette</li>
					<li>Poivre</li>
					<li>Thaï</li>
				</ul>
			</div>
		</div>
		
		<div class="jeu">
			<div>
				<h2>Arancini</h2>
				<ul>
					<li><b>POTAGER 🌿 :</b> riz, légumes de saison, chapelure</li>
					<li><b>FERMIER 🌿 :</b> riz, fourme d’ambert, comté, parmesan, chapelure</li>
					<li><b>BŒUF BRAISÉ :</b> riz, joue de boeuf braisée, oignons, tomates confites, comté AOP, chapelure</li>
					<li><b>NEW DELHI :</b> riz, filet de poulet, sauce au curry, tagliatelles de carottes, pommes, abricots secs, chapelure</li>
					<li><b>ARANCIFISH </b> : riz, filet de cabillaud, carottes, basilic, citronnelle, chapelure</li>
					<li><b>HEBDO :</b> riz, jambon supérieur, camembert rôti au miel, chapelure</li>
				</ul>
				<p><i>*tous les ARANCINI sont servis avec un SUPPLI 🌿 : riz, tomate, parmesan, basilic, carotte, oignon, mozzarella</i></p>
				<h2>Anglais</h2>
				<ul><li><b>FISH N CHIPS :</b> lieu noir, frites, purée de petits pois à la menthe</li></ul>
				<h2>Poutine</h2>
				<ul>
					<li>Savoyarde</li>
					<li>Végé 🌿</li>
				</ul>
			</div>

			<!--div>
				<h2>Poutine</h2>
				<ul>
					<li><b>BŒUF :</b> frites, boeuf, poivrons, oignons rouges, sauce poutine, fromage poutine, oignons frits</li>
					<li><b>POULET :</b> frites, poulet mariné, poivrons, oignons rouges, sauce poutine, fromage poutine, oignons frits</li>
					<li><b>POITRINE DE PORC :</b> frites, poitrine de porc fumée, poivrons, oignons rouges, sauce poutine, fromage poutine, oignons frits</li>
					<li><b>VORACE :</b> frites, boeuf, poulet mariné, poitrine de porc fumée, poivrons, oignons rouges, sauce poutine, fromage poutine, oignons frits</li>
					<li><b>CURE :</b> frites, curé nantais, sauce poutine, fromage poutine, oignons frits</li>
					<li><b>CLASSIQUE :</b> frites, sauce poutine, fromage poutine, oignons frits</li>
					<li><b>VEGE :</b> frites, maïs, chou-fleur, poivrons oignons rouges, sauce blanche, fromage poutine, oignons frits</li>
					<li><b>CHÈVRE MIEL :</b> frites, chèvre, miel, sauce poutine, fromage poutine, oignons frits</li>
				</ul>
			</div-->

			<div>
				<h2>Galettes</h2>
				<ul>
					<li><b>TI BLEUE :</b> bacon fumé, fourme d’ambert AOP</li>
					<li><b>TI FROMENTON 🌿 :</b> emmental, fourme d’ambert AOP, chèvre, mâche</li>
					<li><b>TI MATILDA 🌿 :</b> chèvre, roquette, noix</li>
					<li><b>TI GUÉMENÉ :</b> andouille de guémené, emmental, sauce moutarde à l’ancienne, mâche</li>
					<li><b>TI LILI 🌿 :</b> oeuf, emmental, fondue d’oignons au vinaigre de cidre, coriandre</li>
					<li><b>TI LOEIZ :</b> oeuf, emmental, jambon blanc, ciboulette</li>
					<li><b>TI LUSIA 🌿 :</b> chèvre, tomates, champignons</li>
					<li><b>TI MAMM :</b> oeuf, jambon blanc, tomates, coriandre</li>
					<li><b>TI TAD :</b> oeuf, emmental, poulet, champignon</li>
					<li><b>TI TOMAZ :</b> oeuf, bacon, champignon</li>
					<li><b>TI DOUBLE JAMBON FROMAGE :</b> jambon blanc, emmental</li>
					<li><b>TI DOUBLE OEUF FROMAGE 🌿 :</b> oeuf, emmental</li>
					<li><b>TI DOUBLE OEUF JAMBON :</b> oeuf, jambon blanc</li>
				</ul>
			</div>

			<div>
				<h2>Pizza à la part (3 max)</h2>
				<ul>
					<li>Tomate mozza 🌿</li>
					<li>Tomate champignon 🌿</li>
					<li>Tomate jambon fromage</li>
					<li>Tomate chorizzo</li>
					<li><b>ROYALE :</b> tomate, jambon, champignon, emmental</li>
					<li><b>3 FROMAGES TOMATE 🌿 :</b> tomate, chèvre, roquefort, emmental</li>
					<li><b>3 FROMAGES CREME 🌿 :</b> crème fraiche, chèvre, roquefort, emmental</li>
					<li><b>VÉGÉTARIENNE 🌿 :</b> tomate, aubergine, mozzarella, pesto</li>
					<li><b>BURGER :</b> tomate, viande hachée, oignons, tomate, cheddar, sauce barbecue, emmental</li>
					<li><b>CREMIERE :</b> crème fraiche, lardons, champignons, emmental</li>
					<li><b>SAVOYARDE :</b> crème fraiche, lardons, pomme de terre, oignon, reblochon, emmental</li>
					<li><b>PESTO :</b> crème fraiche, jambon, champignon, emmental, pesto</li>
					<li><b>CHEVRE MIEL 🌿 :</b> crème fraiche, chèvre, miel, emmental</li>
					<li><b>CHICKEN RUSTIK :</b> poulet, oignon, reblochon, emmental</li>
				</ul>
			</div>
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