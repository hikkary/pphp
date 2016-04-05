#!/usr/bin/php
<?php
unset($argv[0]);

function ft_split($str)
{
	$tab = preg_split("/ +/",$str);
	sort($tab);
	return $tab;
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