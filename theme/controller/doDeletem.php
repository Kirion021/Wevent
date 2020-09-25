<?php
include '.././database/db.php';

$id = $_GET['id'];
$query="DELETE FROM merch WHERE id=$id";
$connection->query($query);

header("Location: ./../merch-dev.php");
?>