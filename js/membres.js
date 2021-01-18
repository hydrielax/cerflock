//liste des membres
var list_membres = [
	["Adrien", "Gaillard", "Président", "President", "", "", "Manequin pour screenshot zoom"],
	["Alan", "Roussel", "Pôle Comm", "Communication center", "", "", ""],
	["Alexis", "Delage", "Co-Respo Comm & DSI", "Comm co-Leader & IT director", "Né dans la région nantaise, il est mi-Breton, mi-Français, et mi-fou", "Born in the department of Nantes, he's half Breton, half French, and half mad", ""],
	["Alexis", "Fetet", "Secrétaire général", "General secretary", "En retard ! En retard ! Voilà qui n'arrivera pas à notre secrétaire avec son avance réglementaire", "I'm late ! I'm late ! That would not happend to our secretary and his reglementary advance", "Le tyran"],
	["Alice", "Petit", "Vice-Prez Externe ", "Vice-President", "", "", ""],
	["Arsène", "Langevin", " pôle écologie", "ecology pole", "brave biche confiné actuellement au plus profonde de la campagne", "brave doe currently confined to the depths of the countryside", "Quand Zoro trace un Z, Arsène laisse un père Noël"],
	["Baptiste", "Maillard", "Pôle Logistique", "Logistics Sector/Cluster/Center ou Hub", "", "", ""],
	["Béryl", "Cassel", "Trésorier", "Paymaster (ou treasurer, mais c'est moins drôle)", "C'est assez béryble à dire, mais l'argent, C'EST MOI !!!", "Pretty beryble to say, but MONEY IS ME !!", ""],
	["Chloé", "Dissane", "Pôle événement ", "Pôle event", "", "", ""],
	["Clément", "Rouzet", "Respo MDE", "Student's Home Manager", "Salut, moi c'est Clément, le Barman de la liste ! Vous pouvez compter sur moi pour vous faire profiter un max des mes connaissances en bartending !", "Hi, I'm Clement the Bartender ! You can count on me to make you enjoy my bartending skills a lot !", "Pablo respo bar"],
	["Coraline", "Staub-Milants", "Pôle Ecologie", "Ecology Pole", "J'aime faire du piano, jouer du piano, écrire sur le piano, déménager le piano. Bref, j'aime le piano. Et le monocycle aussi. Sinon je suis quelqu'un de normal.", " I like to do the piano, play the piano, write on the piano, move the piano. In short, I love the piano. And the unicycle too. Otherwise I am a normal person.", ""],
	["Dimitri", "Paumard", "Respo alternance", "In charge of Aprentership", "S'occupe de la liaison entre les élèves apprentit et le bde", "I'm the link between Aprentership student and the student union", ""],
	["Ethan", "Tarragano", "Pôle Ecologie", "Ecology pole", "", "", ""],
	["Ewen", "Cloirec", "Pôle event", "Event", "", "", ""],
	["François", "Thiriet", "Respo logistique", "Logistics manager", "Toujours en vadrouille, et grand habitué de la SNCF, il connaît les lignes TGV comme sa poche. Il n'aime pas le repos et adore organiser des événements et gérer des troupes. ", "Always on the move, and SNCF-lover, he knows TGV lines like the back of his hand.  He rarely rests and loves organizing events and managing troops.", ""],
	["Gabrielle", "Ni", "Respo club", "Club manager", "Je suis pas très douée mais je fais de mon mieux, soyez gentils avec moi svp!", "I'm not very clever but I'm doing my best, please be kind to me! ", ""],
	["Jean-Baptiste", "Hammann", "Respo Comm", "Communication Manager", "", "", ""],
	["Joshua", "Le Bourhis", "Vice-Secrétaire", "Vice-Secretary", "La pronciation de mon nom est un mystère, appelez moi Josh, ça sera plus simple pour tout le monde", "Noone knows how to pronounce my name so call me Josh, it will be easier for everyone", "Jossua, Josh, jochua, Joss ... Mec tu nous perds"],
	["Julien", "Bouchet", "Pôle Écologie", "Ecology pole", "", "", ""],
	["Laure", "Gombert", "Respo Sensi", "Awareness Manager", "Chez les Archis c'est un pilier, chez les Ingés c'est la classe incarnée", "An architectural pillar, an ingenior kick-ass", ""],
	["Léa", "Chatelais", "Respo chorée ", "Choreography manager", "", "", ""],
	["Lorène", "Morenval", "Pôle sensi", "", "", "", ""],
	["Lucas", "Dethoor", "Pole event", "Event pole", "", "", ""],
	["Maël", "Grandin", "Respo Event", "Event Manager", "J'ai pas la carrure de Phelps mais je suis un grand nageur comme Gregory.", "I may not be as strong as Phelps, but I'm a great swimmer like Gregory.", ""],
	["Michel", "Le Dez", "Staffeur", "Staffeur", "Breton et fier de l'être !", "Breton and proud of it !", ""],
	["Mona", "Rysak", "Pôle event", "Event", "", "", ""],
	["Nathan", "Montebrun", "Pôle Logistique ", "Logistics Pole", "", "", ""],
	["Ophéliane", "Jager-Bah", "Respo Graphisme", "Graphic design Manager", "Parfois hilarante, parfois consternante, elle n'en reste pas moins attachante ...", "Sometimes funny, sometimes scary, her energy is somewhat endearing ...", "La filouterie est un art de vivre"],
	["Oriane", "Alletru", "Staff", "Staff", "« Trop mims » et « pas de soucis » sont mes expressions fétiches ", "‘Trop mims’ and ‘pas de soucis’ are my favourite expressions ", ""],
	["Quentin", "Leconte", "Pôle événements ", "Event pole", "", "", ""],
	["Robin", "Chatton", "Soutien", "Support", "100% sudiste", "100% southerner", ""],
	["Romain", "Gautier", "Vice-trez ", ")", "Vice-treasurer", "Rien ne sert de partir à point, il faut courir. Une philosophie de vie pour moi.", "Hakuna matata.", ""],
	["Roméo", "Cagol", "Pôle Event", "Event division ", "Là pour servir et faire du Sal  ", "Here to serve and do some Sal ", ""],
	["Sarah", "Gastineau", "Vice-présidente", "Vice-president", "", "", ""],
	["Sébastien", "Marécaux", "Respo Transition Écologique ", "Ecological Transition Manager", "Il est breton, mais pour lui, les pâtes, c'est aussi bon avec de l'huile d’olive qu'avec du beurre.", "He is Breton, but for him, pasta are as good with olive oil than with butter. ", "Super planche-man ! L'homme dont l'endurance planchastique fait tourner toutes les têtes."],
	["Tony", "Jammes", "Pôle Sensi", "", "", "", ""],
	["Vincent", "Houée", "Graphiste", "Graphic Designer", "AKA Vincent Ouais : Notre Yesman nantais connait tout les bon plans des environs", "AKA Vincent Yeah: Our Yesman from Nantes knows all the best cityspots", ""],
	["Willian", "Pinto", "Pôle Event", "", "", "", ""],
	["Wissal", "Filali", "respo international", "international manager ", "", "", ""],
	["Yohan", "Kulhaneck", "Vice-président Interne", "Internal Vice-President", "", "", ""]
];

//crée le code pour avoir la liste des membres
function generer_portraits(en) {
	var code = "";
	for (var i = 0; i < list_membres.length; i++) {
		code += "<div class=portrait><div class=image><img src='/data/photos_membres/" + list_membres[i][0] + " " + list_membres[i][1] +
			".jpg' alt=''></div><div class=texte><h2>" + list_membres[i][0] + " " + list_membres[i][1] + "</h2><h3>" + list_membres[i][2 + en] + "</h3><p>" +
			list_membres[i][4 + en] + "</p></div></div>";
	}
	document.getElementById("container").innerHTML = code;
}