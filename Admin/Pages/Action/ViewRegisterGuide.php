<?php 
$User_id = $_POST["id"];
require_once("../Action/Conn.php");
// $uid = $_POST['id'];
//echo $uid;
$quary="select * from user_table where ID=".$User_id;
$result= mysqli_query($conect,$quary);
$output="";
    while($row=mysqli_fetch_assoc($result)){
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
                <label for='exampleInputEmail1'>Name</label>
                <input type='email' class='form-control' id='exampleInputEmail1' placeholder='Enter email' value='{$row["full_name"]}' readonly>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Email</label>
                <input type='text' class='form-control' id='exampleInputPassword1' placeholder='Password' value='{$row["email"]}' readonly>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Contact</label>
                <input type='text' class='form-control' id='exampleInputPassword1' placeholder='Password' value='{$row["phone_number"]}'readonly>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Address</label>
                <input type='text' class='form-control' id='exampleInputPassword1' placeholder='Password' value='{$row["address_user"]}'readonly>
              </div>
            </div>
            <!-- /.card-body -->";
    }
    echo $output;
?>