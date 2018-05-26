<?php
class connect {
	
	public function conn()
	{
		$connection = new mysqli("localhost","root","","food_on_wheels");
		return $connection;
	}
}
?>