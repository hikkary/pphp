#!/usr/bin/php
<?php
if ($argc != 2)
	return;
function ft_split($str)
{
	$i = 0;
	$tab = explode(" ",$str);
	foreach ($tab as $key => $elem) 
	{
		if(!$elem)
			unset($tab[$key]);
		else
			$tab2[$i++] = $tab[$key]; 
	}
	return $tab2;
}

$argv[1] = trim($argv[1]);
$last = substr($argv[1],strrpos(trim($argv[1])," "));
$begin = substr($argv[1], 0,strrpos(trim($argv[1])," "));
$tab3 = ft_split($begin);
$begin = implode(" ", $tab3);
$begin = trim($begin);
echo "$last $begin\n";
?>