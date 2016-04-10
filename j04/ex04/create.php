<?php

//header('Location: index.html');
if($_POST['login'] == "" | $_POST['passwd'] == "" | $_POST['submit'] !== 'OK')
{	
	echo "ERROR";
	return(-1);
}
	$_POST['passwd'] = hash("whirlpool",$_POST['passwd']);
	$serie = $_POST;
	if (file_exists('../private/passwd'))
	{
		$tab = array('login' => $_POST['login'] , 'passwd' => $_POST['passwd']);
		$check = file_get_contents('../private/passwd');
		$check2 = unserialize($check);
		foreach ($check2 as $c2) 
		 {
			 	if ($tab['login'] === $c2['login'])
			 	{
			 		echo 'ERROR';
			 		return (-1);
			 	}
		
		 }
		 $check2[] = $tab;
		 $check = serialize($check2);
		 file_put_contents('../private/passwd', $check);
		 echo "OK";
		 return (2);
	}
	if (file_exists('../private') === FALSE)
		mkdir("../private");
	$tab[] = array('login' => $_POST['login'] , 'passwd' => $_POST['passwd']);
	file_put_contents('../private/passwd', serialize($tab));
?>