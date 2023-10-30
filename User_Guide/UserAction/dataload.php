<?php 
// for dended select box
//require_once("../../include/Conn.php");
$conect=  mysqli_connect("localhost","root","","tour_project");
if($conect-> connect_error){
    die("connection failed:".$conect-> connect_error);
}
echo '';/*connected successfully*/
if($_POST['type'] == ""){
    $sql = "SELECT * FROM  countries";
    $qurey= mysqli_query($conect,$sql) or die("not run");
    $str = "";
    while($row = mysqli_fetch_assoc($qurey)){
        $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
    }
}
else if($_POST['type'] == "stateData"){
    
    $sql = "SELECT * FROM  states WHERE country_id = {$_POST['id']}";
    $qurey= mysqli_query($conect,$sql) or die("not run");
    $str = "";
    while($row = mysqli_fetch_assoc($qurey)){
        $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
    }
    
} else if($_POST['type'] == "cityData"){
    $city = $_POST['type'];
    $qurey=mysqli_query($conect,"SELECT * FROM cities WHERE state_id={$_POST['id']} ");
    $str = "";
    while($row = mysqli_fetch_assoc($qurey)){
        $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
    }
}
echo $str;
?>