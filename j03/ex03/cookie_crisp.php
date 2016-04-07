<?php
if (isset($_GET))
{
$arrow = array();
$arrow = $_GET;

if ($arrow[action] === "set")
	setcookie($arrow[name], $arrow[value]);

/*
foreach ($arrow as $elem => $key) 
{
	if ($elem === "action" ) 
	{
		if ($key === "set")
			echo "string";
	}
	echo $elem.": ";
	echo $key."\n";
}*/
}
?>