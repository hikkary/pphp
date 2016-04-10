<?php
if(file_exists('/tmp/private/chat'))
{
	if (!file_exists('/tmp/private/chat'))
	{
		return;
	}
	$print = unserialize(file_get_contents('/tmp/private/chat'));

	if ($print)
	{
		foreach ($print as $p) 
		{
			echo date('[H:s]',$p['time']);
			echo "<b>";
			echo  " ".$p['login'].":";
			echo "</b>";
			echo "  ".$p['msg']."<br />";
			echo "\n";
		}
	}
}
?>