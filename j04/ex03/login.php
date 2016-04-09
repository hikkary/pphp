<?php
session_start();
if (!file_exists('../private/passwd'))
	return;
include("auth.php");
$login = $_GET['login'];
$password = $_GET['passwd'];
if(auth($login, $password))
{
	echo "OK";
	$_SESSION['loggued_on_user'] = $login;
}
else
{
	echo "ERROR";
	$_SESSION['loggued_on_user'] = "";
}


// faire tab qui stock $_GET pass et login ou envoyer une chaine vide si le login est incorrect;
// afficher ok si correct, sinon error
?>