<?php
Class Color {

	public $red = 0;
	public $green = 0;
	public $blue = 0;
	static public $verbose = FALSE;

	 function __construct(array $kwargs){
	 	if (array_key_exists('rgb', $kwargs))
	 	{
	 		//remplir avec les decalages
	 		$this->red = (intval($kwargs['rgb']) >> 16) % 256;
	 		$this->green = (intval($kwargs['rgb']) >> 8) % 256;
	 		$this->blue = intval($kwargs['rgb']) % 256; 
	 	}
	 	else
	 	{
	 		$this->red = $kwargs['red'];
	 		$this->green = $kwargs['green'];
	 		$this->blue = $kwargs['blue'];
	 	}
	 	if (self::$verbose == TRUE)
	 		echo $this . " constructed.\n";
	 }

	 static function 	doc()
	 {
	 	return (file_get_contents("Color.doc.txt")."\n");
	 }

	 function 		add(Color $plus)
	 {
	  	 return new Color ( array('red' => $this->red + $plus->red , 'green' => $this->green + $plus->green , 'blue' => $this->blue + $plus->blue));
	 }

	 function 		sub(Color $tosub)
	 {
	 	return new Color ( array('red' => $this->red - $tosub->red, 'green' => $this->green - $tosub->green, 'blue' => $this->blue - $tosub->blue));
	 }

	 function 		mult($mult)
	 {
	 	return new Color ( array('red' => $this->red * $mult, 'green' => $this->green * $mult, 'blue' => $this->blue * $mult));
	 }

	 function __tostring()
	 {
	 	//return ("Color( red: ".$this->red.", green: ".$this->green.", blue: ".$this->blue." )");
	 	return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	 } 
 
	 function __destruct()
	 {
	 	if(self::$verbose == TRUE)
	 		echo $this." desctructed.\n";
	 	return ;
	 }

}
?>