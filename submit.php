<?php
if((empty($_SERVER['HTTP_X_REQUESTED_WITH']) or strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') or empty($_POST)){
  exit("Unauthorized Acces");
}
require('inc/config.php');
require('inc/functions.php');


/* Check Login form submitted */
if(!empty($_POST) && $_POST['Action']=='login_form'){
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('result'=>array(), 'error'=>'');

    $email = safe_input($con, $_POST['Email']);
    $password = safe_input($con, $_POST['Password']);

    /* Server side PHP input validation */
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $Return['error'] = "Please enter a valid Email address.";
    }elseif($password===''){
        $Return['error'] = "Please enter Password.";
    }
    if($Return['error']!=''){
        output($Return);
    }

    /* Check Email and Password existence in DB */
    $result = mysqli_query($con, "SELECT * FROM tbl_users WHERE email='$email' AND password='".md5($password)."' LIMIT 1");
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        /* Success: Set session variables and redirect to Protected page */
        $Return['result'] = $_SESSION['UserData'] = array('user_id'=>$row['user_id']);
    } else {
        /* Unsuccessful attempt: Set error message */
        $Return['error'] = 'Invalid Login Credential.';
    }
    /*Return*/
    output($Return);
}



if(!empty($_POST) && $_POST['Action']=='registration_form'){
    $Return = array('result'=>array(), 'error'=>'');

    $name = safe_input($con, $_POST['Name']);
    $email = safe_input($con, $_POST['Email']);
    $password = safe_input($con, $_POST['Password']);
    $uid = safe_input($con, $_POST['uid']);
    $faculty = safe_input($con, $_POST['faculty']);

    if($name===''){
        $Return['error'] = "Please enter Full name.";
    }elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $Return['error'] = "Please enter a valid Email address.";
    }elseif($password===''){
        $Return['error'] = "Please enter Password.";
    }elseif($uid===''){
        $Return['error'] = "Please enter Admn. Number";
    }
    if($Return['error']!=''){
        output($Return);
    }

    $result = mysqli_query($con, "SELECT * FROM tbl_users WHERE email='$email' or uid='$uid' LIMIT 1");
    if(mysqli_num_rows($result)==1){
        $Return['error'] = 'You have already registered with us, please login.';
    }else{
        if($faculty=='1'){
             mysqli_query($con, "INSERT INTO tbl_users (email, password, entry_date, uid) values('$email', '".md5($password)."' ,NOW() ,'$uid')");
            $user_id = mysqli_insert_id($con);
            mysqli_query($con, "INSERT INTO `tbl_user_profile` (user_id,name,uid,faculty) VALUES('$user_id','$name','$uid','1')");
            $Return['result'] = $_SESSION['UserData'] = array('user_id'=>$user_id, 'uid'=>$uid);
        }else{
            mysqli_query($con, "INSERT INTO tbl_users (email, password, entry_date, uid) values('$email', '".md5($password)."' ,NOW() ,'$uid')");
            $user_id = mysqli_insert_id($con);
            mysqli_query($con, "INSERT INTO `tbl_user_profile` (user_id,name,uid) VALUES('$user_id','$name','$uid')");
            $Return['result'] = $_SESSION['UserData'] = array('user_id'=>$user_id, 'uid'=>$uid);
        }        
    }
    output($Return);
}

?>