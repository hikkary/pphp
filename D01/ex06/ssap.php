#!/usr/bin/php
<?php
unset($argv[0]);

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

$final = array(""); 
sort($argv);

foreach ($argv as $elem) 
{
	$tmp = ft_split($elem);
	$final = array_merge($final,$tmp);
}
unset($final[0]);

sort($final);
foreach ($final as $elem)
{
	echo "$elem\n";
}
?>