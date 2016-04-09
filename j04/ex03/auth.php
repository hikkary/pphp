<?php
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
?>