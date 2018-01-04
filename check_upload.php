<?php
if((empty($_SERVER['HTTP_X_REQUESTED_WITH']) or strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') or empty($_POST)){
  exit("Unauthorized Acces");
}
require('inc/config.php');

$file_path = "uploads/";

$file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
    
    mysqli_query($con,"INSERT INTO `files` (filename,path) VALUES ('".$_FILES['uploaded_file']['tmp_name']."','".$file_path."')") or trigger_error($con->error."[ $sql]");
  mysqli_close($con);

} else{
    echo "fail";
}
/*
if(!empty($_POST) && $_POST['Action']=='upload_form'){
    
// Count # of uploaded files in array
$total = count($_FILES['files']['name']);

// Loop through each file
for($i=0; $i<$total; $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['files']['tmp_name'][$i];

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "./uploads/" . $_FILES['files']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

    }
  }
}
    $Return = array('result'=>array(), 'error'=>'');

    $head = safe_input($con, $_POST['head']);
    $class = safe_input($con, $_POST['class']);
    $files = safe_input($con, $_POST['files']);
    $content = safe_input($con, $_POST['content']);

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
*/
?>