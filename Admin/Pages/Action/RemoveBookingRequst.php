<?php
require_once("./Conn.php");
$Get_Tour_Remove_id = $_POST["Rid_Tour"];
$RemoveTourQuary ="UPDATE tour_booking SET booking_status='cancle' WHERE booking_id='$Get_Tour_Remove_id'";
if(mysqli_query($conect,$RemoveTourQuary) == true ){
    echo 1;
}else{
    echo 0;
}
?>