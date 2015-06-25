<?php
class Jaime
{
	public function sleepWith($att)
	{
		if ($att instanceof Tyrion === TRUE)
			print("Not even if I'm drunk !".PHP_EOL);
		else if ($att instanceof Sansa === TRUE)
			print("Let's do this.".PHP_EOL);
		else if ($att instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
	}
}
?>
