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


class retrieveInfo extends dbcon{
	public function countProject(){
		$qry=mysqli_query($this->dbs, "SELECT * FROM `project_archives`");
		$result=mysqli_num_rows($qry);
		$count=count($result);
		return $result;
	}

	public function countComment(){
		$qry=mysqli_query($this->dbs, "SELECT * FROM `project_comments`");
		$result=mysqli_num_rows($qry);
		$count=count($result);
		return $result;
	}

	public function countFeedback(){
		$qry=mysqli_query($this->dbs, "SELECT * FROM `project_feedback`");
		$result=mysqli_num_rows($qry);
		$count=count($result);
		return $result;
	}
}

if(isset($_POST['admin_home_reload'])){
	$countproject=new retrieveInfo();
	$opcountproject=$countproject->countProject();
	echo $opcountproject;
}

if(isset($_POST['admin_count_comment'])){
	$countproject=new retrieveInfo();
	$opcountproject=$countproject->countComment();
	echo $opcountproject;
}

if(isset($_POST['admin_count_feedback'])){
	$countproject=new retrieveInfo();
	$opcountproject=$countproject->countFeedback();
	echo $opcountproject;
}


if(isset($_POST['admin_show_feedback'])){
	echo "string";
}


?>

