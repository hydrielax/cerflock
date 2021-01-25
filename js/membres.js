//liste des membres
var list_membres = [
	["Adrien", "Gaillard", "Président", "President", "", ""],
	["Sarah", "Gastineau", "Vice-Présidente", "Vice-President", "", ""],
	["Alice", "Petit", "Vice-Présidente Externe ", "External Vice-President", "", ""],
	["Yohan", "Kulhaneck", "Vice-Président Interne", "Internal Vice-President", "", ""],
	["Alexis", "Fetet", "Secrétaire Général", "General Secretary", "En retard ! En retard ! Voilà qui n'arrivera pas à notre secrétaire avec son avance réglementaire", "I'm late ! I'm late ! That would not happend to our secretary and his reglementary advance"],
	["Joshua", "Le Bourhis", "Vice-Secrétaire", "Vice-Secretary", "La pronciation de mon nom est un mystère, appelez moi Josh, ça sera plus simple pour tout le monde", "Noone knows how to pronounce my name so call me Josh, it will be easier for everyone"],
	["Béryl", "Cassel", "Trésorier", "Treasurer", "C'est assez béryble à dire, mais l'argent, C'EST MOI !!!", "Pretty beryble to say, but MONEY IS ME !!"],
	["Romain", "Gautier", "Vice-Trésorier", "Vice-Treasurer", "Rien ne sert de partir à point, il faut courir. Une philosophie de vie pour moi.", "Hakuna matata."],
	["Sébastien", "Marécaux", "Respo Écologie", "Ecology Manager", "Il est breton, mais pour lui, les pâtes, c'est aussi bon avec de l'huile d’olive qu'avec du beurre.", "He is Breton, but for him, pasta are as good with olive oil than with butter. "],
	["Arsène", "Langevin", "Pôle Écologie", "Ecology Pole", "brave biche confiné actuellement au plus profonde de la campagne", "brave doe currently confined to the depths of the countryside"],
	["Coraline", "Staub-Milants", "Pôle Écologie", "Ecology Pole", "J'aime faire du piano, jouer du piano, écrire sur le piano, déménager le piano. Bref, j'aime le piano. Et le monocycle aussi. Sinon je suis quelqu'un de normal.", " I like to do the piano, play the piano, write on the piano, move the piano. In short, I love the piano. And the unicycle too. Otherwise I am a normal person."],
	["Ethan", "Tarragano", "Pôle Écologie", "Ecology Pole", "", ""],
	["Julien", "Bouchet", "Pôle Écologie", "Ecology Pole", "", ""],
	["Laure", "Gombert", "Respo Sensi", "Awareness Manager", "Chez les Archis c'est un pilier, chez les Ingés c'est la classe incarnée", "An architectural pillar, an ingenior kick-ass"],
	["Lorène", "Morenval", "Pôle Sensi", "Awareness Pole", "", ""],
	["Tony", "Jammes", "Pôle Sensi", "Awareness Pole", "", ""],
	["Maël", "Grandin", "Respo Event", "Event Manager", "J'ai pas la carrure de Phelps mais je suis un grand nageur comme Gregory.", "I may not be as strong as Phelps, but I'm a great swimmer like Gregory."],
	["Léa", "Chatelais", "Respo Chorée ", "Choreography Manager", "", ""],
	["Chloé", "Dissane", "Pôle Event", "Event Pole", "", ""],
	["Ewen", "Cloirec", "Pôle Event", "Event Pole", "", ""],
	["Lucas", "Dethoor", "Pôle Event", "Event Pole", "", ""],
	["Mona", "Rysak", "Pôle Event", "Event Pole", "", ""],
	["Quentin", "Leconte", "Pôle Event", "Event Pole", "", ""],
	["Roméo", "Cagol", "Pôle Event", "Event Pole", "Là pour servir et faire du Sal  ", "Here to serve and do some Sal "],
	["Willian", "Pinto", "Pôle Event", "Event Pole", "", ""],
	["Alexis", "Delage", "Co-Respo Comm' & DSI", "Com' co-Manager & IT Director", "C'est lui qui a fait le site : si vous trouvez une erreur, vous pouvez lui taper dessus !", "He made this website: so if you find a bug, you can injure him!"],
	["Jean-Baptiste", "Hammann", "Co-Respo Comm'", "Com' co-Manager", "", ""],
	["Ophéliane", "Jager-Bah", "Respo Graphisme", "Graphic Design Manager", "Parfois hilarante, parfois consternante, elle n'en reste pas moins attachante ...", "Sometimes funny, sometimes scary, her energy is somewhat endearing ..."],
	["Vincent", "Houée", "Graphiste", "Graphic Designer", "AKA Vincent Ouais : Notre Yesman nantais connait tout les bon plans des environs", "AKA Vincent Yeah: Our Yesman from Nantes knows all the best cityspots"],
	["Clément", "Rouzet", "Respo MDE", "Student's Home Manager", "Salut, moi c'est Clément, le Barman de la liste ! Vous pouvez compter sur moi pour vous faire profiter un max des mes connaissances en bartending !", "Hi, I'm Clement the Bartender ! You can count on me to make you enjoy my bartending skills a lot !"],
	["Dimitri", "Paumard", "Respo Alternance", "Aprenticeship Referent", "S'occupe de la liaison entre les élèves apprentit et le bde", "I'm the link between Aprentership student and the student union"],
	["Gabrielle", "Ni", "Respo Club", "Club's Referent", "Je suis pas très douée mais je fais de mon mieux, soyez gentils avec moi svp!", "I'm not very clever but I'm doing my best, please be kind to me! "],
	["Wissal", "Filali", "Respo International", "International Referent", "", ""],
	["François", "Thiriet", "Respo Logistique", "Logistics Manager", "Toujours en vadrouille, et grand habitué de la SNCF, il connaît les lignes TGV comme sa poche. Il n'aime pas le repos et adore organiser des événements et gérer des troupes. ", "Always on the move, and SNCF-lover, he knows TGV lines like the back of his hand.  He rarely rests and loves organizing events and managing troops."],
	["Baptiste", "Maillard", "Pôle Logistique", "Logistics Pole", "", ""],
	["Nathan", "Montebrun", "Pôle Logistique ", "Logistics Pole", "", ""],
	["Alan", "Roussel", "Staff", "Staff", "", ""],
	["Michel", "Le Dez", "Staff", "Staff", "Breton et fier de l'être !", "Breton and proud of it !"],
	["Oriane", "Alletru", "Staff", "Staff", "« Trop mims » et « pas de soucis » sont mes expressions fétiches ", "‘Trop mims’ and ‘pas de soucis’ are my favourite expressions "],
	["Robin", "Chatton", "Staff", "Staff", "100% sudiste", "100% southerner"]

];

//crée le code pour avoir la liste des membres
function generer_cartes(en) {
	var code = "";
	for (var i = 0; i < list_membres.length; i++) {
		code += "<div class=carte><div class=image><img src='/data/photos_membres/" + list_membres[i][0] + " " + list_membres[i][1] +
			".jpg' alt=''></div><div class=texte><h3>" + list_membres[i][0] + " " + list_membres[i][1] + "</h3><h4>" + list_membres[i][2 + en] + "</h4><p>" +
			list_membres[i][4 + en] + "</p></div></div>";
	}
	document.getElementsByClassName("jeu")[0].innerHTML = code;
}