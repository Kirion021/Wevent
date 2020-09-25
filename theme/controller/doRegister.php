<?php

include "../database/db.php";

if( isset($_POST["register"]) ){
    $username = $_POST["username"];    
    $password = $_POST["password"];
    $conf_password = $_POST["confirm_password"];

    // Before Hashing
    // $query = "INSERT INTO user(name,password,role) VALUES('$username','$password','Guest')";
    // $result = $connection->query($query);

    
    // Find The Same Name 
    $find_query = "SELECT name FROM user WHERE name = '$username'";
    $result_find = $connection->query($find_query);
    

    if( $result_find->num_rows < 1 ){
        // After Hashing
        $hash_pass = password_hash($password,PASSWORD_BCRYPT);
        $query = "INSERT INTO user(name,password,role) VALUES('$username','$hash_pass','guest')";
        $result = $connection->query($query);

        header("Location: ../login.php");
    }else{
        header("Location: ../register.php");
    }

}

?>