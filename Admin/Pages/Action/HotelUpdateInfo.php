<?php 
$H_id = $_POST["HUid"];
require_once("../Action/Conn.php");
// $uid = $_POST['id'];
//echo $H_id;
$quaryh="select * from hotels where hotel_id=".$H_id;
$resulth= mysqli_query($conect,$quaryh);
$output="";
    while($row=mysqli_fetch_assoc($resulth)){
        $output .="  <!-- general form elements -->
        <div class='card card-primary'>
          <div class='card-header'>
            <h3 class='card-title'>View New Register Guide</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role='form'>
            <div class='card-body'>
            <input type='hidden' class='form-control' id='HUpdateid' value='{$row["hotel_id"]}' >
              <div class='form-group'>
                <label for='exampleInputEmail1'>Hotel Name</label>
                <input type='text' class='form-control' id='HUpdateName' value='{$row["hotel_name"]}' >
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Owner Name</label>
                <input type='text' class='form-control' id='HUpdateOwnerName' placeholder='Password' value='{$row["owner_name"]}' >
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Venue</label>
                <input type='text' class='form-control' id='HUpdateHotelVanue' placeholder='Password' value='{$row["venue"]}'>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Hotel Email</label>
                <input type='email' class='form-control' id='HUpdateEmail'  value='{$row["hotel_email"]}'>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Hotel Contact</label>
                <input type='text' class='form-control' id='HUpdateContact' placeholder='' value='{$row["hotel_contact"]}'>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Hotel Type</label>
                <input type='text' class='form-control' id='HUpdateType' placeholder='' value='{$row["hotel_type"]}'>
              </div>
              <input type='submit' id='Hotel-update-submit' value='Update' class='btn btn-block btn-outline-warning  btn-lg'>
            </div>
            <!-- /.card-body -->";
    }
    echo $output;
?>