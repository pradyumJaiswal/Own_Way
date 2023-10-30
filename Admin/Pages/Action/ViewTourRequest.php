<?php 
$booking_id = $_POST["id"];
require_once("../Action/Conn.php");
// $uid = $_POST['id'];
//echo $uid;
$quary="select * from tour_booking where booking_id=".$booking_id;
$result= mysqli_query($conect,$quary);
$output="";
    while($row=mysqli_fetch_assoc($result)){
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
                <label>Name</label>
                <input type='email' class='form-control' id='username' placeholder='Enter email' value='{$row["user_name"]}'>
              </div>
              <div class='form-group'>
                <label>Email</label>
                <input type='text' class='form-control' id='email_b' placeholder='Password' value='{$row["email_b"]}'>
              </div>
              <div class='form-group'>
                <label>Contact</label>
                <input type='text' class='form-control' id='phone_number_b' placeholder='Password' value='{$row["phone _number_b"]}'>
              </div>
              <div class='form-group'>
                <label>Address</label>
                <input type='text' class='form-control' id='address' placeholder='Password' value='{$row["address"]}'>
              </div>
              <div class='form-group'>
                <label>Visit Placce</label>
                <input type='text' class='form-control' id='visit_place' placeholder='Password' value='{$row["visit_state"]}'>
              </div>
              <div class='form-group'>
                <label>Arrive Date</label>
                <input type='text' class='form-control' id='arrive_date' placeholder='Password' value='{$row["arrive_date"]}'>
              </div>
              <div class='form-group'>
                <label>Number Of Kids</label>
                <input type='text' class='form-control' id='kids' placeholder='Password' value='{$row["kids"]}'>
              </div>
              <div class='form-group'>
                <label>Number Of Adult</label>
                <input type='text' class='form-control' id='adult' placeholder='Password' value='{$row["adult"]}'>
              </div>
              <div class='form-group'>
                <label>Number Of Senior</label>
                <input type='text' class='form-control' id='senior' placeholder='Password' value='{$row["senior"]}'>
              </div>
              <div class='form-group'>
                <label>Booking Status</label>
                <input type='text' class='form-control' id='bookingStatus' placeholder='Password' value='{$row["booking_status"]}'>
           </div>
          </div>
        </div> 
        </div>
    <!-- /.card-body -->";
    }
    echo $output;
?>