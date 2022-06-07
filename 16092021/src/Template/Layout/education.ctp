<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Federal University Of Health Sciences Otukpo · Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
  <?=
    $this->Html->css([
      'bootstrap.min','normalize','font-awesome.min','icomoon','animate','prettyPhoto','owl.carousel','owl.theme.default',
      'transitions','main','color','responsive'
    ])

  ?>
  <?= $this->fetch('css') ?>
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-home tg-homeone">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="tg-leftbox">
					<span id="tg-datebox" class="tg-datebox"></span>
					<span class="tg-rtltextbox"><em>FUHSO</em> <a href="#">Contact Us</a></span>
				</div>
				<div class="tg-rightbox">
					<span class="tg-tollfree">Toll Free: 0800-123-456</span>
					<!--div class="tg-themedropdown tg-languagesdropdown">
						<a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span><img src="images/flags/img-01.jpg" alt="image description"></span>
							<span>Eng</span>
						</a>
						<div class="tg-themedropdownbox" aria-labelledby="tg-languages">
							<ul class="tg-languageslist">
								<li>
									<span><img src="images/flags/img-02.jpg" alt="image description"></span>
									<span>Eng</span>
								</li>
								<li>
									<span><img src="images/flags/img-03.jpg" alt="image description"></span>
									<span>Eng</span>
								</li>
								<li>
									<span><img src="images/flags/img-04.jpg" alt="image description"></span>
									<span>Eng</span>
								</li>
							</ul>
						</div>
					</div-->
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-logoandnoticeboard">
							<strong class="tg-logo">
                <a href="./sample-1">
                  <!--img src="images/logo.png" alt="University of Education and knowledge"-->
                  <?=$this->Html->image('logo.jpg',['style'=>'width: 70px; margin-bottom: 1px;','alt'=>'Federal University Of Health Sciences Otukpo'])?>
                  <span class="logo-text">FEDERAL UNIVERSITY OF HEALTH SCIENCES OTUKPO</span>
                </a>
              </strong>
							<div class="tg-noticeboard hidden-xs">
								<div class="tg-textbox">
									<span>Application Open!</span>
									<span>Last Date For Application 27-Sept-2021</span>
								</div>
								<figure>
                  <!--img src="images/img-01.jpg" alt="image description"-->
                  <?=$this->Html->image('img-01.jpg',['alt'=>'Federal University Of Health Sciences Otukpo'])?>
                </figure>
							</div>
						</div>
						<div class="tg-navigationarea">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="current-menu-item">
											<a href="javascript:void(0);">Home</a>
                    </li>
                    <li><a href="">About Us</a></li>
                    <li class="menu-item-has-children">
											<a href="">Faculties & Departments</a>
											<ul class="sub-menu">
												<li><a href="">Faculties</a></li>
												<li><a href="">Departments</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Application</a>
											<ul class="sub-menu">
												<li><a href="">Requirements</a></li>
												<li><a href="">Apply Now</a></li>
											</ul>
										</li>
									
										<!--li><a href="campuses.html">Campuses</a></li-->
										<li>
											<a href="javascript:void(0);">Contact us</a>
										</li>
		
									</ul>
								</div>
							</nav>
							<!--div class="tg-searchbox">
								<a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
								<form class="tg-formtheme tg-formsearch">
									<fieldset><input type="search" name="search" class="form-control" placeholder="Start Your Search Here"></fieldset>
								</form>
							</div-->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
			<?= $this->render('content') ?>
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-signupbox">
				<div class="container">
					
					<form class="tg-formtheme tg-formsignupfree">
						<fieldset>
						
						</fieldset>
					</form>
				</div>
			</div>
			<div class="tg-footermiddlebar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgetcompanyinfo">
								<div class="tg-widgetcontent">
									<strong class="tg-logo"><a href="index-2.html"><img src="img/logo.jpg" style="max-width: 50px;" alt="image description"></a></strong>
									<div class="tg-description">
										<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
									</div>
									<ul class="tg-infolist">
										<li>
											<i class="icon-location"></i>
											<address>Abc, xyz street Nigeria, HG521A</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>0800 - 1234 - 562 - 6</span>
										</li>
										<li>
											<i class="icon-printer"></i>
											<span>+4 1234 567 - 9</span>
										</li>
										<li>
											<a href="mailto:query@domain.com">
												<i class="icon-envelope"></i>
												<span>query@domain.com</span>
											</a>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgettweets">
								<div class="tg-widgettitle">
									<h3>Latest Tweets</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>
											<p>Sed ut perspiciatis unde omnis isteat natus error sit voluptatem</p>
											<span><a href="mailto:http://www.domainurl.com">http://www.domainurl.com</a></span>
											<time datetime="2017-01-01">2 hours ago</time>
										</li>
										<li>
											<p>Sed ut perspiciatis unde omnis isteat natus error sit voluptatem</p>
											<span><a href="mailto:http://www.domainurl.com">http://www.domainurl.com</a></span>
											<time datetime="2017-01-01">3 hours ago</time>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
							<div class="tg-widget tg-widgetcoursecategories">
								<div class="tg-widgettitle">
									<h3>Courses</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li><a href="javascript:void(0);">Anatomy</a></li>
										<li><a href="javascript:void(0);">Nursing Science</a></li>
										<li><a href="javascript:void(0);">Biotech</a></li>
										<li><a href="javascript:void(0);">Food & Nutrition</a></li>
										<li><a href="javascript:void(0);">Medical Lab. Sciences</a></li>
										<li><a href="javascript:void(0);">Animal Health</a></li>
										<!--li><a href="javascript:void(0);">Duis aute</a></li>
										<li><a href="javascript:void(0);">Aincididunt</a></li>
										<li><a href="javascript:void(0);">Alter veritatis</a></li>
										<li><a href="javascript:void(0);">Tempora Incid</a></li>
										<li><a href="javascript:void(0);">Dolore Magnam</a></li>
										<li><a href="javascript:void(0);">Aliquam Quaerat</a></li>
										<li><a href="javascript:void(0);">Quisquam</a></li>
										<li><a href="javascript:void(0);">Voluptatem</a></li>
										<li><a href="javascript:void(0);">Aliquip</a></li>
										<li><a href="javascript:void(0);">Adipisicing</a></li-->
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgetflickrgallery">
								<div class="tg-widgettitle">
									<h3>Gallery</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-10.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-11.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-12.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-13.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-14.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-15.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-16.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-17.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-18.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-19.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-20.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/glance/img-21.jpg" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
							<nav class="tg-addnav">
								<ul>
									<li><a href="javascript:void(0);">Privacy Policy</a></li>
									<li><a href="javascript:void(0);">Term and Conditions</a></li>
									<li><a href="javascript:void(0);">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	
  <?=
    $this->Html->script([
        'vendor/jquery-library','vendor/bootstrap.min','mapclustering/data.json'
    ])
  ?>
  <?= $this->fetch('script') ?>
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
  <?=
    $this->Html->script([
        'mapclustering/markerclusterer.min','mapclustering/infobox',
        'mapclustering/map','owl.carousel.min','isotope.pkgd','prettyPhoto',
        'countdown','collapse','moment','gmap3','main'
    ])
  ?>
  <?= $this->fetch('script') ?>
</body>


</html>