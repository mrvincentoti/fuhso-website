<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Theme Starz">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/vanillabox/vanillabox.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"> -->
    <?=
        $this->Html->css([
        'font-awesome','bootstrap/css/bootstrap','selectize','owl.carousel','vanillabox/vanillabox',
        'style'
        ])

    ?>
  <?= $this->fetch('css') ?>

    <title>FUHSO - Federal University Of Health Sciences Otukpo</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

</head>

<body class="page-sub-page page-microsite">
<!-- Wrapper -->
<div class="container">
    <div class="wrapper">
        <!-- Header -->
        <div class="navigation-wrapper">
            <div class="secondary-navigation-wrapper">
                <div class="container">
                    <div class="navigation-contact pull-left">Call Us:  <span class="opacity-70">+23480 3256 678</span></div>
                    <!-- <div class="search">
                        <div class="input-group">
                            <input type="search" class="form-control" name="search" placeholder="Search">
                            <span class="input-group-btn"><button type="submit" id="search-submit" class="btn"><i class="fa fa-search"></i></button></span>
                        </div>
                    </div> -->
                    <ul class="secondary-navigation list-unstyled">
                        <li><a href="#">Prospective Students</a></li>
                        <li><a href="#">Current Students</a></li>
                        <li><a href="#">Faculty & Staff</a></li>
                        <li><a href="#">Alumni</a></li>
                    </ul>
                </div>
            </div><!-- /.secondary-navigation -->

            <div class="branding">
                <div class="container">
                    <div class="navbar-brand nav" id="brand" style="padding: 0px;">
                        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="brand"></a> -->
			<?php
                        echo $this->Html->image('logo.jpg', array('height' => '85', 'width' => '85','margin-bottom'=>'50','url' => array(
                            'controller' => 'pages', 
                            'action' => 'landing'
                        )));
			?>
                        <span style="color: #320159 !important; font-weight: bold;">FEDERAL UNIVERSITY OF HEALTH SCIENCES OTUKPO</span>
                    </div>
                    <div class="search pull-right">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.pull-right -->
                </div>
            </div>

            <div class="primary-navigation-wrapper">
                <header class="navbar" id="top" role="banner">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-left" role="navigation">
                            <ul class="nav navbar-nav">
                                <li class="<?= $pageTitle == 'home' ? 'active' : ''?>">
                                    <a href="<?=BASE_URL?>">Home</a>
                                </li>
                                <li class="">
                                    <a href="#" class="has-child no-link">Who We Are</a>
                                    <ul class="list-unstyled child-navigation">
                                        <li><a href="<?=BASE_URL?>/about-fuhso">About Us</a></li>
 					<li><a href="<?=BASE_URL?>/council-members">Council Members</a></li>
                                        <li><a href="<?=BASE_URL?>/principal-officers">Principal Officers</a></li>
                                        <li><a href="<?=BASE_URL?>/vice-chancellor">About the VC</a></li>
                                    </ul>
                                </li>
                                <li class="<?= $pageTitle == 'faculties' ? 'active' : ''?>">
                                    <a href="<?=BASE_URL?>/faculties-and-departments">Faculties & Departments</a>
                                </li>
                                <li class="<?= $pageTitle == 'news' ? 'active' : ''?>">
                                    <a href="<?=BASE_URL?>/news-and-events">News & Events</a>
                                </li>
                                <li class="<?= $pageTitle == 'news' ? 'active' : ''?>">
                                    <a href="https://portal.fuhso.edu.ng/"target="_blank">Student Portal</a>
                                </li>
                                <li class="<?= $pageTitle == 'faq' ? 'active' : ''?>">
                                    <a href="<?=BASE_URL?>/asked-questions">FAQ</a>
                                </li>
                                <li>
                                    <a href="<?=BASE_URL?>/contact">Contact Us</a>
                                </li>
                            </ul>
                        </nav><!-- /.navbar collapse-->
                        <div class="social">
                            <div class="icons">
                                <a href="https://twitter.com/FUHSOinfo" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/Federal-University-of-Health-Sciences-Otukpo-Nigeria-103250555632899/?ref=pages_you_manage&_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-youtube-play"></i></a>
                            </div><!-- /.icons -->
                        </div>
                    </div><!-- /.container -->
                </header><!-- /.navbar -->
            </div><!-- /.primary-navigation -->
        </div>
        <!-- end Header -->
        <?= $this->fetch('content') ?>
        <!-- Footer -->
        <footer id="page-footer">
            <section id="footer-top" class="footer-top">
                <div class="container">
                    <div class="footer-inner">
                        <div class="footer-social">
                            <figure>Follow us:</figure>
                            <div class="icons">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-pinterest"></i></a>
                                <a href=""><i class="fa fa-youtube-play"></i></a>
                            </div><!-- /.icons -->
                        </div><!-- /.social -->
                        <div class="search pull-right">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </span>
                            </div><!-- /input-group -->
                        </div><!-- /.pull-right -->
                    </div><!-- /.footer-inner -->
                </div><!-- /.container -->
            </section><!-- /#footer-top -->

            <section id="footer-content" style="background-color: #012951;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <aside class="logo">
                                <img src="<?=BASE_URL?>/img/logo.jpg" class="vertical-center" style="width: 100px;">
                            </aside>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-4">
                            <aside>
                                <header><h4>Contact Us</h4></header>
                                <address>
                                    <strong>Federal University Of Health Sciences</strong>
                                    <br>
                                    <span>Akwete-Akpa</span>
                                    <br><br>
                                    <span>Otukpo LGA, Benue State</span>
                                    <br>
                                    <abbr title="Telephone">Telephone:</abbr> +234 123 456 789
                                    <br>
                                    <abbr title="Email">Email:</abbr> <a href="#">info@fuhso.edu.ng</a>
                                </address>
                            </aside>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-4">
                            <aside>
                                <header><h4>Important Links</h4></header>
                                <ul class="list-links">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Faculties</a></li>
                                    <li><a href="#">News & Events</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li><a href="#">Research</a></li>
                                </ul>
                            </aside>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-4">
                            <aside>
                                <header><h4>About FUHSO</h4></header>
                                <p>
                                    The Federal University of Health Sciences, Otukpo is a world class specialized University that will train and produce high quality healthcare professionals that will contribute to the development of the health sector in Nigeria, and the University will be equipped with state of the art equipment for research and teaching. It will be the first of...
                                </p>
                                <div>
                                    <a href="" class="read-more">All News</a>
                                </div>
                            </aside>
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
                <div class="background"><img src="assets/img/background-city.png" class="" alt=""></div>
            </section><!-- /#footer-content -->

            <section id="footer-bottom">
                <div class="container">
                    <div class="footer-inner">
                        <div class="copyright">© FUHSO, All rights reserved</div><!-- /.copyright -->
                    </div><!-- /.footer-inner -->
                </div><!-- /.container -->
            </section><!-- /#footer-bottom -->

        </footer>
        <!-- end Footer -->

    </div>
    <!-- end Wrapper -->
</div>
<!-- 
<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/selectize.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script> -->

    <?=
      $this->Html->script([
          'jquery-2.1.0.min','jquery-migrate-1.2.1.min','bootstrap/js/bootstrap.min.js',
          'selectize.min','owl.carousel.min','jquery.validate.min','jquery.placeholder',
          'jQuery.equalHeights','icheck.min','jquery.vanillabox-0.1.5.min','retina-1.1.0.min','custom'
      ])
    ?>
    <?= $this->fetch('script') ?>

</body>
</html>