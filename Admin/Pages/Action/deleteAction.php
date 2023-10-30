<?php
//------ For Remove User Action --------//
require_once("./Conn.php");
$id=$_POST['id'];
$SQL ="DELETE FROM user_table WHERE ID=$id";
$RESULT= mysqli_query($conect,$SQL);
   

?>