<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Federal University Of Health Sciences Otukpo ¸ô Home</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <!--====== Slick css ======-->
  


  <?=
    $this->Html->css([
      'slick','animate','magnific-popup',
      'bootstrap.min','font-awesome.min','default',
      'style','responsive','custom','bootstrap-datepicker','daterangepicker'
    ])

  ?>
  <?= $this->fetch('css') ?>
  
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/-->
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="<?=BASE_URL?>img/all-icon/map.png" alt="icon"><span>Akwete-Akpa,Otukpo LGA, Benue State</span></li>
                                <li><img src="<?=BASE_URL?>img/all-icon/email.png" alt="icon"><span>info@fuhso.ng</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Opening Hours : Monday to Friday - 8am to 5pm</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="logo">
                            <a href="<?=BASE_URL?>">
                                <!--img src="img/logo.jpg" alt="Logo"-->
                                 <?=$this->Html->image('logo.jpg',['style'=>'width: 120px; margin-bottom: 1px;','alt'=>'Federal University Of Health Sciences Otukpo'])?>
                                 <span class="logo-text">FEDERAL UNIVERSITY OF HEALTH SCIENCES OTUKPO</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="support-button float-right d-none d-md-block" style="margin-top: 25px;">
                            <div class="support float-left">
                                <div class="icon">
                                    <?=$this->Html->image('all-icon/support.png',['alt'=>'Federal University Of Health Sciences Otukpo'])?>
                                </div>
                                <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>+23480 325 5678</span>
                                </div>
                            </div>
                            <div class="button float-left">
                                <a href="<?=BASE_URL?>apply" class="main-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="<?php if($pageTile == 'home'){echo 'active';}?>" href="<?=BASE_URL?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?php if($pageTile == 'about'){echo 'active';}?>" href="<?=BASE_URL?>about-us">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?php if($pageTile == 'department'){echo 'active';}?>" href="<?=BASE_URL?>departments">Faculties & Departments</a>
                                        <!--ul class="sub-menu">
                                            <li><a href="">Faculties</a></li>
                                            <li><a href="">Departments</a></li>
                                        </ul-->
                                    </li>
                                    <!--li class="nav-item">
                                        <a href="<?=BASE_URL?>application">Application</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?=BASE_URL?>requirements">Requirements</a></li>
                                            <li><a href="<?=BASE_URL?>application">Apply Now</a></li>
                                        </ul>
                                    </li-->
                                    <li class="nav-item">
                                        <a class="<?php if($pageTile == 'apply'){echo 'active';}?>" href="<?=BASE_URL?>apply">Application</a>
                                        <!--ul class="sub-menu">
                                            <li><a href="<?=BASE_URL?>requirements">Requirements</a></li>
                                            <li><a href="<?=BASE_URL?>application">Apply Now</a></li>
                                        </ul-->
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?php if($pageTile == 'news'){echo 'active';}?>" href="<?=BASE_URL?>all-events">News & Events</a>
                                    </li>
                                    <!--li class="nav-item">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-singel.html">Blog Singel</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-singel.html">Shop Singel</a></li>
                                        </ul>
                                    </li-->
                                    <li class="nav-item">
                                        <a class="<?php if($pageTile == 'contact'){echo 'active';}?>" href="<?=BASE_URL?>contact-us">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <!--div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                            </ul>
                        </div> 
                    </div-->
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    	<?= $this->fetch('content') ?>
   
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo" style="color: #ffffff;">
                                <!--a href="#"><img src="img/logo-2.png" alt="Logo"></a-->
                                FUHSO
                            </div>
							<p>The Federal University of Health Sciences, Otukpo is a world class specialized University that will train and produce high quality healthcare
                         professionals that will contribute to the development of the health sector in Nigeria..<a href="<?=BASE_URL?>about-us">Read More</a></p>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="<?=BASE_URL?>"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="<?=BASE_URL?>about-us"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="<?=BASE_URL?>departments"><i class="fa fa-angle-right"></i>Faculties</a></li>
                                <li><a href="<?=BASE_URL?>apply"><i class="fa fa-angle-right"></i>Application</a></li>
                                <li><a href="<?=BASE_URL?>all-events"><i class="fa fa-angle-right"></i>News & Events</a></li>
                            </ul>
                            <ul>
                                <!--li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Shop</a></li>
                                <li><a href="teachers.html"><i class="fa fa-angle-right"></i>Teachers</a></li-->
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="<?=BASE_URL?>contact-us"><i class="fa fa-angle-right"></i>Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Akwete-Akpa,Otukpo LGA, Benue State</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+234 123 456 789</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@fuhso.ng</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p><a target="_blank" href="">Federal University Of Health Sciences Otukpo</a> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                           
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    


    <?=
      $this->Html->script([
          'vendor/modernizr-3.6.0.min','vendor/jquery-1.12.4.min','bootstrap.min',
          'slick.min','jquery.magnific-popup.min','waypoints.min',
          'validator.min','main','bootstrap-datepicker.min','daterangepicker','custom'
      ])
    ?>
    <?= $this->fetch('script') ?>

    <!--script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script-->
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<script>

$(document).ready(function(){

function Validate(){
    console.log("validation");
}
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){
    
    //console.log($('input,textarea,select').filter('[required]'));return;
    var allInp = $(this).parent().find('input,textarea,select').filter('[required]');
    //console.log(allInp.length);
    allInp.each(function (i, el) {
        if($(el).val() == ''){
            $(el).removeClass( "cool" ).addClass( "error" );
        }else{
            //$(el).addClass('cool');
            $(el).removeClass( "error" ).addClass( "cool" );
        }
    });

    var errorLength = $(this).parent().find('input,textarea,select').filter('.error');
    console.log(errorLength.length);
    if(errorLength.length > 0){
        return;
    }
   
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
        },
        duration: 600
    });
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
});

$('#addQualificationx').click(function(){
    // Selecting last id 
    //var lastname_id = $('.newRow input[type=text]:nth-child(1)').last().attr('id');
    var select_id = $('.newRow :nth-child(1)').find('select').last().attr('id');
    var split_id = select_id.split('-');
    // New index
    var index = Number(split_id[1]) + 1;

   
    var newel = $('.newRow:last').clone(true);

    // Set id of new element
    //console.log($('.newRow:last:nth-child(1)').find('select'));
    //console.log($('.newRow:last:nth-child(2)').find('select'));

    $('.newRow:last:nth-child(1)').find('select').attr("id","state-"+index);
    $('.newRow:last:nth-child(2)').find('select').attr("id","lga-"+index);


    $(newel).insertAfter(".newRow:last");
});

$('#addQualificationy').click(function(){
    // Selecting last id 
    var lastname_id = $('.newRow input[type=text]:nth-child(1)').last().attr('id');
    //console.log(lastname_id);return;
    //var select_id = $('.newRow :nth-child(1)').find('select').last().attr('id');
    var split_id = lastname_id.split('-');
    // New index
    var index = Number(split_id[1]) + 1;

   
    var newel = $('.newRow:last').clone(true);

    // Set id of new element
    //console.log($('.newRow:last:nth-child(1)').find('select'));
    //console.log($('.newRow:last:nth-child(2)').find('select'));

    //$('.newRow:last:nth-child(1)').find('text').attr("id","state-"+index);
    $('.newRow input[type=text]:nth-child(1)').attr("id","qualificationname-"+index);
    $('.newRow:last:nth-child(2)').find('select').attr("id","qualificationyear-"+index);


    $(newel).insertAfter(".newRow:last");
});

$('#addQualification').click(function(){
    var lastname_id = $('.newRow input[type=text]:nth-child(1)').last().attr('id');
    var split_id = lastname_id.split('-');
    var index = Number(split_id[1]) + 1;
    var row = $('.newRow:last').clone(true);
    $('.newRow input[type=text]:nth-child(1)').attr("id","qualificationname-"+index);
    $('.newRow:last:nth-child(2)').find('select').attr("id","qualificationyear-"+index);
    
    if($('.removeNode').length){

    }else{
        row.append('<button type="button" class="btn btn-danger removeNode"><i class="fa fa-trash"></i></button>');
    }
   
    
    $('.rssRowContainer').append(row);
});
$(document).on('click', '.removeNode', function() {
    // This will work!
    $(this).closest('.newRow').remove();
});


$('#addExperience').click(function(){
    var lastname_id = $('.newExp input[type=text]:nth-child(1)').last().attr('id');
    var split_id = lastname_id.split('-');
    var index = Number(split_id[1]) + 1;
    //console.log(lastname_id);return;
    var row = $('.newExp:last').clone(true);
    $('.newExp input[type=text]:nth-child(1)').attr("id","experiencename-"+index);
    $('.newExp:last:nth-child(2)').find('select').attr("id","experienceyear-"+index);

    if($('.removeExp').length){

    }else{
        row.append('<button type="button" class="btn btn-danger removeExp"><i class="fa fa-trash"></i></button>');
    }

    $('.expRowContainer').append(row);
});
$(document).on('click', '.removeExp', function() {
    // This will work!
    $(this).closest('.newExp').remove();
});


$('#addPublication').click(function(){
    var lastname_id = $('.newPub:nth-child(1)').find('select').first().attr('id');
    var split_id = lastname_id.split('-');
    var index = Number(split_id[1]) + 1;
    var row = $('.newPub:last').clone(true);

    //console.log($('.newPub').children("select.first"));
    //console.log();
    //console.log($('.newPub').children().children().find('select')[1]);
    //console.log($('.newPub').find('select')[1]);
   
    $('.newPub:nth-child(1)').find('select').attr("id","publicationcategory-"+index);
    $('.newPub:nth-child(2)').find('select').attr("id","publicationtype-"+index);
    $('.newPub input[type=text]:nth-child(1)').attr("id","publicationnumber-"+index);
    if($('.removePub').length){

    }else{
        row.append('<button type="button" class="btn btn-danger removePub"><i class="fa fa-trash"></i></button>');
    }
    $('.pubRowContainer').append(row);
    
});
$(document).on('click', '.removePub', function() {
    // This will work!
    $(this).closest('.newPub').remove();
});

$('#addReference').click(function(){
    var lastname_id = $('.newRef input[type=text]:nth-child(1)').last().attr('id');
    var split_id = lastname_id.split('-');
    var index = Number(split_id[1]) + 1;
    var row = $('.newRef:last').clone(true);
    if($('.removeRef').length){

    }else{
        row.append('<button type="button" class="btn btn-danger removeRef"><i class="fa fa-trash"></i></button>');
    }
    $('.refRowContainer').append(row);
});
$(document).on('click', '.removeRef', function() {
    // This will work!
    $(this).closest('.newRef').remove();
});

    

});


</script>

</body>

</html>
