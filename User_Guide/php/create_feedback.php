<?php
require_once("../../include/Conn.php");

$client_name = $_POST["f_name"];
$client_id = $_POST["user_id"];
$client_email = $_POST["f_email"];
$feedback = $_POST["feedback"];



         $feedback_insert="INSERT INTO feedback(Client_name,Client_email,Feedback,client_id)VALUES('$client_name','$client_email','$feedback','$client_id')";
           if(mysqli_query($conect,$feedback_insert)){
                 echo 1;
              }else{
                 echo 0;
              }





?>