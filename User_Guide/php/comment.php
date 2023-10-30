<?php
require_once("../../include/Conn.php");

$Comment = $_POST["k_comment"];
$p_id = $_POST["k_id"];
$u_id = $_POST["k_user_id"];
$insert="INSERT INTO comment(Comment,P_id,U_id)VALUES('$Comment','$p_id','$u_id')";
           if(mysqli_query($conect,$insert)){
                 echo 1;
              }else{
                 echo 0;
              }

?>
   