#!/usr/bin/php
<?php
if($argc != 4)
	return;

$argv[1] = trim($argv[1]);
$argv[2] = trim($argv[2]);
$argv[3] = trim($argv[3]);
if ($argv[2] == "+")
	echo $argv[1] + $argv[3]."\n";
if ($argv[2] == "-")
	echo $argv[1] - $argv[3]."\n";
if ($argv[2] == "*")
	echo $argv[1] * $argv[3]."\n";
if ($argv[2] == "%")
	echo $argv[1] % $argv[3]."\n";
if ($argv[2] == "/")
	echo $argv[1] / $argv[3]."\n";
?>