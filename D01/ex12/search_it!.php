#!/usr/bin/php
<?php


unset($argv[0]);
$tmp =  $argv[1];
unset($argv[1]);
$array = array_reverse($argv);

foreach ($array as $key) 
{
	$maclef = explode(":", $key);
	if(strcmp($maclef[0], $tmp) == 0)
	{
		echo $maclef[1]."\n";
		exit;
	}
}
?>