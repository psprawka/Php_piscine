<?php
class db_manage {
	private $host = "localhost";
	private $user = "root";
	private $password = "root";
	private $database = "web_site";
	private $conn;

	function db_init() {
		$this->conn = $this->db_connect();
	}

	function db_connect() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}

	function run_query($query) {
		$result = mysqli_query($this->conn, $query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}
}
?>
