<?php

Class Tyrion extends Lannister 
{

	public function sleepWith($l)
	{
		if ($l == 'j' || $l == 'c')
			print("Not even if i'm drunk")."\n";
		else
			(parent::sleepWith($l));
	}

	public function __tostring()
	{
		return "t";
	}
}

?>