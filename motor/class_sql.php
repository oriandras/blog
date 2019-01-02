<?php /*oriandras.hu*/
class mysqli_db{
	function sql_connect($sqlserver, $sqluser, $sqlpassword, $database){
		$this->mysqli = new mysqli($sqlserver, $sqluser, $sqlpassword, $database);
		if (mysqli_connect_errno()) {
			echo 'Connection failed.';
			exit();
		}
		else {
			//echo 'MySQL sikeresen kapcsolódott.';
			}
	}
	function query($SQL){
		$this->SQL = $this->mysqli->real_escape_string($SQL);
		$this->Result = $this->mysqli->query($SQL);
		if ($this->Result == true)
		return $this->Result;
		else die('Problem with Query: ' . $this->SQL);
	}
	function fetch_row(){
		$row = $this->Result->fetch_array(MYSQLI_BOTH);
		return $row;
	}
	function get_num_rows(){
		$row = $this->Result->num_rows;
		return $row;
	}
	function get_affected_rows($query_id = ""){
		$row = $this->mysqli->affected_rows;
		return $row;
	}
	function get_insert_id($query_id = ""){
		$id = $this->mysqli->insert_id;
		return $id;
	}
	function sql_close(){
		$this->mysqli->close();
	}
}
$DB = new mysqli_db();
$DB->sql_connect("localhost","huqwomsm","Q1e1b97hXh", "huqwomsm_days");
$DB->query("SET NAMES 'utf8'");

?>