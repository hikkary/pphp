<?php

Class Tyrion extends Lannister 
{
	function __construct(){
		parent::__construct();
		print('My name is Tyrion')."\n";
	}
	function getSize(){
		return "Short";
	}
	function __destruct(){
	}
}
?>