<?php require 'header.php' ?>

<?php

$id = MYSQLI_REAL_ESCAPE_STRING($con, $_GET['id']);
$sql = "SELECT * FROM products where pro_id = $id";
$rs = MYSQLI_QUERY($con, $sql);
$row = MYSQLI_FETCH_ARRAY($rs);

?>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="img/<?php echo $row['pro_img'] ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="display-6 mb-3">
                        <span class="text-primary">Price: <span id="price"><?php echo $row['pro_price'] ?></span> KIP
                    </h1>
                    <h4 class="mb-5"><?php echo $row['pro_name'] ?></h4>
                    <h5 class="mb-1">Quantity:</h5>
                    <div class="form-group">
                        <input type="number" id="num" class="mb-5" min="1" max="<?php echo $row['pro_qty'] ?>" value="1">
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5 add" href="#" onclick="ok()">ADD TO CART</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<?php require 'footer.php' ?>

<script>
    // function ok(){
    // let i= <?php echo $id ?>;
    //     let q = document.getElementById('num').value;
    //     let p = document.getElementById('price').innerText;
    //     alert("Product ID: " + i + "\nQuantity: " + q + " Unit\n" + p + "KIP");
    // }

    $(document).ready(function() {
        $(".add").click(function() {
            var id = <?php echo $id ?>;
            var price = document.getElementById('price').innerHTML;
            var qty = document.getElementById('num').value;
            var data = "id=" + id + "&price=" + price + "&qty=" + qty;
            //    alert("ID: "+id +"\nQuantity: "+ qty+"\nPrice: " + price);
            $.ajax({
                type: "POST",
                url: "about_pc.php",
                data: data,
                success: function(result) {
                    Swal.fire(
                        'Successfuly\n' + result,
                        'You order is successfuly',
                        'success'
                    );
                }
            })

        })
    })
</script>