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
$str = trim($argv[1]);
$tab3 = ft_split($str);
$str2 = implode(" ",$tab3);

echo $str2."\n";
?>