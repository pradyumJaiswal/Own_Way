<?php 
$User_id = $_POST["id"];
require_once("../Action/Conn.php");
// $uid = $_POST['id'];
//echo $uid;
$quary="select * from user_table where ID=".$User_id;
$result= mysqli_query($conect,$quary);
$output="";
//$GuideId=rand(10000,100000);
while($row=mysqli_fetch_assoc($result)){
    $output .= " <form action='#' method='post'>
    <input type='hidden' hidden class='form-control' id='idG' placeholder='' name='id' value='{$row["id"]}'>
    <div class='form-group'>
      <label >Name</label>
      <input type='text' class='form-control' id='name' placeholder='' name='name' value='{$row["full_name"]}'>
    </div>
    <div class='form-group'>
      <label >Email:</label>
      <input type='email' class='form-control' id='email' placeholder='' value='{$row["email"]}'>
    </div>
    <div class='form-group'>
      <label >Contact Number:</label>
      <input type='text' class='form-control' id='contact' placeholder='' value='{$row["phone_number"]}'>
    </div>
    <div class='form-group'>
    <label >Address</label>
    <input type='text' class='form-control' id='adrees' placeholder='' value='{$row["address_user"]}'>
  </div>
  <div class='form-group'>
  <label >Guide Status</label>
  <input type='text' class='form-control' id='status' placeholder='' value='{$row["status"]}'>
</div>
<div class='form-group'>
<label >Interview Status</label>
<input type='text' class='form-control' id='istatus' placeholder='' value='{$row["interview_status"]}'>
</div>
    <div class='form-group'>
      <label >Create Guide Id:</label>
      <input type='text' class='form-control' id='Gid' placeholder=''value='{$row["guide_id"]}' readonly>
    </div>
    <div class='form-group'>
      <label >Create Password:</label>
      <input type='text' class='form-control' id='pass' placeholder='' value='{$row["guide_pwd"]}'>
    </div>
    <div>
        <input type='submit' id='edit-submit' value='verify'  class='btn btn-block btn-outline-warning  btn-lg'>
    </div>
  </form>";
}
echo $output ;
?>