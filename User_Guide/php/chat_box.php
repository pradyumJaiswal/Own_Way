<?php
require_once("../../include/Conn.php");

$from = $_POST["c_from"];
$to = $_POST["c_to"];
$message_chat = $_POST["c_message"];
$chat_mes="INSERT INTO chatbox(From_user,To_user,Message)VALUES('$from','$to','$message_chat')";
           if(mysqli_query($conect,$chat_mes)){
                 echo 1;
              }else{
                 echo 0;
              }

?>
   