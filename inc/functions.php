<?php
/*Function to get users data*/
function get_user_data($con, $user_id){
$result = mysqli_query($con, "SELECT U.*, P.name FROM tbl_users U LEFT JOIN tbl_user_profile P ON U.user_ID=P.user_id WHERE U.user_id='$user_id' LIMIT 1");
    if(mysqli_num_rows($result)==1){
        return mysqli_fetch_assoc($result);
    }else{
    	return FALSE;
    }
}

function get_user_display($con, $user_id){
$result = mysqli_query($con, "SELECT U.uid, U.email FROM tbl_users U LEFT JOIN tbl_user_profile P ON U.user_ID=P.user_id WHERE U.user_id='$user_id' LIMIT 1");
    if(mysqli_num_rows($result)==1){
        return mysqli_fetch_assoc($result);
    }else{
    	return FALSE;
    }
}

function get_user_uid($con, $user_id){
$resul = mysqli_query($con, "SELECT U.uid FROM tbl_users U LEFT JOIN tbl_user_profile P ON U.user_ID=P.user_id WHERE U.user_id='$user_id' LIMIT 1");
    if(mysqli_num_rows($resul)==1){
        return mysqli_fetch_assoc($resul);
    }else{
    	return FALSE;
    }
}

function get_user_name($con, $user_id){
$resu = mysqli_query($con, "SELECT P.name FROM tbl_users U LEFT JOIN tbl_user_profile P ON U.user_ID=P.user_id WHERE U.user_id='$user_id' LIMIT 1");
    if(mysqli_num_rows($resu)==1){
        return mysqli_fetch_assoc($resu);
    }else{
    	return FALSE;
    }
}

function safe_input($con, $data) {
  return htmlspecialchars(mysqli_real_escape_string($con, trim($data)));
}

/*Function to set JSON output*/
function output($Return=array()){
    /*Set response header*/
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    /*Final JSON response*/
    exit(json_encode($Return));
}

?>
