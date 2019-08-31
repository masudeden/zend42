<?php
require("db.php");

class myDb{
	use Db;
}



$obj=new myDb;
$obj->dbConnect("localhost","root","","lpi");

if($obj->getAll("students","*")!=false){
	echo "<pre>";
	print_r($obj->getAll("students","*"));
	echo "</pre>";
}
else{
	echo "Not Found";
}