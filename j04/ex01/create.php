<?php
if ($_POST['submit'] === 'OK')
{
	/*$_POST['passwd'] = hash("whirlpool",$_POST['passwd']);*/
	$serie = serialize($_POST);

	if (file_exists('../private/passwd'))
	{
		$check = file_get_contents('../private/passwd');
		echo $check;
		$check2 = unserialize($check);
		print_r($check2);
		 foreach ($check2 as $c2 => $key) 
		 {
		 		// if ($_POST['login'] === $check2['login'])
		 		// {
		 		// 	echo 'ERROR';
		 		// 	return;
		 		// }
		 }
		 $check = $check;	 
		 file_put_contents('../private/passwd', $check);
		 return;
	}
	if (file_exists('../private') === FALSE)
		mkdir("../private");
	if (file_exists('../private/passwd'))
		$stock = file_get_contents('../private/passwd');
	file_put_contents('../private/passwd', $serie);
	$file = file_get_contents('../private/passwd');
}
else
{
	echo "ERROR";
}

?>