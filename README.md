# Site Web des Cerf'Lock Holmes

[hydrielax.github.io/cerflock](https://hydrielax.github.io/cerflock/)

## Description

Site web de la liste BDE *Cerf'Lock Holmes*, liste candidate au BDE de Centrale Nantes en 2020-2021.

## Fonctionnalités du site web

* Page membres et allos : la liste des membres et des allos sont automatiquement générés à partir d'un fichier csv.
* Mode clair/sombre :
  * Par défaut, le mode est choisi automatiquement en fonction de l'heure
  * Si le site détecte que le système a changé de thème, alors le mode auto suit le thème du système au lieu de l'heure
  * Si l'utilisateur change de thème, alors le thème choisi est forcé et reste en permanence
  * Si l'utilisateur change à nouveau de thème et que ce thème correspond au thème auto, alors on rebascule sur le thème auto.
* Technologies : le site est construit en PHP, qui permet d'ajouter des scripts dans le HTML. En pratique c'est à éviter, il vaut mieux se contenter de HTML et construire des scripts en JavaScript.
* Langues : le site propose une version anglaise et une version française
* Le site web est installable en tant qu'appli (grâce aux fichiers `service-worker.js` et `manifest.json`)
* L'indexation des membres par les moteurs de recherche est désactivée grâce à la balise `
	<meta name="robots" content="noindex">` sur la page html correspondante
* L'indexation des image est désactivée grâce aux fichiers `robots.txt`

## License

* Le code du site web peut être réutilisé et modifié sans aucune restriction, selon les termes de la licence MIT.
* Les images et le contenu rédactionnel sont cependant soumises au droit d'auteur et ne peuvent être réutilisées, partagées ou modifiées sans l'autorisation express des auteurs du site.
