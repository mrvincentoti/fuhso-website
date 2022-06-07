
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Leavers Gear</title>
    <link href="<?=BASE_URL?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASE_URL?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=BASE_URL?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=BASE_URL?>css/price-range.css" rel="stylesheet">
    <link href="<?=BASE_URL?>css/animate.css" rel="stylesheet">
	<link href="<?=BASE_URL?>css/main.css" rel="stylesheet">
	<link href="<?=BASE_URL?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <!--link rel="shortcut icon" href="<?=BASE_URL?>img/ico/favicon.ico"-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=BASE_URL?>img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=BASE_URL?>img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=BASE_URL?>img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=BASE_URL?>img/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <style>


        #container {
          position: relative;
        }
        
        #product-svg {
          position: relative;
          z-index: 2;
          mix-blend-mode: multiply;
        }
        
        #product-shape {
          /*fill: #3fb0de;*/
        }
        
        #background-image {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: auto;
        }
            </style>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href=""><img src="<?=BASE_URL?>img/hoddies/Screenshot-1.png" alt="" style="width:200px;"/></a>
						</div>
						<div class="btn-group pull-right">
							<!--div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div-->
							
							<!--div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div-->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="">School Leavers Hoddies</a></li>
										<li><a href="">Caps</a></li> 
										<li><a href="">Polos</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="">Login</a></li>
										<li><a href="">Register</a></li>
                                    </ul>
                                </li> 
								<li><a href="">FAQ</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel" style="background: rgb(246, 246, 246);">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<!--li data-target="#slider-carousel" data-slide-to="2"></li-->
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>L</span>EAVERS GEAR</h1>
									<h2>The Original & Best Leavers Hoddie</h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=BASE_URL?>img/hoddies/primary-school-leavers-hoodies.jpg" class="girl img-responsive" alt="" style="height: 400px;"/>
									<!--img src="<?=BASE_URL?>img/home/pricing.png"  class="pricing" alt="" /-->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>L</span>EAVERS GEAR</h1>
									<h2>Smart & Stylish University and Society Hoddies</h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=BASE_URL?>img/hoddies/school-trip-hoodies-tour-logo-map-snowdon-snowdonia.jpg" class="girl img-responsive" alt="" style="height: 400px;"/>
									<!--img src="<?=BASE_URL?>img/home/pricing.png"  class="pricing" alt="" /-->
								</div>
							</div>
							
							<!--div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=BASE_URL?>img/hoddies/sports-team-hoodies-teamwear-logo-embroidered-club-rugby-football.jpg" class="girl img-responsive" alt="" />
									<img src="<?=BASE_URL?>img/home/pricing.png" class="pricing" alt="" />
								</div>
							</div-->
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<!--div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div>
					
						<div class="brands_products">
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div>
						
						<div class="price-range">
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div>
						
						<div class="shipping text-center">
							<img src="<?=BASE_URL?>img/home/shipping.jpg" alt="" />
						</div>
					
					</div>
				</div-->
				<div class="col-sm-12 padding-right">
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">1. Explore Our Hoddie Range</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-md-3 col-sm-3 col-xs-4 hoddies custom-col-3" onClick="getColors('COLL')">
										<div class="product-image-wrapper b">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/college-hoodie-mainphoto.jpg" alt="" />
													<h4>COLLEGE HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-3 col-sm-3 col-xs-4 hoddies" onClick="getColors('RETRO')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/retro-zip-hoodie-mainphoto.jpg" alt="" />
													<h4>RETRO ZIP HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-3 col-sm-3 col-xs-4 hoddies" onClick="getColors('VARSITY')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/varsity-hoodie-mainphoto.jpg" alt="" />
													<h4>VARSITY HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-3 col-sm-3 col-xs-4 hoddies hidden-xs" onClick="getColors('COLLEGE')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/college-sweatshirt-mainphoto.jpg" alt="" />
													<h4>COLLEGE SWEATSHIRT</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-md-3 col-sm-3 col-xs-4 hoddies" onClick="getColors('CHUNKY')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/chunky-zip-hoodie-mainphoto.jpg" alt="" />
													<h4>CHUNKY ZIP HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-4 hoddies" onClick="getColors('CAMPUS')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/campus-hoodie-mainphoto.jpg" alt="" />
													<h4>CAMPUS HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-3 col-sm-3 col-xs-4 hoddies" onClick="getColors('ELECTRIC')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/electric-hoodie-mainphoto.jpg" alt="" />
													<h4>ELECTRIC HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-3 col-sm-3 col-xs-4 hoddies hidden-xs" onClick="getColors('BASEBALL')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/baseball-hoodie-mainphoto.jpg" alt="" />
													<h4>BASEBALL HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
                                <div class="item">
                                    <div class="col-md-3 col-sm-3 col-xs-4 hoddies" onClick="getColors('ZIP')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/zip-hoodie-mainphoto.jpg" alt="" />
													<h4>ZIP HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-3 col-sm-3 col-xs-4 hoddies visible-xs" onClick="getColors('COLLEGE')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/college-sweatshirt-mainphoto.jpg" alt="" />
													<h4>COLLEGE SWEATSHIRT</h4>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-3 col-sm-3 col-xs-4 hoddies visible-xs" onClick="getColors('BASEBALL')">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=BASE_URL?>img/hoddies/baseball-hoodie-mainphoto.jpg" alt="" />
													<h4>BASEBALL HODDIE</h4>
												</div>
											</div>
										</div>
									</div>
                                </div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
				</div>
			</div>
            <div id="basket" class="row mb-2" style="background: rgb(246, 246, 246); padding: 15px; margin-bottom: 5px; border: 2px solid green;">

            </div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>L</span>EAVERS</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=BASE_URL?>img/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=BASE_URL?>img/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=BASE_URL?>img/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=BASE_URL?>img/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?=BASE_URL?>img/home/map.png" alt="" />
							<p>Leavers Gear Address</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Leavers Gear</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Leavers Gear</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 Learvers Gear Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href=""></a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
    <script src="<?=BASE_URL?>js/jquery.js"></script>
	<script src="<?=BASE_URL?>js/bootstrap.min.js"></script>
	<script src="<?=BASE_URL?>js/jquery.scrollUp.min.js"></script>
	<script src="<?=BASE_URL?>js/price-range.js"></script>
    <script src="<?=BASE_URL?>js/jquery.prettyPhoto.js"></script>
    <script src="<?=BASE_URL?>js/main.js"></script>
    <script>
        $(".hoddies").click(function () {
            $('.custom-col-3').removeClass('custom-col-3');
            $(this).addClass('custom-col-3');
            $('.b').removeClass('b');
            $(this).find('div:first').addClass('b');
        });

        function getColors(cat){
            console.log(cat);
            $.ajax({
                url: '<?=BASE_URL?>get-colors/'+cat,
                method: 'GET',
                dataType: 'text',
                success: function(response) {
                    //console.log(response);return;
                    document.getElementById("basket").innerHTML = "";
                    document.getElementById("basket").innerHTML = response;
                }
            });
        }

        $( document ).ready(function() {
            getColors("COLL");
        });
    </script>
</body>
</html>