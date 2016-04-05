<?php
	class DBConnection {
		private $host;
		private $user;
		private $password;
		private $dbname;

		// Constructor
		public function __constructor($host, $user, $password, $dbname){
			$this->$host = $host;
			$this->$user = $user;
			$this->$password = $password;
			$this->$dbname = $dbname;
		}

		// Member method to create connection
		function getConnection() {
			$conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
	}
?>
