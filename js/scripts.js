//ouvrir et fermer le menu de la barre de navigation sur mobile
function open_close_menu() {
	var x = document.getElementsByTagName('nav')[0];
	if (x.className === "") {
		x.className = "responsive";
	} else {
		x.className = "";
	}
}



var page = document.getElementsByTagName('html')[0];

//basculer le mode jour/nuit manuellement
function changeMode() {
	//on change le mode
	if (page.className === "") {
		page.className = "dark";
	} else {
		page.className = "";
	}
	var actualMode = page.className;
	if (actualMode === "") actualMode = "light";

	//on calcule mode auto
	var autoSetting = getCookie("auto");
	var modeIfAutoEnable = "light";
	if (autoSetting === "system") {
		if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
			modeIfAutoEnable = "dark";
		}
	} else {
		if (!isDay()) modeIfAutoEnable = "dark";
	}

	//on enregistre le mode
	if (actualMode === modeIfAutoEnable) {
		setCookie("mode", "auto");
	} else {
		setCookie("mode", actualMode);
	}
}

//choisir le mode jour/nuit au chargement de la page
function autoChangeMode() {

	//on initialise le cookie mode (enregistre le mode choisi)
	//3 possibilités : auto, light (manuel), dark (manuel)
	var mode = getCookie("mode");
	if (mode == null) {
		setCookie("mode", "auto");
		mode = "auto";
	}

	//on initialise le cookie auto (indique si on se base sur l'heure ou le thème système)
	/*3 possibilités :
		  - system : on suit le thème du système si celui-ci change automatiquement
		  - h-light : on se base sur les heures pour l'instant, dernier thème lu : blanc
		  - h-dark : on se base sur les heures pour l'instant, dernier thème lu : noir
	*/
	var auto = getCookie("auto");
	if (auto == null) {
		if (window.matchMedia('(prefers-color-scheme: dark)').matches) setCookie("auto", "dark");
		else setCookie("auto", "light");
	} 
	else if (
		auto === "light" && window.matchMedia('(prefers-color-scheme: dark)').matches ||
		auto === "dark" && window.matchMedia('(prefers-color-scheme: light)').matches) 
	{
		/* on détecte que le thème système de l'utilisateur a changé*/
		setCookie("auto", "system");
	}
	auto = getCookie("auto");

	//on applique le mode
	if (mode === "dark") page.className = "dark";
	if (mode === "auto") {
		if (auto === "system") {
			if (window.matchMedia('(prefers-color-scheme: dark)').matches) page.className = "dark";
		} else {
			if (!isDay()) page.className = "dark";
		}
	}
}


//vérifie si il fait jour
function isDay() {
	var now = new Date();
	var heure = ('0' + now.getHours()).slice(-2);
	return (heure <= 18 && heure >= 7);
}

//lit un cookie
function getCookie(sName) {
	//de http://www.siteduzero.com/tutoriel-3-4721-lire-un-cookie.body
	var oRegex = new RegExp("(?:; )?" + sName + "=([^;]*);?");
	if (oRegex.test(document.cookie)) {
		return decodeURIComponent(RegExp["$1"]);
	} else {
		return null;
	}
}

//écrit un cookie
function setCookie(sName, sValue) {
	var today = new Date();
	var expires = new Date();
	expires.setTime(today.getTime() + (365 * 24 * 60 * 60 * 1000));
	document.cookie = sName + "=" + encodeURIComponent(sValue) + ";path=/;expires=" + expires.toGMTString();
}


if ('serviceWorker' in navigator) {
	// enregistrer le service worker 
	navigator.serviceWorker.register('/service-worker.js');
}

//note : ce que dit la loi sur les cookies
//https://www.cnil.fr/fr/cookies-et-traceurs-que-dit-la-loi
//=> pas de consentement nécéssaire dans notre cas

function showEnigme() {
	var x = getComputedStyle(document.getElementById("popup")).display;
	if (x == "none") {
		x = "flex";
	} else {
		x = "none";
	}
	document.getElementById("popup").style.display = x;
}

function convert() {
	document.querySelectorAll('img.svg').forEach(function(img) {
		var imgID = img.id;
		var imgClass = img.className;
		var imgURL = img.src;

		fetch(imgURL).then(function(response) {
			return response.text();
		}).then(function(text) {

			var parser = new DOMParser();
			var xmlDoc = parser.parseFromString(text, "text/xml");

			// Get the SVG tag, ignore the rest
			var svg = xmlDoc.getElementsByTagName('svg')[0];

			// Add replaced image's ID to the new SVG
			if (typeof imgID !== 'undefined') {
				svg.setAttribute('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if (typeof imgClass !== 'undefined') {
				svg.setAttribute('class', imgClass + ' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			svg.removeAttribute('xmlns:a');

			// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
			if (!svg.getAttribute('viewBox') && svg.getAttribute('height') && svg.getAttribute('width')) {
				svg.setAttribute('viewBox', '0 0 ' + svg.getAttribute('height') + ' ' + svg.getAttribute('width'))
			}

			// Replace image with new SVG
			img.parentNode.replaceChild(svg, img);

		});

	});
}