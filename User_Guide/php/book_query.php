<?php
require_once("../../include/Conn.php");



$city1 = $_POST["b_city1"];
$date1 = $_POST["b_date1"];
$date2 = $_POST["b_date2"];
$person = $_POST["b_person"];

$insert="INSERT INTO booking_query(Visit_City,Depart_date,Return_date,Duration)VALUES('$city1','$date1','$date2','$person')";
   
if(mysqli_query($conect,$insert)){
        echo 1;        
}
else
{
        echo 0;
}
?>
