<?php
session_start();
function auth($login, $passwd)
{
	$bdd = unserialize(file_get_contents('../private/passwd'));
	$pass = hash("whirlpool", $passwd);
	foreach ($bdd as $elem) 
	{
		if ($elem['login'] === $login && $elem['passwd'] === $pass)
			return (TRUE);
	}	
	return (FALSE);
}
if (!file_exists('../private/passwd'))
	return;
$login = $_POST['login'];
$password = $_POST['passwd'];
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