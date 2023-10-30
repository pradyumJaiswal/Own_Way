<?php 
require_once("./Conn.php");
$User_id = $_POST["userid"];
$User_name = $_POST["name"];
$User_email = $_POST["email"];
$contact = $_POST["contact"];
$adrees = $_POST["adrees"];
//$status = $_POST["Gstatus"];
//$intStatus = $_POST["Istatus"];
$Gid = $_POST["Gid"];
//$pass=$_POST["pass"];
$SQL="UPDATE user_table SET full_name='$User_name',email='$User_email',phone_number='$contact',address_user='$adrees',guide_id='$Gid' WHERE id = $User_id";
// $update="UPDATE user_table SET full_name='$User_name',email='$User_email',phone_number=$contact,address_user='$adrees',interview_status='$intStatus',status='$status',guide_id='$Gid',guide_pwd='$pass' WHERE id = $id";
if(mysqli_query($conect,$SQL)){
    echo 1;
}else{
    echo 0;
}
?>