<?php 

session_start();
$bill_id = $_SESSION['bill_id'];
require 'header.php';

$sql ="SELECT SUM(total) FROM bill_detail WHERE bill_id = $bill_id";
$rs =mysqli_query($con,$sql);
$row =mysqli_fetch_array($rs);
//echo $row['SUM(total)'];

?>

<div class="container">

    <form action="confrm_pc.php" method="post" enctype="multipart/form-data">
        <br>
        <h2>CONFIRM ORDER : <?php echo $bill_id ?></h2>
        <h4>Your Information</h4>

        <div class="mb-3 mt-3">
            <label for="" class="form-lable">YOU NAME</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="" class="form-lable">YOU LAST NAME</label>
            <input type="text" name="last" id="" class="form-control" placeholder="Enter your last name">
        </div>
        <div class="mb-3">
            <label for="" class="form-lable">YOUR PHONE NUMBER</label>
            <input type="text" name="phone" id="" class="form-control" placeholder="Enter your phone number">
        </div>
        <div class="mb-3" class="form-lable">
            <label for="">LOCATION</label>
            <textarea type="text" name="lo" id="" class="form-control" rows="2"></textarea>
        </div>
        <button class="btn btn-primary">CONFIRM</button>
        <input type="hidden" name="total" id="" value="<?php $row['SUM(total)'] ?>">
    </form>

</div>