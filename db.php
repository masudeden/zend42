<?php
trait Db{
	private $conn;
	public function dbConnect($host,$user,$pass,$db){
		$this->conn=new mysqli($host,$user,$pass,$db);
		if($this->conn->connect_errno>0){
			die("Connection Fail: ".$this->connect_error);
		}
	}

	public function getAll($table,$cols){
		$sql="SELECT $cols FROM $table";
		$result=$this->conn->query($sql);

		if($result->num_rows>0){
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		return false;

	}
}