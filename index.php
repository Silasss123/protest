<?php  require 'header.php'?>
    
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/groot.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/bl2.JPG" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/bl1.JPG" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/groot.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 600px;">
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/bl2.JPG" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 800px;">
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/bl1.JPG" alt="Image">



                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 800px;">
                            
                            <!-- <h1 class="display-1 text-white mb-0 animated zoomIn">I am the mokey Rufy</h1> -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">

                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">ALL OUR PRODUCT</h6>
                    <h1 class="display-6 mb-4">We Focuse On Making The Best In All Sectors</h1>
                 </div>
            <div class="row g-4">
          
<?php 

$sql = "SELECT * FROM products";
$rs = mysqli_query($con,$sql);

?>
                
        <?php while($row = mysqli_fetch_array($rs)){ ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item d-block rounded text-center h-100 p-4 bg-info" href="about.php?id=<?php echo $row['pro_id']?>">

                    <img class="img-fluid rounded mb-4" src="img/<?php echo $row['pro_img'] ?>" alt="">
                    <h2 class="mb-0"><?php echo $row['pro_price'] ?> KIP</h2>
                    <h5 class="mb-0"><?php echo $row['pro_qty'] ?> Unit</h5>
                    <h4 class="mb-2"><?php echo $row['pro_name'] ?></h4>
                    <button class="btn btn-success">ADD TO CART</button>
                </a>
               
            </div>
        <?php } ?>

            </div>                            
        </div>
    </div>
    
    <!-- Service End -->

   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php  require 'footer.php'?>