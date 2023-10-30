<?php 
require_once("../Action/Conn.php");
//If Satatus=0 it means user is Active and if Status=1 it means user is inactive

$id=$_GET['id'];
$status=$_GET['status'];
$quary = "update hotels set h_status=$status where hotel_id=$id";
mysqli_query($conect,$quary);
echo "ok";
header("location:../AdminPages/Layout/ManageHotel.php");
?>