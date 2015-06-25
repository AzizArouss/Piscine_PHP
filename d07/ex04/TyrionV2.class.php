<?php
class Tyrion
{
	public function sleepWith($att)
	{
		if ($att instanceof Jaime || $att instanceof Cersei)
			print("Not even if I'm drunk !".PHP_EOL);
		if ($att instanceof Sansa)
			print("Let's do this.".PHP_EOL);
	}
}
?>
