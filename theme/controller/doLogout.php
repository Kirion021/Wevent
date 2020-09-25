<?php

session_start();
session_unset();

//unset($_COOKIE["cookie_username"]);
//unset($_COOKIE["cookie_password"]);

if( !isset($_SESSION["username"]) ){
    header("Location: ../login.php");
}else{
    die("Fail");
}

?>