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
	public function showFeedback(){
		$result='';
		$qry=mysqli_query($this->dbs, "SELECT * FROM `project_feedback`");
		foreach ($qry as $row) {
			$result.='
				<tr>
                    <td>'.$row['feedback_roll'].'</td>
                    <td>'.$row['feedback_email'].'</td>
                	<td>'.$row['feedback_mssg'].'</td>
				</tr>
				';
		}
		return $result;
	}

	public function showProject(){
		$result='';
		$qry=mysqli_query($this->dbs, "SELECT * FROM `project_archives`");
		foreach ($qry as $row) {
			$result.='
				<tr>
                    <td>'.$row['p_title'].'</td>
                    <td>'.$row['p_branch'].'</td>
                	<td>'.$row['p_batch'].'</td>
                	<td>'.$row['p_group'].'</td>
                	<td><a href="../source/'.$row['p_rfile'].'">Click Here To Download Source Code.</a></td>
				</tr>
				';
		}
		return $result;
	}

	public function addProject($pname, $poverview, $pbranch, $pbatch, $pgroup, $pdoc, $prar){
		$qry=mysqli_query($this->dbs, "INSERT INTO `project_archives`(`p_title`, `p_overview`, `p_file`, `p_rfile`, `p_branch`, `p_batch`, `p_group`) 
			VALUES ('".$pname."','".$poverview."','".$pdoc."','".$prar."','".$pbranch."','".$pbatch."','".$pgroup."')");
			return $qry;
	}

	
}


if(isset($_POST['admin_show_feedback'])){
	$showFeedback=new retrieveInfo();
	$opshowFeedback=$showFeedback->showFeedback();
	echo $opshowFeedback;
}

if(isset($_POST['admin_show_project'])){
	$showFeedback=new retrieveInfo();
	$opshowFeedback=$showFeedback->showProject();
	echo $opshowFeedback;
}


if(isset($_POST['add_project'])){
	$pname=$_POST['pname'];
	$poverview=$_POST['poverview'];
	$pbranch=$_POST['pbranch'];
	$pbatch=$_POST['pbatch'];
	$pgroup=$_POST['pgroup'];

	$pdoc=$_FILES['pdoc']['name'];
	$pdoctmpname=$_FILES['pdoc']['tmp_name'];

	$prar=$_FILES['prar']['name'];
	$prartmpname=$_FILES['prar']['tmp_name'];

	// echo $pname.'/'.$poverview.'/'.$pbranch.'/'.$pbatch.'/'.$pgroup.'/'.$pdoc.'/'.$pdoctmpname.'/'.$prar.'/'.$prartmpname;

	$addProject=new retrieveInfo();
	if(empty($pname) || empty($poverview) || empty($pdoc) || empty($prar)){
		echo "Don't empty these fields!!";
	}else{
		$pdocupload=move_uploaded_file($pdoctmpname, "../../file/$pdoc");
		$prarupload=move_uploaded_file($prartmpname, "../source/$prar");
		if($pdocupload && $prarupload){
			// function calling
			$sql=$addProject->addProject($pname, $poverview, $pbranch, $pbatch, $pgroup, $pdoc, $prar);
			if($sql){
				echo "Product's added!!";
			}else{
				echo "Hmmm!!! I found something Error on Adding Products...";
			}
		}else{
			echo "Hmmm!!! I found something Error on image upload";
		}
	}	
}


?>

