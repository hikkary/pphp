<?php
if(file_exists('../private/chat'))
{
	if (!file_exists('../private/chat'))
	{
		return;
	}
	$print = unserialize(file_get_contents('../private/chat'));
	date_default_timezone_set('Europe/Paris');
	if ($print)
	{
		foreach ($print as $p)
		{
			echo date('[H:i]',$p['time']);
			echo "<b>";
			echo  " ".$p['login'].":";
			echo "</b>";
			echo "  ".$p['msg']."<br />";
			echo "\n";
		}
	}
}
?>
