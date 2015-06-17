#!/usr/bin/php
<?php
$str = trim($argv[1]);									//Supprime les espaces en debut et fin de chaine
if ($str==NULL)											//Si on ne rentre aucune valeur
	return;												//Alors on retourne rien du tout o/
$str = preg_replace('/\s\s+/', ' ', $str);				//Supprime les espaces en trop dans une chaine
echo("$str\n");											//Retour a la ligne
?>
