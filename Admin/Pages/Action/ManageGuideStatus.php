<?php 
require_once("../Action/Conn.php");
//If Satatus=0 it means user is Active and if Status=1 it means user is inactive

$id=$_GET['id'];
$status=$_GET['status'];
$quary = "update user_table set status=$status where id=$id";
mysqli_query($conect,$quary);
echo "ok";
header("location:../AdminPages/Layout/verifyGuideInfo.php");
?>