<?php
	class database{
		var $conn = '';
		function database(){
			$this->conn = mysqli_connect('localhost','root','','thuctapphp');
			return $this->conn;
		}
	}
?>