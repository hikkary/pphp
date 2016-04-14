<?php
Class Targaryen{


	function getBurned(){
		if ($this->resistsFire() === True)
			return('emerge naked but unharmed');
		else
			return ('burns alive');
	}

	public function resistsFire(){
		return False;
	}

}
?>