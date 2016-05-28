<?php
session_start();
if($_SESSION['loggued_on_user'] === "")
	{
		echo "ERROR";
		return;		
	}
else
	echo $_SESSION['loggued_on_user'];
?>