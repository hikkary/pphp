#!/usr/bin/php
<?php
	function replaceinside($ar)
	{
		$ar[0] = preg_replace_callback('#>([^<]*)<#si', function ($arr) { return strtoupper($arr[0]); }, $ar[0]);
		$ar[0] = preg_replace_callback('#(=")([^"]*)("*)#si', function ($arr) { return $arr[1] . strtoupper($arr[2]) . $arr[3]; }, $ar[0]);
		return $ar[0];
	}
	if ($argc < 2)
		return;
	if (file_exists($argv[1]) === FALSE)
		return;
	$argv[1] = implode('', file($argv[1]));
	echo preg_replace_callback('#(<a)(.*?)(<\/a>)#si', "replaceinside", $argv[1]);
?>