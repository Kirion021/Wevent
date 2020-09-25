<?php
include './../database/db.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$name=$_POST['name'];
$date=$_POST['date'];
$price=$_POST['price'];
$desc=$_POST['desc'];
$image_name=$_FILES['image']['name'];

$allowed_extension=["jpg","jpeg","png"];
$image_extension=PATHINFO($image_name,PATHINFO_EXTENSION);
session_start();
if($_FILES['image']['size']>10000000)
{
    $_SESSION['error']="size too much";
    header("Location: ./../inserte.php");
}else if(in_array($image_extension,$allowed_extension)==false)
{
    $_SESSION['error']="wrong ext";
    header("Location: ./../inserte.php");
}else{
    $document_root=$_SERVER['DOCUMENT_ROOT'];
    $full_upload_path="$document_root/WeVent/bloger/theme/img/event/$image_name";
    move_uploaded_file($_FILES['image']['tmp_name'],$full_upload_path);
    //print_r($_FILES['image']);
    $query="INSERT INTO event(name,price,date,description,image) VALUES('$name','$price','$date','$desc','$image_name')";
    $connection->query($query);
    header("Location: ./../merch-dev.php");
    //  if ($connection->query($query) === TRUE) {
    //      echo "New record created successfully";
    // } else {
    //      echo "Error: " . $query . "<br>" . $connection->error;
    //  }
}
}
?>