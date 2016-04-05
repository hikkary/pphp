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
$alpha = array("");
$digit = array("");
$other = array("");

foreach ($argv as $elem) 
{
	$tmp = ft_split($elem);
	$final = array_merge($final,$tmp);
}
unset($final[0]);
natcasesort($final);

foreach ($final as $elem) 
{
	$tmp2 = ft_split($elem);
	if(ctype_alpha($elem))
		$alpha = array_merge($alpha,$tmp2);
	elseif(ctype_digit($elem))
		$digit = array_merge($digit,$tmp2);
	else
		$other = array_merge($other,$tmp2);
}
unset($alpha[0]);
unset($digit[0]);
unset($other[0]);

foreach ($alpha as $elem)
{
	echo "$elem\n";
}
foreach ($digit as $elem)
{
	echo "$elem\n";
}
foreach ($other as $elem)
{
	echo "$elem\n";
}
?>