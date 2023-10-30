<?php
require_once("./Conn.php");
$Vehicle_id = $_POST['V_id'];
$Vehicle_Ownername = $_POST['ownername'];
$Vehicle_Contact = $_POST['contact'];
$Vehicle_Type = $_POST['vehicle_type'];
$Vehicle_Name = $_POST['vehicle_name'];
$Vehicle_Cpacity = $_POST['vehicle_cpacity'];
$SQLV= "UPDATE travel SET vehicle_ownername='$Vehicle_Ownername',contact_number='$Vehicle_Contact',vehicle_type='$Vehicle_Type',vehicle_name='$Vehicle_Name',vehicle_cpacity='$Vehicle_Cpacity' WHERE t_id=$Vehicle_id";
if(mysqli_query($conect,$SQLV)){
    echo 1;
}else{
    echo 0;
}
?>

