<?php
include './../database/db.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$nama=$_POST['nama'];

$price=$_POST['price'];

$image_name=$_FILES['image']['name'];

$allowed_extension=["jpg","jpeg","png"];
$image_extension=PATHINFO($image_name,PATHINFO_EXTENSION);
session_start();
if($_FILES['image']['size']>10000000)
{
    $_SESSION['error']="size too much";
    header("Location: ./../insertm.php");
}else if(in_array($image_extension,$allowed_extension)==false)
{
    $_SESSION['error']="wrong ext";
    header("Location: ./../insertm.php");
}else{
    $document_root=$_SERVER['DOCUMENT_ROOT'];
    $full_upload_path="$document_root/WeVent/bloger/theme/img/team/$image_name";
    move_uploaded_file($_FILES['image']['tmp_name'],$full_upload_path);
    //print_r($_FILES['image']);
    $query="INSERT INTO merch(nama,price,image) VALUES('$nama','$price','$image_name')";
    $connection->query($query);
    header("Location: ./../merch-dev.php");

    // if ($connection->query($query) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $query . "<br>" . $connection->error;
    // }
}
}
?>