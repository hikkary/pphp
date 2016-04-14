<?php
Class House
{
	public function getHouseName() {
		static::getHouseName();
	}

	public function getHouseMotto() {
	}
	public function getHouseSeat() {
	
	}
	private function diagnose(){
	}

	function introduce()
	{
		if(static::getHouseName())
			print("House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : " . "\"" . $this->getHouseMotto() . "\"" . "\n");
	}

}

?>