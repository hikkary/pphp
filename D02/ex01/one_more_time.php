#!/usr/bin/php
<?php
if ($argc != 2)
{
	echo "\n";
	return;
}

if(substr_count($argv[1]," ") != 4)
{
	echo "Wrong Format";
	return;
}

function what_month($m)
{
	if ($m = "Janvier")
		return(1);
	if ($m = "Fevrier")
		return(2);
	if ($m = "Mars")
		return(3);
	if ($m = "Avril")
		return(4);
	if ($m = "Mai")
		return(5);
	if ($m = "Juin")
		return(6);
	if ($m = "Juillet")
		return(7);
	if ($m = "Aout")
		return(8);
	if ($m = "Septembre")
		return(9);
	if ($m = "Octobre")
		return(10);
	if ($m = "Novembre")
		return(11);
	if ($m = "Decembre")
		return(12);
}


if (preg_match("/^Lundi|Mardi|Mercredi|Jeudi|Vendredi|Samedi|Dimanche/", $argv[1]))
{
	$day = substr($argv[1], 0,strpos($argv[1]," "));
	echo $day."\n";
	$argv[1] = substr($argv[1],strpos($argv[1]," "));
	$argv[1] = trim($argv[1]);
}
else
{
	echo "Wrong Format";
	return;
}

if (preg_match("/^[0-31]/", $argv[1]))
{
	$d = substr($argv[1], 0,strpos($argv[1]," "));
	echo $d."\n";
	$argv[1] = substr($argv[1],strpos($argv[1]," "));
	$argv[1] = trim($argv[1]);
}
else
{
	echo "Wrong Format";
	return;
}

if (preg_match("/^Janvier|Fevrier|Mars|Avril|Mai|Juin|Juillet|Aout|Septembre|Octobre|Novembre|Decembre/", $argv[1]))
{
	$m = substr($argv[1], 0,strpos($argv[1]," "));
	$mc = what_month($m);
	echo $m."\n";
	$argv[1] = substr($argv[1],strpos($argv[1]," "));
	$argv[1] = trim($argv[1]);
}
else
{
	echo "Wrong Format";
	return;
}

if (preg_match("/^[0-9]{4}/", $argv[1]))
{
	$y = substr($argv[1], 0,strpos($argv[1]," "));
	if ($y < 1970)
	{
		echo "Wrong Format";
		return;
	}
	echo $y."\n";
	$argv[1] = substr($argv[1],strpos($argv[1]," "));
	$argv[1] = trim($argv[1]);
}
else
{
	echo "Wrong Format";
	return;
}

if (preg_match("/[0-2][0-9]:[0-5][0-9]:[0-5][0-9]/", $argv[1]))
{
	$h = substr($argv[1], 0);
	echo $h."\n";
	$argv[1] = substr($argv[1],strpos($argv[1]," "));
	$argv[1] = trim($argv[1]);
}
else
{
	echo "Wrong Format";
	return;
}
echo strtotime("$mc/$d/$y $h");
?>