<?php
session_start();
if ($_GET["submit"] == "OK")
{
	if ($_GET["login"])
 		$_SESSION["login"] = $_GET["login"];
 	if ($_GET["passwd"])
 		$_SESSION["passwd"] = $_GET["passwd"];
 	if (!$_SESSION["login"])
		$_SESSION["login"] = "";
	if (!$_SESSION["passwd"])
		$_SESSION["passwd"] = "";
}
?>
<html><body>
<meta charset="utf-8">
<form method="get" action ="index.php">
	Identifiant : <input type="texte", value ="<?php echo $_SESSION['login']; ?>"/>
	<br />
	Mot de passe: <input type="password", value="<?php echo $_SESSION['passwd']; ?>"/>
	<input type="submit" = value="OK">	
</form>
</body></html>
