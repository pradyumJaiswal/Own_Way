<?php
$Vehicle_id = $_POST["tid"];
require_once("../Action/Conn.php");
$quaryvd="select * from travel where t_id=".$Vehicle_id;
$resultvd= mysqli_query($conect,$quaryvd);
$srt="";
while($row=mysqli_fetch_array($resultvd)){
    $srt .= "  <div class='card card-primary'>
    <div class='card-header'>
      <h3 class='card-title'>View New Register Guide</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role='form'>
    <div class='card-body'>
    <input type='hidden' hidden class='form-control' id='id' placeholder='' name='id' value='{$row["t_id"]}'>
    <div class='form-group'>
      <label>Vehcile Owner Name</label>
      <input type='text' class='form-control' id='vehicle_ownername' placeholder='' name='name' value='{$row["vehicle_ownername"]}'>
    </div>
    <div class='form-group'>
      <label >Email:</label>
      <input type='email' class='form-control' id='contact_number' placeholder='' value='{$row["contact_number"]}'>
    </div>
    <div class='form-group'>
      <label >Contact Number:</label>
      <input type='text' class='form-control' id='vehicle_type' placeholder='' value='{$row["vehicle_type"]}'>
    </div>
    <div class='form-group'>
    <label >Address</label>
    <input type='text' class='form-control' id='vehicle_name' placeholder='' value='{$row["vehicle_name"]}'>
  </div>
  <div class='form-group'>
  <label >Guide Status</label>
  <input type='text' class='form-control' id='vehicle_cpacity' placeholder='' value='{$row["vehicle_cpacity"]}'>
</div>
</div>
</form>";
}
echo $srt;
?>