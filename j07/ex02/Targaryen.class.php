<?php
Class Targaryen{

	function __construct(){
	}

	function getBurned(){
		if ($this->resistFire() === True)
			return('emerge naked but unharmed');
		else
			return ('burns alive');
	}

	public function resistFire(){
		return False;
	}

}
?>