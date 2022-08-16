<?php 

session_start();
require 'db.php'; 

$bill_id = $_SESSION['bill_id'];
$name = mysqli_real_escape_string($con,$_POST['name']);
$lname = mysqli_real_escape_string($con,$_POST['last']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$total = mysqli_real_escape_string($con,$_POST['total']);
$lo = mysqli_real_escape_string($con,$_POST['lo']);


$sql = "INSERT INTO bill VALUES ($bill_id,current_timestamp(),'$name','$lname','$phone','$total','$lo',1)";
//echo $sql;

mysqli_query($con,$sql);
session_destroy();
header('location:cart.php');

?>