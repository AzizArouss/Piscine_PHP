#!/usr/bin/php
<?php
foreach ($argv as $elem)								//argv est la base de donnee sous de tableau
{														//elem est une valeur de mon tableau
	if ($a == 0)										//by-pass du premier (argv(0)) qui represente le nom du binaire
		$a = 1;
	else
		echo("$elem\n");								//transcription des elements
}
?>
