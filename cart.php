<?php 
session_start();
require 'header.php'; 
$bill_id = $_SESSION['bill_id'];
?>

<?php 

$sql = "SELECT * FROM products JOIN bill_detail ON bill_detail.pro_id = products.pro_id where bill_id = $bill_id";
$rs = mysqli_query($con,$sql);

?>
<div class="container mt-3">
  <h2> BILL ID: <?php echo $_SESSION['bill_id']?> </h2>
<table class="table" border= "1">
    <thead>
        <tr class="table">
        <th><h5>NAMES</h5></th>
        <th><h5>PHOTOES</h5></th>
        <th><h5>PRICES</h5></th>
        <th><h5>QUANITY</h5></th>
        <th><h5>TOTAL</h5></th>
        <th><h5>EDIT</h5></th> 
        <th><h5>DELETE</h5></th> 
      </tr>
    </thead>
   
    <tbody class="table-secondary">
      <tr>
        <?php while($row = mysqli_fetch_array($rs)) { ?>

        <td> <?php echo $row['pro_name'] ?></td>
        <td> <img src="img/<?php echo $row['pro_img']?> "style=" width: 50px; height: 50px;"  alt=""> </td>
        <td> <?php echo $row['pro_price'] ?> KIP</td>
        <td> <?php echo $row['pro_qty'] ?></td>
        <td> <?php echo $row['total'] ?> KIP</td>
        <td><a href="edit.php?id=<?php echo $row['pro_id']?>" class="btn btn-primary">EDIT</a></td>
        <td><a href="delete.php?id=<?php echo $row['pro_id']?>" class="btn btn-danger">DELETE</a></td>
        <!-- <td> <?php echo $row['pro_img'] ?></td>  -->
        
        

      </tr>
    
      <?php } ?>

    </tbody>
</table>
<button class="btn btn-primary">CONFIRM</button>
</div>




<?php 
require 'footer.php';
?>