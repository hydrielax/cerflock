function open_close_menu() {
	var x = document.getElementsByTagName('nav')[0];
	if (x.className === "") {
		x.className = "responsive";
	} else {
		x.className = "";
	}
}