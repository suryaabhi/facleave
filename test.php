<? PHP
include 'inc/config.php';

$name=$_POST['name'];
$id=$_POST['uid'];
$email=$_POST['email'];
$faculty=$_POST['faculty'];
$pass=$_POST['password'];
$sql="insert into tbl_users (name,uid,email,faulty,password) values ('$name','$id','$email','$faculty','$pass')";
$res=mysql_query($sql);
    if(!$res)
    {
        die();
        
    }
else
{
    
        header("location:index.php");//run the code
}
?>