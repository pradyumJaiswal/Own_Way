<?php
require_once("../Action/Conn.php");
$OwnerName = $_POST["OwnerName"];
$Ownercontact = $_POST["Ownercontact"];
$VehicleType = $_POST["VehicleType"];
$VehicleName = $_POST["VehicleName"];
$VehicleCapcity = $_POST["VehicleCapcity"];
$Vehicle_Quary = "INSERT INTO travel(vehicle_ownername,contact_number,vehicle_type,vehicle_name,vehicle_cpacity,v_status)VALUES('$OwnerName','$Ownercontact','$VehicleType','$VehicleName','$VehicleCapcity','0')";
if(mysqli_query($conect,$Vehicle_Quary)){
    echo 1;
}
else{
    echo 0;
}

?>