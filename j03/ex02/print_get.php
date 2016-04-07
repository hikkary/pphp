<?php
$arrow = array();
$arrow = $_GET;

foreach ($arrow as $elem => $key) 
{
	echo $elem.": ";
	echo $key."\n";
}

?>