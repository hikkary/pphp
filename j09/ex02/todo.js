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
	if(!message)
		return;
	// message = lien + message + fin_lien;

	list = document.getElementById('ft_list');
	div = document.createElement("LI");
	message = document.createTextNode(message);
	div.appendChild(message);
	div.style.listStyleType = "circle";
	div.style.marginLeft = "25px";
	div.style.fontFamily = "Times New Roman, Times, serif";
	div.style.fontSize = "20px";
	div.style.fontStyle = "bold";

	// list.appendChild(div);
	list.insertBefore(div,list.childNodes[0]);
	console.log(list);
}
		
	function del()
	{
		var list2 = document.getElementById("LI");//.getElementByTagName("LI");
		console.log(list2);
			for(li in list2)
			{
				list2[li].onclick=function(){
					remove(this);
				}
			}
	}


	setInterval("del()", 300); 

// function delete()
// {
	
// }