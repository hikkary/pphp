<?php
session_start();
//Créez également un fichier whoami.php qui ne prend aucun paramètre mais se sert du
//cookie de session pour afficher le login contenu dans variable de session “loggued_on_user”
//suivi d’un “\n”. Si cette variable n’existe pas ou contient une chaine vide, afficher seulement
//“ERROR\n”
if($_SESSION['loggued_on_user'] === "")
	{
		echo "ERROR";
		return;		
	}
else
	echo $_SESSION['loggued_on_user'];
?>