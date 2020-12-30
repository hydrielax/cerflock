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
	var body = document.getElementsByTagName('body')[0];
	if (body.className === "") {
		body.className = "dark";
	} else {
		body.className = "";
	}
}

//choisir le mode jour/nuit automatiquement
function autoChangeMode() {
	var body = document.getElementsByTagName('body')[0];
	var now = new Date();
	var heure = ('0' + now.getHours()).slice(-2);
	if (heure > 18 || heure < 7) body.className = "dark";
	if (window.matchMedia('(prefers-color-scheme: dark)').matches) body.className = "dark";
	if (window.matchMedia('(prefers-color-scheme: light)').matches) body.className = "";
}