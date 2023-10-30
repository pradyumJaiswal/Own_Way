<?php 
require_once("./Conn.php");
$AdminId = $_POST['AId'];
$AdminName = $_POST['AName'];
$AdminEmail = $_POST['AEmail'];
$AdminContact = $_POST['AContact'];
$AdminPass = $_POST['AdminNewPwd'];
$UPADMIN ="UPDATE user_table SET full_name='$AdminName',email='$AdminEmail',phone_number='$AdminContact',pwd='$AdminPass' WHERE id = $AdminId";
if(mysqli_query($conect,$UPADMIN)){
    $_SESSION['AdminId'] = $AdminId;
    $_SESSION['email'] = $AdminEmail;
    $_SESSION['name'] = $AdminName ;
    $_SESSION['contact'] = $AdminContact;
    $_SESSION['AdminPwd'] = $AdminPass;
    echo 1;
}else{
    echo 0;

}
?>