<?php
session_start();
include 'conn.php';
include 'function.php';

?>

<!doctype html>
<html>   
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>GoalGist</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
		
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    </head>
    <style>
        .sd {
            margin-top: 1px;
        }
       
        
    </style>
    <body>
<?php
    include "header.php";
?>
       
       

        <div class="row">
            <!-- slider-area start -->
            <section class="slider-area pos-relative" >
                <div class="slider-active">
                    <div class="single-slider slide-1-style slide-height-2 slide-height-4 d-flex align-items-center" data-background="img/slider/3.jpg">
                        <div class="shape-title shape-title-4 bounce-animate">
                            <h2>2024</h2>
                        </div>
                        <div class="shape-icon shape-icon-4 bounce-animate">
                            <img src="img/slider/shape-icon-2.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12" >
                                    <div class="slide-content slide-content-4 text-center pt-40">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">New Arrival</h1>
                                        <div class="slide-btn">
                                            <a class="btn theme-btn" href="cart.php" data-animation="fadeInLeft" data-delay=".6s">shop now</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slide-1-style slide-height-2 slide-height-4 d-flex align-items-center" data-background="img/slider/2.jpg">
                        <div class="shape-title shape-title-4 bounce-animate">
                            <h2>2024</h2>
                        </div>
                        <div class="shape-icon shape-icon-4 bounce-animate">
                            <img src="img/slider/shape-icon-2.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="slide-content slide-content-4 text-center pt-40">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Soccer Collection</h1>
                                        <div class="slide-btn">
                                            <a class="btn theme-btn" href="cart.php" data-animation="fadeInLeft" data-delay=".6s">shop now</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slide-1-style slide-height-2 slide-height-4 d-flex align-items-center" data-background="img/slider/4.jpg">
                        <div class="shape-title shape-title-4 bounce-animate">
                            <h2>2024</h2>
                        </div>
                        <div class="shape-icon shape-icon-4 bounce-animate">
                            <img src="img/slider/shape-icon-2.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="slide-content slide-content-4 text-center pt-40">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Accessories</h1>
                                        <div class="slide-btn">
                                            <a class="btn theme-btn" href="cart.php" data-animation="fadeInLeft" data-delay=".6s">shop now</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
        


            <!-- product-area start -->
            <section class="product-area box-90 pt-70 pb-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12">
                            <div class="area-title mb-50">
                                <h2>Brand New Products</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                        </div>
                       <!-- <div class="col-xl-7 col-lg-12">
                            <div class="product-tab mb-40">
                                <ul class="nav product-nav  justify-content-xl-end" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                            aria-selected="true">t-Shirt</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                            aria-selected="false">Jeants</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                            aria-selected="false">huddy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact"
                                            aria-selected="false">pent</a>
                                    </li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product-tab-content">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="product-slider owl-carousel">




                                        
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/box1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/box2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                           
                                                        </div>
                                                        <div class="sale-tag">
                                                            
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="cart.php"></a>
                                                            <a href="cart.phpl"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Boxing</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/soccer1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/soccer2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="sale-tag">
                                                            
                                                            <span class="sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="cart.php"> </a>
                                                            <a href="cart.php"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Soccer</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>









                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/golf1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/golf2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="sale-tag">
                                                            
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="cart.php"> </a>
                                                            <a href="cart.php"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Golf</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/basketball1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/basketball2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="sale-tag">
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.html"> </a>
                                                            <a href="shop.html"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Basketball</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/swim1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/swim2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="sale-tag">
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="cart.php"> </a>
                                                            <a href="cart.php"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Swimming</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>


                                                
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/baseball1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/baseball2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                            </a>
                                                        </div>
                                                        <div class="sale-tag">
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.html"></a>
                                                            <a href="shop.html"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Baseball</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/tennis1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/tennis2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="sale-tag">
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="cart.php"> </a>
                                                            <a href="cart.php"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Tennis</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/ttenis1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/ttenis2.jpeg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="sale-tag">
                                                            
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="cart.php"></a>
                                                            <a href="cart.php"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Table Tennis</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/badton1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/badton2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="sale-tag">
                                                            
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="cart.php"> </a>
                                                            <a href="cart.php"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Badminton</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.html">
                                                            <img src="img/product/archery1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/archery2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action text-center">
                                                            <a href="product.php" title="Shoppingb Cart">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="sale-tag">
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="cart.php"> </a>
                                                            <a href="cart.php"></a>
                                                        </div>
                                                        <h4>
                                                            <a href="product.php">Archery</a>
                                                        </h4>
                                                        <div class="product-meta">
                                                            <div class="pro-price">
                                                                <span></span>
                                                                <span class="old-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-wishlist">
                                                            <a href="feedback.php"><i class="far fa-heart" title="Wishlist"></i></a>
                                                        </div>
                                                    </div>
                                                </div>





                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-area end -->
            

            <!-- features-area start -->
            <section class="features-area box-90">
                <div class="container-fluid">
                    <div class="theme-soft-bg fix pt-100 pb-50">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="area-title text-center mb-50">
                                    <h2>Special Features</h2>
                                    <p>Get special services from our shop.</p>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="single-seatures width-20 mb-50 text-center">
                                <i class="flaticon-shopping-cart-1"></i>
                                <span>Free Delivery</span>
                                <h3>Free Delivery</h3>
                            </div>
                            <div class="single-seatures width-20 mb-50 text-center">
                                <i class="flaticon-good"></i>
                                <span>100% Customer</span>
                                <h3>Feedbacks</h3>
                            </div>
                            <div class="single-seatures width-20 mb-50 text-center">
                                <i class="flaticon-return-1"></i>
                                <span>10 Days</span>
                                <h3>For Free Return</h3>
                            </div>
                            <div class="single-seatures width-20 mb-50 text-center">
                                <i class="flaticon-return"></i>
                                <span>Payment</span>
                                <h3>Secure System</h3>
                            </div>
                            <div class="single-seatures width-20 mb-50 text-center">
                                <i class="flaticon-customer-service"></i>
                                <span>24/7</span>
                                <h3>Online Supports</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area end -->


        

		<!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.final-countdown.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <a id="scrollUp" href="#top" style="position:fixed; z-idex:2147483647; display:block;"><i class="fas fa-arrow-up"></i></a>

<div>
    <br><br><br>
<?php include 'footer.php' ?>
</div>      
        
    </body>

</html>
