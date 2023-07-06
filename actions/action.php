<?php
session_start();
//include connection file
include_once("db.php");
class actions extends dbcon{
    public function showProject($branch, $batch, $group){
        $qry=mysqli_query($this->dbs, "SELECT * FROM `project_archives` WHERE `p_branch`='".$branch."' AND `p_batch`='".$batch."' AND `p_group`='".$group."'");
        $result=mysqli_fetch_assoc($qry);
        if(mysqli_num_rows($qry)>0){
            $id=$result['id'];
            $title=$result['p_title'];
            $overview=$result['p_overview'];
            $file="file/".$result['p_file'];
            $op=array($id, $title, $overview, $file);
        }else{
            $a='Nothing';
            $op=array($a);
        }
        return $op;
    }

    public function showComment($project_id){
        $qry=mysqli_query($this->dbs, "SELECT * FROM `project_comments` WHERE `project_id`='".$project_id."' ORDER BY `project_comments`.`c_time` DESC");
        $count=mysqli_num_rows($qry);
        $op='';
        if($count == 0){
            $op.='No One Commented Yet!';
            
        }else{
            foreach ($qry as $row) {
                $op.='
                    <label class="name"><b>'.$row['c_name'].'</b> at '.$row['c_time'].'</label>
                    <p>'.$row['c_comments'].'</p>
                ';
            }
            // $op=array($op);
        }
        return $op;
    }

    public function insertComment($commentor_name, $commentor_comment, $insert_project_id){
        $qry=mysqli_query($this->dbs, "INSERT INTO `project_comments`(`c_name`, `project_id`, `c_comments`, `c_time`) VALUES ('".$commentor_name."', '".$insert_project_id."', '".$commentor_comment."', NOW())");
        if($qry){
            $op= "Success";
        }else{
            $op= "Something is Wrong!!";
        }
        return $op;
    }

    public function adminLogin($admin_name, $admin_pass){
        $qry=mysqli_query($this->dbs, "SELECT * FROM `login` WHERE `l_username`='".$admin_name."' AND `l_password`='".$admin_pass."'");
        $out=mysqli_fetch_assoc($qry);
        $user=$out['l_username'];
        if(mysqli_num_rows($qry)>0){
            $op = "success";
            $_SESSION['user_l']=$admin_name;
        }else{
            $op = "User Not Found!!";
        }
        return $op;
    }

    public function sendFeedback($roll, $email, $msg){
        $qry=mysqli_query($this->dbs, "INSERT INTO `project_feedback`(`feedback_roll`, `feedback_email`, `feedback_mssg`)
         VALUES ('".$roll."', '".$email."', '".$msg."')");
        if($qry){
            $op="success";
        }else{
            $op="error";
        }
        return $op;
    }
}

class Signup extends dbcon{
    public function Signup_check($name, $email, $phnumber, $pass){
        $checkqry=mysqli_query($this->dbs, "SELECT * FROM `user_login` WHERE `uemail`='".$email."' AND `ucontact`='".$phnumber."'");
        $result=mysqli_fetch_assoc($checkqry);
        if(mysqli_num_rows($checkqry)==1){
            $op="User Already Exist!!";
        }else{
            $addqry=mysqli_query($this->dbs, "INSERT INTO `user_login`(`uname`, `uemail`, `ucontact`, `upassword`) VALUES ('".$name."', '".$email."', '".$phnumber."', '".$pass."')");
            if($addqry){
                $op = "success";
                $_SESSION['User_check']=$name;
            }else{
                $op="Please Check Email Or Password!!!";
            }
        }
        return $op;
    }

    public function Login_check($email, $pass){
        $loginqry=mysqli_query($this->dbs, "SELECT * FROM `user_login` WHERE (`uemail`='".$email."' OR `ucontact`='".$email."') AND `upassword`='".$pass."'");
        $qryout=mysqli_fetch_assoc($loginqry);
        $loginuser=$qryout['uname'];
        if(mysqli_num_rows($loginqry)>0){
            $op = "success";
            $_SESSION['User_check']=$loginuser;
        }else{
            $op = "User Not Found!!";
        }
        return $op;
    }
}

if(isset($_POST["archive"])){
    $branch=$_POST["branch"];
    $batch=$_POST["batch"];
    $group=$_POST["group"];
    $objlogin=new actions();
    $opobjlogin=$objlogin->showProject($branch, $batch, $group);
    echo json_encode($opobjlogin);
}

if(isset($_POST["rec_comment"])){
   $project_id=$_POST['pro_id'];
   $objcomment=new actions();
   $opobjcomment=$objcomment->showComment($project_id);
   echo $opobjcomment;
}

if(isset($_POST['comments'])){
   $commentor_name=$_POST['commentor_name'];
   $commentor_comment=$_POST['commentor_comment'];
   $insert_project_id=$_POST['pro_id_p'];
   $objinsertcomment=new actions();
   $opobjinsertcomment=$objinsertcomment->insertComment($commentor_name, $commentor_comment, $insert_project_id);
   echo $opobjinsertcomment;
}

// admin login
if(isset($_POST['admin_submit'])){
   $admin_name=$_POST['name'];
   $admin_pass=$_POST['pass'];
   $objlogin=new actions();
   $opobjlogin=$objlogin->adminLogin($admin_name, $admin_pass);
   echo $opobjlogin;
}

if(isset($_POST['feedback_submit'])){
   $roll=$_POST['roll'];
   $email=$_POST['email'];
   $msg=$_POST['query'];
   $opfeedback=new actions();
   $opfeedbackactions=$opfeedback->sendFeedback($roll, $email, $msg);
   echo $opfeedbackactions;
}

// user signup & login
if(isset($_POST['signup_yet'])){
   $name=$_POST['sgname'];
   $email=$_POST['sgemail'];
   $phnumber=$_POST['sgph'];
   $pass=$_POST['sgpass'];
   $objsignup=new Signup();
   $opobjsignup=$objsignup->Signup_check($name, $email, $phnumber, $pass);
   echo $opobjsignup;
}

if(isset($_POST['login_yet'])){
   $email=$_POST['sgemail'];
   $pass=$_POST['lgpass'];
   $objlogin=new Signup();
   $opobjlogin=$objlogin->Login_check($email, $pass);
   echo $opobjlogin;
}
?>
