<?php 
require_once("./Conn.php");
$V_ID = $_POST['vehicleid'];
$RemoveVehicle = "UPDATE travel SET t_status='1' WHERE t_id =$V_ID";
//echo $V_ID;
if(mysqli_query($conect,$RemoveVehicle)){
    echo 1;
}else
{
    echo 0;
}

?>