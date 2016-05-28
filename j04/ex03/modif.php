<?php
if (!file_exists('../private/passwd') || !$_POST['login'] || !$_POST['oldpw'] ||  !$_POST['newpw'] || $_POST['submit'] !== 'OK')
{
	echo "ERROR\n";
	return;
}
$i = 0;
$tab = [
	'login' => $_POST['login'] ,
	'oldpw' => hash("whirlpool",$_POST['oldpw']),
	'newpw' => hash("whirlpool",$_POST['newpw']),
	];
$stock = unserialize(file_get_contents('../private/passwd'));
foreach ($stock as $elem) 
{
	if ($tab['login'] === $elem['login'])
	{
		if ($tab['oldpw'] === $elem['passwd'])
		{
			$stock[$i]['passwd'] = $tab['newpw'];
			file_put_contents('../private/passwd', serialize($stock));
			echo "OK\n";
			return;	
		}
		else 
		{
			echo "ERROR\n";
		 	return;
		}

	}
	$i++;
}
echo "ERROR\n";
?>