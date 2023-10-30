<?php
require_once("../Action/Conn.php");
$pname = $_POST["pname"];
$ptype = $_POST["ptype"];
$pvplaces = $_POST["pvplaces"];
$no_of_days=$_POST["no_of_days"];
$fhotel= $_POST["fhotel"];
$fguide = $_POST["fguide"];
$ftravel = $_POST["ftravel"];
$SQL = "INSERT INTO basicsubcription(plan_name,plan_type,visit_places,no_of_days,Facility1,Facility2,Facility3)VALUES('$pname','$ptype','$pvplaces','$no_of_days','$fhotel','$fguide','$ftravel')";
// print_r($SQL);
// die;
// $result = mysqli_query($conect,$SQL) or die("not run");
if(mysqli_query($conect,$SQL)){
    echo 1;
}
else{
    echo 0;
}
?>