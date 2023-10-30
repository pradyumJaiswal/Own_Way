<?php 
require_once("./Conn.php");
$Alot_id_Edit = $_POST["B_A_id_Edit"];
$Alot_Guide_id_Edit =$_POST["GuideAlotment_Edit"];
$Alot_Hotel_id_Edit =$_POST["HotelAlotment_Edit"];
$Alot_Treval_id_Edit =$_POST["TravelAlotement_Edit"];
$confirmBooking ="UPDATE tour_booking SET alot_guide_id='$Alot_Guide_id_Edit',alot_hotel_id='$Alot_Hotel_id_Edit',alot_vehicle_id='$Alot_Treval_id_Edit' WHERE booking_id='$Alot_id_Edit'";
if(mysqli_query($conect,$confirmBooking ) == true){
    echo 1;
}
else{
    echo 0;
}
?>