<?php 
error_reporting(0);
include "config.php"; ?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nithiya Sizing and Textiles</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header>
            
            <div id="sticky-header" class="header-area header-area-2 header-wrapper transparent-header">
                <div class="header-middle-area black-bg">
                    <div class="container">
                        <div class="full-width-mega-dropdown">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="header-logo header-three">
                                        <a href="index.php">
                                            <img src="images/logo/logo.png" alt="" >
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <nav id="primary-menu">
                                        <ul class="main-menu text-right">
                                            
											<?php
if(isset($_SESSION['aid']))
{
?>
                                            <li><a href="#">Order</a>
											<ul class="dropdown header-top-hover ptb-10">
                                                    <li><a href="concern.php">Concern</a></li>
                                                    <li><a href="order.php">Order Details</a></li>
                                                </ul>
											</li>
                                            <li><a href="#">Sampling</a>
											<ul class="dropdown header-top-hover ptb-10">
                                                    <li><a href="sgoods.php">Sample Goods</a></li>
                                                    <li><a href="order_require.php">Order Requirements</a></li>
                                                </ul>
											</li>
                                            <li><a href="#">Purchase</a>
											<ul class="dropdown header-top-hover ptb-10">
                                                    <li><a href="rawmaterial.php">Rawmaterial</a></li>
                                                    <li><a href="accessories.php">Accessories</a></li>
                                                </ul>
											</li>
											
                                            <li><a href="#">Processing</a>
											<ul class="dropdown header-top-hover ptb-10">
                                                    <li><a href="phase.php">Phase</a></li>
                                                    <li><a href="wastage.php">Wastage</a></li>
                                                </ul>
											</li>

                                            <li><a href="#">Production</a>
											<ul class="dropdown header-top-hover ptb-10">
                                       <li><a href="fgoods.php">Finished Goods</a></li>
                                                </ul>
											</li>
											
<li><a href="#">Warehouse</a>
<ul class="dropdown header-top-hover ptb-10">
<li><a href="transport.php">Transport</a></li>
</ul>
</li>

 <li><a href="#">Shipment</a>
		<ul class="dropdown header-top-hover ptb-10">
               <li><a href="shipment.php">Shipment</a></li>
                  <li><a href="delivery.php">Delivery</a></li>
                                                </ul>
											</li>


<li><a href="#">Billing</a>
<ul class="dropdown header-top-hover ptb-10">
<li><a href="billing.php">Billing</a></li>
</ul>
</li>

<li><a href="#">Sizing</a>
<ul class="dropdown header-top-hover ptb-10">
<li><a href="material.php">Material Details</a></li>
<li><a href="concern1.php">Concern Details</a></li>
<li><a href="schemical.php">Chemical Details</a></li>
<li><a href="supplier.php">Supplier Details</a></li>
<li><a href="warping.php">Processing Phase</a></li>
<li><a href="sfgoods.php">Finished Goods</a></li>
<li><a href="swaste.php">Wastage Goods</a></li>
<li><a href="swarehouse.php">Warehouse Details</a></li>
<li><a href="sship.php">Ship Details</a></li>
<li><a href="sdelivery.php">Delivery Details</a></li>
<li><a href="sbill.php">Billing Details</a></li>
<li><a href="eattendance.php">Attendance Details</a></li>
<li><a href="esalary.php">Salary Details</a></li>
</ul>
</li>





											
																																												
																						
											<li><a href="logout.php">Logout</a></li>
											<?php
}
else
{
?>
<li><a href="admin-login.php">Admin Login</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
<?php
}
?>											
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header area -->
													<?php
if(isset($_SESSION['aid']))
{
?>
<div class="breadcrumbs-area section-padding1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs text-center text-white">
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php
}
else
{
?>
     <!-- Start of slider area -->
        <div class="slider-area section-padding">
            <div id="ensign-nivoslider" class="slides">   
                <img src="images/slider/1-3.jpg" alt="" title="#htmlcaption1"/>
				<img src="images/slider/1-2.jpg" alt="" title="#htmlcaption2"/>
				<img src="images/slider/1-4.jpg" alt="" title="#htmlcaption3"/>
				
            </div>
            <!-- direction 1 -->
            <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-md-offset-7 col-md-7 slider-height">
                            <div class="slide-text">
                                <div class="cap-sub-title cap-main-title wow bounceInUp mb-20 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <h2 class="blktxt"><strong>Organic Products</strong></h2>
                                </div>
                                <div class="cap-sub-title cap-main-title wow bounceInUp mb-10 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="1.5s">
                                    <h2 class="blktxt">Eco Friendly</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- direction 2 -->
            <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-md-offset-7 col-md-7 slider-height">
                            <div class="slide-text">
                                <div class="cap-sub-title cap-main-title wow bounceInDown mb-20 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <h2 class="blktxt"><strong>Azo Free</strong></h2>
                                </div>
                                <div class="cap-sub-title cap-main-title wow bounceInDown mb-10 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="1.5s">
                                    <h2 class="blktxt">Quality Garments</h2>
                                </div>
                                
                                                      
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
			
			<div id="htmlcaption3" class="nivo-html-caption slider-caption-2">
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-md-offset-7 col-md-7 slider-height">
                            <div class="slide-text">
                                <div class="cap-sub-title cap-main-title wow bounceInLeft mb-20 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <h2 class="whttxt"><strong>Organic Products</strong></h2>
                                </div>
                                <div class="cap-sub-title cap-main-title wow bounceInLeft mb-10 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="1.5s">
                                    <h2 class="whttxt">Eco Friendly</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>     
		<!-- End of slider area -->
<?php
}
?>										

   