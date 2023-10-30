<?php
require_once("../../include/Conn.php");
$name = $_POST["q_name"];
$email = $_POST["q_email"];
$subject = $_POST["q_subject"];
$message = $_POST["q_message"];

$insert="INSERT INTO contact(Name,Email,Subject,Message)VALUES('$name','$email','$subject','$message')";
   
     $result=mysqli_query($conect,$insert);

     if($result){
        echo 1;
     }else{
        echo 0;
     }
?>