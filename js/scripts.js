//ouvrir et fermer le menu de la barre de navigation sur mobile
function open_close_menu() {
	var x = document.getElementsByTagName('nav')[0];
	if (x.className === "") {
		x.className = "responsive";
	} else {
		x.className = "";
	}
}


//basculer le mode jour/nuit manuellement
function changeMode() {
	//on change le mode
	var body = document.getElementsByTagName('body')[0];
	if (body.className === "") {
		body.className = "dark";
	} else {
		body.className = "";
	}
	//on calcule mode auto
	var auto = getCookie("auto");
	var modeAuto = "light";
	if (auto === "system") {
		if (window.matchMedia('(prefers-color-scheme: dark)').matches) modeAuto = "dark";
	} else {
		if (!isDay()) modeAuto = "dark";
	}
	//on enregistre le mode
	if (body.className === modeAuto) {
		setCookie("mode", "auto");
	} else {
		setCookie("mode", body.className);
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
	/*4 possibilités :
		  - system : on suit le thème du système si celui-ci change automatiquement
		  - light : le thème du système est light et ne change pas
		  - dark : le thème du système est dark et ne change pas
		  - hour : il n'y a pas de thème système
	*/
	var auto = getCookie("auto");
	if (auto == null) {
		if (window.matchMedia('(prefers-color-scheme: dark)').matches) setCookie("auto", "dark");
		else setCookie("auto", "light");
	} else {
		if (auto === "light" && window.matchMedia('(prefers-color-scheme: dark)').matches ||
			auto === "dark" && window.matchMedia('(prefers-color-scheme: light)').matches) {
			setCookie("auto", "system");
		}
	}
	auto = getCookie("auto");

	//on applique le mode
	var body = document.getElementsByTagName('body')[0];
	if (mode === "dark") body.className = "dark";
	if (mode === "auto") {
		if (auto === "system") {
			if (window.matchMedia('(prefers-color-scheme: dark)').matches) body.className = "dark";
		} else {
			if (!isDay()) body.className = "dark";
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
	//de http://www.siteduzero.com/tutoriel-3-4721-lire-un-cookie.html
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
	document.cookie = sName + "=" + encodeURIComponent(sValue) + ";path=/;expires=" + expires.toGMTString() + ";secure";
}


//changer la langue du site
function changeLanguage() {
	var langue = getCookie("langue");
	if (langue === "en") setCookie("langue", "fr")
	else setCookie("langue", "en");
}

function checkLanguage(lg, page) {
	var langue = getCookie("langue");
	if (langue === null) {
		setCookie("langue", lg);
	} else {
		if (langue === "fr" && lg === "en") window.location.href = "../fr/" + page;
		if (langue === "en" && lg === "fr") window.location.href = "../en/" + page;
	}
}


//note : ce que dit la loi sur les cookies
//https://www.cnil.fr/fr/cookies-et-traceurs-que-dit-la-loi
//=> pas de consentement nécéssaire dans notre cas