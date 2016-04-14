<?php
Class Lannister
{
	public function sleepWith($l)
	{
		if($l == 'c')
	 		print("With pleasure, but only in a tower in Winterfell, then.")."\n";
		else
			print("Let's do this.")."\n";
	}
	public function __tostring()
	{
		return "c";
	}
}	
?>