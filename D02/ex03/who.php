#!/usr/bin/php
<?php
	$fp = fopen("/var/run/utmpx", "r");
	$ace = array("");
	date_default_timezone_set('Europe/Paris');
	while ($ret = fread($fp, 628))
	{
		$data = unpack("a256user/a4id/a32line/ipid/itype/I2time/@", $ret);

		array_push($ace, $data);
	}
		unset($ace[0]);
		unset($ace[1]);
		unset($ace[2]);
		foreach ($ace as $elem) 
		{
			/*rajouter rtrim dans les elem*/
			echo $elem[user]." ";
			echo $elem[line]." ";
			echo date("M j",$elem[time1])." ";
			echo date("H:i",$elem[time1])." ";
			echo "\n";
		}
?>