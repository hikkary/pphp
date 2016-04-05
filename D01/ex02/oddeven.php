#!/usr/bin/php
<?php
while(1)
{
echo("Entrez un nombre :");

$odd = fgets(STDIN);
if($odd == NULL)
	break;
$odd = str_replace("\n", "", $odd);

if(ctype_digit($odd) == FALSE)
echo "'$odd' n'est pas un chiffre\n";
elseif ($odd % 2 == 0)
	echo "Le chiffre $odd est Pair\n";
else
	echo "Le chiffre $odd est Impair\n";
}
?>