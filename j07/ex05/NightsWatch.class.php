<?php
Class NightsWatch implements IFighter{

	function recruit($r){
		if(is_a($r, 'IFighter')){
			print($r->fight());
		}

	}

	function fight(){
	}
}

?>