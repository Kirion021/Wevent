<?php
include '.././database/db.php';

$id = $_GET['id'];
$query="DELETE FROM event WHERE id=$id";
$connection->query($query);

header("Location: ./../merch-dev.php");
?>