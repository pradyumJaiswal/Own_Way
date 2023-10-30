<?php 
require_once("./Conn.php");
$Alot_id = $_POST["B_A_id"];
$Alot_Guide_id =$_POST["GuideAlotment"];
$Alot_Hotel_id =$_POST["HotelAlotment"];
$Alot_Treval_id =$_POST["TravelAlotement"];

$confirmBooking ="UPDATE tour_booking SET alot_guide_id='$Alot_Guide_id',alot_hotel_id='$Alot_Hotel_id',alot_vehicle_id='$Alot_Treval_id',booking_status='confirm' WHERE booking_id='$Alot_id'";
if(mysqli_query($conect,$confirmBooking ) == true){
    echo 1;
}
else{
    echo 0;
}
?>