<?php 
require_once("../Action/Conn.php");
//If Satatus=0 it means user is Active and if Status=1 it means user is inactive

$id=$_GET['id'];
//$Guideid=rand(10000,100000);
echo"$Guideid";
//$Status=$_GET['status'];
$quary = "UPDATE user_table SET status='0' WHERE id=$id";
mysqli_query($conect,$quary);
header("location:../AdminPages/Layout/verifyGuideInfo.php");
?>