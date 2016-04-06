#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$tmp = $tab;
	sort($tmp);
	$diff = array_diff_assoc($tab, $tmp);
	if ($diff == NULL)
		return TRUE;
	else
		return FALSE;
}
?>