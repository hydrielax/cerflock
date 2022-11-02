# Site Web des Cerf'Lock Holmes

[cerflock.herokuapp.com](https://cerflock.herokuapp.com/)

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
