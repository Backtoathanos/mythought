<?php

// databaseconnectiviy
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'project_kaizen');
class dbcon
{
	function __construct(){
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($con,'utf8');
	$this->dbs=$con;
	// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
}

?>

