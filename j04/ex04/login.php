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
	$_SESSION['loggued_on_user'] = $login;
	echo"<iframe name='chat' src='chat.php' width='100%' height='550' style='border:2px solid black'></iframe> <br/>
	<iframe name='speak' src='speak.php' width='100%' height='50' style='border:2px solid black'>
	</iframe>" ; 
}
else
{
	echo "ERROR";
	$_SESSION['loggued_on_user'] = "";
}