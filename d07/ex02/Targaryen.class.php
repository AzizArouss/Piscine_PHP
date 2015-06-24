<?php
class Targaryen {

	public function resistsFire() {
		return False;
	}

	public function getBurned() {
		$result = static::resistsFire();
		if ($result == True)
			return 'emerges naked but unharmed';
		else
			return 'burns alive';
	}
}
?>
