<?php 
require_once("./Conn.php");
$HU_Id = $_POST["Hid"];
$HU_N = $_POST["HNAME"];
$HU_Owner = $_POST["HON"];
$HU_Vanue = $_POST["Hvanue"];
$HU_Email =$_POST["HMail"];
$HU_Phone = $_POST["HCon"];
$HU_Type = $_POST["HUT"];
 $HSQL ="UPDATE hotels SET hotel_name='$HU_N',owner_name='$HU_Owner',venue='$HU_Vanue',hotel_email='$HU_Email',hotel_contact='$HU_Phone',hotel_type='$HU_Type' WHERE hotel_id='$HU_Id '";
 if(mysqli_query($conect, $HSQL)){
    echo 1;
}else{
    echo 0;
}

?>