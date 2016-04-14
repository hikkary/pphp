<?php
Class Jaime extends Lannister
{
	public function sleepWith($l)
	{
		if ($l == 't')
			print("Not even if i'm drunk")."\n";
		else
			(parent::sleepWith($l));
	}

	public function __tostring()
	{
		return "j";
	}
}
?>