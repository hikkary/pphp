<?php
	if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
	{
		header('Location: members_only.php');
		$data = file_get_contents("../img/42.png");
		$base64 = 'data:image/' . ';base64,' . base64_encode($data);
		echo
"<html><body>
Bonjour Zaz<br />
<img src='$base64'>
</body></html>\n";
}
else
{
	$ligne = "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	header('HTTP/1.0 401 Unauthorized');
	header("WWW-Authenticate: Basic realm=''Espace membres''");
	echo $ligne;
}
?>
