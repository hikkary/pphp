<?php
if($_POST['fname'] === "" | $_POST['lname'] === "" | $_POST['pseudo'] === "" | $_POST['email'] === "" | $_POST['tel'] === "" | $_POST['pwd'] === "")
	{
		$error = "Veuillez remplir tout les champs";
		echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
		exit();
	}
	if(file_exists('json/users.json'))
	{
		$new_user =  array('fname' => $_POST[fname] , 'lname' => $_POST[lname],'pseudo' => $_POST[pseudo], 'email' => $_POST[email], 'pwd' => $_POST[pwd]);
		$new_user = json_encode($new_user);
		print_r($new_user);
		echo('<br/>');
		$u = file_get_contents('json/users.json');
		print_r($u);
		echo('<br/>');
		$u2 = $u.$new_user;
		$u3 = json_decode($u2);
		print_r($u3);
		echo('<br/>');
		print_r($u3);
		echo('<br/>');

		//file_put_contents('json/users.json', json_encode($u));

	}


	// else
	// {
	// 	echo '<script type="text/javascript">window.alert("'."Invincible !".'");</script>';
	// 	exit();
	// }

?>
