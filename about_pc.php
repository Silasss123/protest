<?php
session_start();

require 'db.php';
$id = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['id']);
$price = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['price']);
$qty = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['qty']);
$total = $price * $qty;

if(!isset($_SESSION['bill_id'])){
    $rand = rand(100000,999999);
   
    $_SESSION['bill_id'] = $rand;
}
$bill_id = $_SESSION['bill_id'];
echo $bill_id;

$sql_checkpro = "SELECT * FROM bill_detail WHERE bill_id = $bill_id AND pro_id = $id";
$rs_checkpro = mysqli_query($con,$sql_checkpro);
$row_checkpro = mysqli_fetch_array($rs_checkpro);

if($row_checkpro == null){
    $sql = "INSERT INTO bill_detail VALUES ('',$bill_id,$id,$price,$qty,$total)";
}else{
    $sql = "UPDATE bill_detail SET pro_qty = pro_qty+$qty, total = total+$total WHERE bill_id = $bill_id AND pro_id=$id";
}
mysqli_query($con,$sql)

?>