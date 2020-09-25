<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "wevent";

$connection = new mysqli($host,$username,$password,$db_name);

if( !$connection ){
    die("Database Not Found!");
}

?>