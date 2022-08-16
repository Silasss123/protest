<?php
require 'db.php';

$id = mysqli_real_escape_string($con,$_GET['id']);
$sql = "delete from bill_detail where pro_id = $id";
mysqli_query($con,$sql);
header('location:index.php');
?>