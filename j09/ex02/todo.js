function add() {
	var list;
	var message;
	var div;
	var lien;
	var fin_lien;

	 // lien = document.createTextNode('<a href=#>');
	 // fin_lien = document.createTextNode('</a>');;
	 //  lien = "<a href='#'>";
	 // fin_lien = "</a>";
	message = prompt('Please enter a note');
	
	// message = lien + message + fin_lien;

	list = document.getElementById('ft_list');
	div = document.createElement("div");
	message = document.createTextNode(message);
	div.appendChild(message);
	list.appendChild(div);
	console.log(list);
}