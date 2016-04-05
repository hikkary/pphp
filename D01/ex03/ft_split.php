#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = preg_split("/ +/",$str);
	sort($tab);
	return $tab;
}
?>