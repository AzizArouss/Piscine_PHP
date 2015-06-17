#!/usr/bin/php
<?php
while (1)												//Retour du programme
{
	echo "Entrez un nombre: ";							//Affichage de l'instruction
	$handle = fopen("php://stdin","r");					//Ouvre en lecture seule
	$number = fgets($handle);							//Recuperation de la ligne courante (celle du dessus)
	if ($number == FALSE)								//Si on n'ecris pas un chiffre, alors, c'est faux !
	{
		echo "\n";										//Retour a la ligne
		break;											//Sortie de la structure
	}
	$number = trim($number);							//Supprime les espaces en debut et fin de chaine
	if (is_numeric($number))							//Determine si une variable est un type numerique ou non
	{
		if($number % 2 == 0)							//Determination du nombre pair ou non
			echo "Le chiffre ".$number." est Pair";		//On affiche l'instruction : Le chiffre est Pair
		else											//Sinon
			echo "Le chiffre ".$number." est Impair";	//On affiche l'instruction : Le chiffre est Impair
	}
	else												//Si ce n'est pas un chiffre
		echo "'$number' n'est pas un chiffre";			//Alors, on affiche l'instruction qui dis que ce n'est pas un chiffre
	echo "\n";											//Retour a la ligne
}
?>
