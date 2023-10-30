<?php 
$booking_id = $_POST["id"];
require_once("../Action/Conn.php");
// $uid = $_POST['id'];
//echo $uid;
$quary="select * from tour_booking where booking_id=".$booking_id;
$quaryfetchguide = "select * from user_table where user_type='Guide' and status='0'";
$quaryfetchHotel = "select * from hotels where h_status='0'";
$quaryfetchTervel = "select * from travel where v_status='0'";
$result= mysqli_query($conect,$quary);
$result1= mysqli_query($conect,$quaryfetchguide);
$result2= mysqli_query($conect,$quaryfetchHotel);
$result3= mysqli_query($conect,$quaryfetchTervel);

$output   ="";
$optionH1 ="";
$optionH2 ="";
$optionH3 ="";
$option2  ="";
$option3  ="";
$optionT1 ="";
$optionT2 ="";
$optionT3 ="";
$btnconfirm ="";


//
  //$option = $option."<option value='{$rowG["id"]} {$rowG["full_name"]}' class='form-control'></option>";
    while($row=mysqli_fetch_assoc($result)){
      //echo 1;
      // while($rowG=mysqli_fetch_assoc($result1)){
        $output .="  <!-- general form elements -->
        <div class='card card-primary'>
          <div class='card-header'>
            <h3 class='card-title'>Booking Request Status</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role='form'>
            <div class='card-body'>
              <div class='form-group'>
              <input type='hidden' class='form-control' id='booking_id_Allotment' value='$booking_id' >
                <label>Name</label>
                <input type='Text' class='form-control' id='username' placeholder='Enter email' value='{$row["user_name"]}' readonly>
              </div>
              <div class='form-group'>
                <label>Email</label>
                <input type='text' class='form-control' id='email_b' placeholder='Password' value='{$row["email_b"]}' readonly>
              </div>
              <div class='form-group'>
                <label>Contact</label>
                <input type='text' class='form-control' id='phone_number_b' placeholder='Password' value='{$row["phone _number_b"]}' readonly>
              </div>
              <div class='form-group'>
                <label>Address</label>
                <input type='text' class='form-control' id='address' placeholder='Password' value='{$row["address"]}' readonly>
              </div>
              <div class='form-group'>
                <label>Visit Placce</label>
                <input type='text' class='form-control' id='visit_place' placeholder='Password' value='{$row["visit_state"]}' readonly>
              </div>
              <div class='form-group'>
                <label>Arrive Date</label>
                <input type='text' class='form-control' id='arrive_date' placeholder='Password' value='{$row["arrive_date"]}' readonly>
              </div>
              <div class='form-group'>
                <label>Number Of Kids</label>
                <input type='text' class='form-control' id='kids' placeholder='Password' value='{$row["kids"]}'readonly>
              </div>
              <div class='form-group'>
                <label>Number Of Adult</label>
                <input type='text' class='form-control' id='adult' placeholder='Password' value='{$row["adult"]}' readonly>
              </div>
              <div class='form-group'>
                <label>Number Of Senior</label>
                <input type='text' class='form-control' id='senior' placeholder='Password' value='{$row["senior"]}' readonly>
              </div>
              <div class='form-group'>
                <label>Booking Status</label>
                <input type='text' class='form-control' id='bookingStatus' placeholder='Password' value='{$row["booking_status"]}' readonly>
           </div>
           <div class='form-group'>
                <label>Booking Status</label>
                <input type='text' class='form-control' id='paymentStatus' placeholder='Password' value='{$row["Payment_Status"]}' readonly>
           </div>
           <div class='form-group'>
    <label >Alot Tour Guide</label>
    <select class='form-control' id='guide_id_Alot' placeholder='Choose Type'>";
    while($rowG=mysqli_fetch_assoc($result1)){
      $option2 .= "<option value='{$rowG["id"]}'class='form-control'> {$rowG["full_name"]} </option> ";  
    }
    $option3 .= "</select>
  </div>";
  $optionH1 .= "<div class='form-group'>
  <label >Alot Hotels</label>
  <select class='form-control' id='hotel_id_Alot' placeholder='Choose Type'>";
  while($rowH=mysqli_fetch_assoc($result2)){
    $optionH2 .= "<option value='{$rowH["hotel_id"]}'class='form-control'> {$rowH["hotel_name"]} :-{$rowH["hotel_type"]}</option> ";
  }    
  $optionH3 .= "</select>
  </div>"; 
  $optionT1 .= "<div class='form-group'>
  <label >Alot Vehicle</label>
  <select class='form-control' id='vehicle_id_Alot' placeholder='Choose Type'>";
  while($rowT=mysqli_fetch_assoc($result3)){
    $optionT2 .= "<option value='{$rowT["t_id"]}'class='form-control'> {$rowT["vehicle_name"]} :-{$rowT["vehicle_type"]}</option> ";
  }
  $optionT3 .= "</select>
  </div>"; 
    "</div>
        </div> 
        </div>
    <!-- /.card-body -->";
    $btnconfirm .=" <input type='submit' id='Confirm-TourBooking-Option' value='Confitm Booking' class='btn btn-block btn-outline-success  btn-lg'>";
    }
  
    echo $output;
    echo $option1;
    echo $option2;
    echo $option3;
    echo $optionH1;
    echo $optionH2;
    echo $optionH3;
    echo $optionT1;
    echo $optionT2;
    echo $optionT3;
    echo $btnconfirm;


?>