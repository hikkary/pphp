#!/usr/bin/php
<?php
if($argc != 2)
{
	echo "Incorrect Parameters";
	return;
}

if (strpos($argv[1], "+"))
{	
	$after = substr($argv[1],strrpos(trim($argv[1]),"+"));
	$before = substr($argv[1], 0,strrpos(trim($argv[1]),"+"));
	$after = str_replace("+", " ", $after);
	$before = str_replace("+", " ", $before);
	$after = trim($after);
	$before = trim($before);
	if(ctype_digit($before) == FALSE || ctype_digit($after) == FALSE )
	{
		echo "Syntax Error";
		return;
	}
	echo $after + $before;
	return ;
}

if (strpos($argv[1], "-"))
{	
	$after = substr($argv[1],strrpos(trim($argv[1]),"-"));
	$before = substr($argv[1], 0,strrpos(trim($argv[1]),"-"));
	$after = str_replace("-", " ", $after);
	$before = str_replace("-", " ", $before);
	$after = trim($after);
	$before = trim($before);
	echo $before - $after;
	if(ctype_digit($before) == FALSE || ctype_digit($after) == FALSE )
	{
		echo "Syntax Error";
		return;
	}

	return ;
}

if (strpos($argv[1], "*"))
{	
	$after = substr($argv[1],strrpos(trim($argv[1]),"*"));
	$before = substr($argv[1], 0,strrpos(trim($argv[1]),"*"));
	$after = str_replace("*", " ", $after);
	$before = str_replace("*", " ", $before);
	$after = trim($after);
	$before = trim($before);
	if(ctype_digit($before) == FALSE || ctype_digit($after) == FALSE )
	{
		echo "Syntax Error";
		return;
	}

	echo $before * $after;
	return ;
}

if (strpos($argv[1], "/"))
{	
	$after = substr($argv[1],strrpos(trim($argv[1]),"/"));
	$before = substr($argv[1], 0,strrpos(trim($argv[1]),"/"));
	$after = str_replace("/", " ", $after);
	$before = str_replace("/", " ", $before);
	$after = trim($after);
	$before = trim($before);
	echo $before / $after;
	return ;
}
if (strpos($argv[1], "%"))
{	
	$after = substr($argv[1],strrpos(trim($argv[1]),"%"));
	$before = substr($argv[1], 0,strrpos(trim($argv[1]),"%"));
	$after = str_replace("%", " ", $after);
	$before = str_replace("%", " ", $before);
	$after = trim($after);
	$before = trim($before);
	if(ctype_digit($before) == FALSE || ctype_digit($after) == FALSE )
	{
		echo "Syntax Error";
		return;
	}


	echo $before % $after;
	return ;
}

echo "Syntax Error";

?>