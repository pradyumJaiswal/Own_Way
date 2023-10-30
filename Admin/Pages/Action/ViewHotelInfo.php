<?php 
$H_id = $_POST["id"];
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
              <div class='form-group'>
                <label for='exampleInputEmail1'>Hotel Name</label>
                <input type='email' class='form-control' id='exampleInputEmail1' placeholder='Enter email' value='{$row["hotel_name"]}' readonly>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Owner Name</label>
                <input type='text' class='form-control' id='exampleInputPassword1' placeholder='Password' value='{$row["owner_name"]}' readonly>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Venue</label>
                <input type='text' class='form-control' id='exampleInputPassword1' placeholder='Password' value='{$row["venue"]}'readonly>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Hotel Email</label>
                <input type='text' class='form-control' id='exampleInputPassword1' placeholder='Password' value='{$row["hotel_email"]}'readonly>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Hotel Contact</label>
                <input type='text' class='form-control' id='exampleInputPassword1' placeholder='' value='{$row["hotel_contact"]}'readonly>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Hotel Type</label>
                <input type='text' class='form-control' id='exampleInputPassword1' placeholder='' value='{$row["hotel_type"]}'readonly>
              </div>
            </div>
            <!-- /.card-body -->";
    }
    echo $output;
?>