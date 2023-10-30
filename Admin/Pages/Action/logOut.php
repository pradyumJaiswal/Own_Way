<?php 
require_once('../Action/Conn.php');
session_start();
session_unset();
session_destroy();
header("location:../AdminPages/login.php");
?>