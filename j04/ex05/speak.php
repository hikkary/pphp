<?php
session_start();
if ($_SESSION['loggued_on_user'] === "")
{
	echo "ERROR";
	return;
}
date_default_timezone_set('Europe/Paris');
echo "<html> <head>
<script langage='javascript'>
top.frames['chat'].location = 'chat.php';</script>
</head>
<body>
<form action ='speak.php' method='post'>
<input type='text' name='msg'/>
<input type='submit' name='submit'/>
</body>
</html>";
echo "Login : ";
echo $_SESSION['loggued_on_user'];
if (file_exists('../private') === FALSE)
	mkdir("../private");
if (!file_exists('../private/chat'))
	file_put_contents('../private/chat', NULL);
if ($_POST)
{
	$stock = unserialize(file_get_contents('../private/chat'));
	$tab = ['login' => $_SESSION['loggued_on_user'], 'time' => time(),
	'msg' => $_POST['msg']];
	$stock[] = $tab;
	$handle = fopen("../private/chat", "w");
	if (flock($handle, LOCK_UN))
		flock($handle, LOCK_EX);
	file_put_contents('../private/chat', serialize($stock));
	fclose($handle);
}
?>
