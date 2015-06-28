#!/usr/bin/php
<?php
																					//ft_split
																					//Prend une chaine de caracteres
																					//Renvoie tout ca a un tableau trie des differents mots
																					//Initialement separes par un ou des espaces dans la chaine originale
function ft_split($str)
{
	$str = explode(" ", $str);							//Coupe une chaine en segments
	$str = array_filter($str);							//Supprime toute les cases que j'ai en trop
	sort($str);															//Trie les elements
	return ($str);
}
?>
