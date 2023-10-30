<?php
require_once("../../include/Conn.php");

session_start();
session_unset();
session_destroy();
header("location:./login.php"); 
?>