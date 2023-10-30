<?php
require_once("../Action/Conn.php");
$pname = $_POST["pname"];
$ptype = $_POST["ptype"];
$pvplaces = $_POST["pvplaces"];
$phid= $_POST["phid"];
$pgid = $_POST["pgid"];
$ptid = $_POST["ptid"];
$SQL = "INSERT INTO subscription_plan(plan_name,plan_type,visit_place,hotel_id,guide_id,travel_id,status)VALUES('$pname','$ptype','$pvplaces',$phid,$pgid,$ptid,1)";
// $result = mysqli_query($conect,$SQL) or die("not run");
if(mysqli_query($conect,$SQL)){
    echo 1;
}
else{
    echo 0;
}
?>