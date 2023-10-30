<?php
require_once("./Conn.php");
 $id = $_POST['Rid'];
$RemoveQuary = "DELETE FROM user_table WHERE id=$id";
//$resultR= mysqli_query($conect,$RemoveQuary);
if(mysqli_query($conect,$RemoveQuary)){
    echo 1;
}else
{
    echo 0;
}

?>