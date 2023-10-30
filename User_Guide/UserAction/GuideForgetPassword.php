<?php 
require_once("../../include/Conn.php");
if(isset($_POST["guide_Forget_Pwd"])){
    $Guide_Id = $_POST["Gid_F_Pwd"];
    $Guide_New_Pwd = $_POST["G_PWd_F_Pwd"];
    $G_Forget_Quary ="UPDATE user_table SET guide_pwd='$Guide_New_Pwd' WHERE guide_id='$Guide_Id'";
    if(mysqli_query($conect,$G_Forget_Quary) == TRUE){
        //echo "Ok";
        header("location: ../Layout/guidelogin.php");
    }
    else{
        echo "no";
    }
}
?>