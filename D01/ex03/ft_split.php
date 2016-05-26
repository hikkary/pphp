#!/usr/bin/php
<?php
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
?>
