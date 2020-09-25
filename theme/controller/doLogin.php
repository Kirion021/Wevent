<?php

session_start();
session_regenerate_id(true);

include "../database/db.php";

if( isset($_POST["submit"]) ){
    $username = $_POST["username"];    
    $password = $_POST["password"];
   // $cookie = $_POST["remember"];
    $time = time();
    // Before Hashing
    // $query = "SELECT * FROM user WHERE name = '$username' AND password = '$password'";
    // $result = $connection->query($query);

    // After Hashing
    $query = "SELECT * FROM user WHERE name = '$username'";
    $result = $connection->query($query);
    
    if( $result ){
        $row = $result->fetch_assoc();

        if( password_verify($password,$row["password"]) ){
            $_SESSION["username"] = $username;

           // if($cookie){
             //   setcookie("cookie_username",$username,$time + 3600, "../");
               // setcookie("cookie_password",$password,$time + 3600, "../");
           // }

            if($row["role"] == "admin" ) header("Location: ../home-developer.php");
            else header("Location: ../index.php");
        }

    }else{
        $_SESSION['error']="Wrong username or password";
        header("Location: ../login.php");
    }

}

?>