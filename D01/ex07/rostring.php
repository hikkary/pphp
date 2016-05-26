#!/usr/bin/php
<?php
if(str_word_count($argv[1]) === 1)
{
	echo $argv[1];
	return;
}
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
$begin = $argv[1];
$tab3 = ft_split($begin);
$last = $tab3[0];
unset($tab3[0]);
$begin = implode(" ", $tab3);
$begin = trim($begin);
echo "$begin $last\n";
?>
