<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>RFM Interactive Online ORdering System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="menu.php"> Menu <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Signup</a> </li>';
							}
						else
							{
									//if user is login
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your orders</a> </li>';
									echo  '<li class="nav-item"><a href="Logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- banner part starts -->
        <section class="hero bg-image" data-image-src="images/img/black.jpg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1> Place an Order & Check out </h1>
                    <h5 class="font-white space-xs"> <b> "Let food be thy medicine and medicine be thy food." </b> </h5>

                    <div class="step-item step">
                            <h4><span>1. </span> <b> Choose Food </b> </h4> </div>
                        <div class="step-item step">
                            <h4><span>2. </span> <b> Add to Cart</b> </h4> </div>
                        <div class="step-item step">
                            <h4><span>3. </span> <b> Check Out </b> </h4> </div>
                    </div>
                </div>

        </section>

        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Popular Dishes</h2>
                    <p class="lead">The easiest way to your favourite food</p>
                </div>
                <div class="row">
                
                
                
                        <?php 
                        // fetch records from database to display popular first 3 dishes from table
                        $query_res= mysqli_query($db,"select * from dishes LIMIT 3"); 
                                          while($r=mysqli_fetch_array($query_res))
                                          {
                                                    
                                               echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                                        <div class="food-item-wrap">
                                                            <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'">

                                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="review pull-right"><a href="#">3 reviews</a> </div> 
                                                            </div>
                                                            <div class="content">
                                                                <h5><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
                                                                <div class="product-name">'.$r['slogan'].'</div>
                                                                <div class="price-btn-block"> <span class="price">Php'.$r['price'].'</span> <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                                            </div>
                                                            
                                                        </div>
                                                </div>';
                                                    
                                          }
                        
                        
                        ?>
                
                
                
                
                  
                    
                    
                    
                    
                    
                    
                 
                </div>
            </div>
        </section>
      
	



        <!-- Popular block ends -->
        <!-- How it works block starts -->
        <section class="how-it-works">
            <div class="container">
                <div class="text-xs-center">
                    <h2>Easy 3 Step Order</h2>
                    <!-- 3 block sections starts -->
                    <div class="row how-it-works-solution">

                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                            <div class="how-it-works-wrap">
                                <div class="step step">
                                    <h3>Choose Menu</h3>
                                    <p>Its either Dessert, Sandwich, Coffee or Vegetables.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                            <div class="step step">
                                <h3>Choose a tasty dish</h3>
                                <p>We"ve got you covered with menus.</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                            <div class="step step">
                                <h3>Pick up or Delivery</h3>
                                <p>Get your food delivered! And enjoy your meal! Pay on Cash on Delivery</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3 block sections ends -->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p class="pay-info">Pay by Cash on delivery</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it works block ends -->
       
        <!-- start: FOOTER -->
        <footer class="footer">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                         <span>Order Now!! </span> </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">About us</a> </li>
                            <li><a href="#">History</a> </li>
                            <li><a href="#">Our Team</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>How it Works</h5>
                        <ul>
                            <li><a href="#">Enter your location</a> </li>
                            <li><a href="#">Choose restaurant</a> </li>
                            <li><a href="#">Choose meal</a> </li>
                            <li><a href="#">Pay via Cash On Delivery</a> </li>
                            <li><a href="#">Wait for delivery</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5>Pages</h5>
                        <ul>
                            <li><a href="#">Search results page</a> </li>
                            <li><a href="#">User Sing Up Page</a> </li>
                            <li><a href="#">Pricing page</a> </li>
                            <li><a href="#">Make order</a> </li>
                            <li><a href="#">Add to cart</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Popular locations</h5>
                        <ul>
                            <li><a href="#">San Jose</a> </li>
                            <li><a href="#">Poblacion</a> </li>
                            <li><a href="#">Balintawak</a> </li>
                            <li><a href="#">San Isidro</a> </li>
                            <li><a href="#">San Francisco</a> </li>
                            <li><a href="#">Eskineta</a> </li>
                            <li><a href="#">Lupa</a> </li>
                            <li><a href="#">San Pedro</a> </li>
                            <li><a href="#">Santo Niño</a> </li>
                            <li><a href="#">San Carlos</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                            <p> <b> CASH ON DELIVERY </p>

                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <h5>Address</h5>
                            <p>Concept design of oline food order and delivery,planned as restaurant directory</p>
                            <h5>Phone: <a href="tel:+9463862526">09463862526</a></h5> </div>
                        <div class="col-xs-12 col-sm-5 additional-info color-gray">
                            <h5>Addition informations</h5>
                            <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff</p>
                        </div>
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>