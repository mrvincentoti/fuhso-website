    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== SLIDER PART START ======-->
    
    <?=$this->element('banner')?>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== CATEGORY PART START ======-->
    
    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>General information & News</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="<?=BASE_URL?>about-us/">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="img/all-icon/ctg-1.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>About</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?=BASE_URL?>apply/">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="img/all-icon/ctg-2.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Application</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?=BASE_URL?>departments/">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="img/all-icon/ctg-3.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Courses</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                           
                            
                            <div class="col-lg-4">
                                <a href="<?=BASE_URL?>all-events">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="img/all-icon/ctg-3.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>News & Events</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to  </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>The Federal University of Health Sciences, Otukpo is a world class specialized University that will train and produce high quality healthcare
                         professionals that will contribute to the development of the health sector in Nigeria, 
                         and the University will be equipped with state of the art equipment for research and teaching. 
                         It will be the first of its kind to be established by the Federal Government after realizing that the number of healthcare professionals in the country is grossly inadequate for the populace. 
                         It has been estimated that it will take the country 120 years to produce the number of doctors required to meet the needs of the nation based on the available universities offering medicine in Nigeria. 
                         Therefore, 
                         by establishing the University the country will be heading towards solving its healthcare challenges within a few years.</p>
                        <a href="<?=BASE_URL?>about-us" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Upcoming events</h3>
                        </div> <!-- event title -->
                        <ul>
                            <?php foreach($events as $event):?>
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> <?=date("j F Y",strtotime($event->date))?></span>
                                    <a href="<?=BASE_URL?>events/<?=$event->id?>/<?=$this->Generateurl($event->title)?>">
                                        <h4><?=mb_strimwidth($event->title, 0, 30, "...")?></h4>
                                    </a>
                                    <!--?php echo $this->Html->link(
                                        '<h4>'.mb_strimwidth($event->title, 0, 30, "...").'</h4>',
                                        ['controller'=>'events',$event->id, $this->Generateurl($event->title)],
                                        array('escape' => false) // This line will parse rather then output HTML
                                    ); ?-->
                                    <span><i class="fa fa-clock-o"></i><?=date("H:i A", strtotime($event->time))?></span>
                                    <span><i class="fa fa-map-marker"></i><?=$event->venue?></span>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            <!--li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                    <a href=""><h4>Tech Summit</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                </div>
                            </li>
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                    <a href=""><h4>Enviroement conference</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                </div>
                            </li-->
                        </ul> 
                         <div class="row mt-5">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="button text-center">
                                <a href="<?=BASE_URL?>all-events" class="main-btn">View All</a>
                            </div>
                        </div>
                    </div>
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="img/ourstudent1.jpg" alt="About">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
   
    <!--====== APPLY PART START ======-->
    
    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>We are recruiting</h3>
                            <p>Applications are invited for suitably qualified candidates.</p>
                            <a href="<?=BASE_URL?>apply" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Have any Question?</h3>
                            <p>Do you have any question(s) you will like us to clarify?</p>
                            <a href="<?=BASE_URL?>contact-us" class="main-btn">Contact us</a>
                        </div> <!-- apply cont -->
                    </div> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== APPLY PART ENDS ======-->
   
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Academics</h5>
                        <h2>Our Faculties </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="img/biochemistry.jpg" alt="Course" style="height: 207px;">
                            </div>
                            <!--div class="price">
                                <span>Free</span>
                            </div-->
                        </div>
                        <div class="cont">
                            <!--ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span-->
                            <a href="#"><h4>Faculty Of Science</h4></a>
                            <!--div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="img/course/teacher/t-1.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div-->
                        </div>
                    </div> <!-- singel course -->
                </div>
                
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="img/biology.jpg" alt="Course">
                            </div>
                            <!--div class="price">
                                <span>Free</span>
                            </div-->
                        </div>
                        <div class="cont">
                            <!--ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span-->
                            <a href="#"><h4>Basic Medical Sciences</h4></a>
                            <!--div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="img/course/teacher/t-1.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div-->
                        </div>
                    </div> <!-- singel course -->
                </div>

                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="img/chemistry.jpg" alt="Course" style="height: 207px;">
                            </div>
                            <!--div class="price">
                                <span>Free</span>
                            </div-->
                        </div>
                        <div class="cont">
                            <!--ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span-->
                            <a href="#"><h4>Allied Medical Sciences</h4></a>
                            <!--div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="img/course/teacher/t-1.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div-->
                        </div>
                    </div> <!-- singel course -->
                </div>

                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="img/biostatistics.jpg" alt="Course" style="height: 207px;">
                            </div>
                            <!--div class="price">
                                <span>Free</span>
                            </div-->
                        </div>
                        <div class="cont">
                            <!--ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span-->
                            <a href="#"><h4>Faculty Of Dentistry</h4></a>
                            <!--div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="img/course/teacher/t-1.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div-->
                        </div>
                    </div> <!-- singel course -->
                </div>
                
                
            </div> <!-- course slied -->
            <div class="row mt-5">
                <div class="col-lg-6 offset-lg-3">
                    <div class="button text-center">
                        <a href="<?=BASE_URL?>departments" class="main-btn">View All</a>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    
    <!--====== COURSE PART ENDS ======-->
   
    <!--====== VIDEO FEATURE PART START ======-->
    
    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(img/bg-0.jpg); background-size: 100% 100%;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <!--a class="Video-popup" href="https://www.youtube.com/watch?v=bRRtdzJH1oE"><i class="fa fa-play"></i></a-->
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Our Facilities</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="img/all-icon/f-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Global Certificate</h4>
                                        <p>We offer standard certificates that are recognized all over the world.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="img/all-icon/f-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Alumni Support</h4>
                                        <p>If you are an ex-student of the University, you can now order your transcript seamlessly using our transcript ordering and processing system.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="img/all-icon/f-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Books & Library</h4>
                                        <p>Our library is fully equipped, with relevant reading materials, and accessible to all our students</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>
    
    <!--====== VIDEO FEATURE PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <!--section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Featured Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div> 
                    <div class="teachers-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Career with us</a>
                    </div> 
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="img/teachers/t-1.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                                        <span>Vice chencelor</span>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="img/teachers/t-2.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>David card</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="img/teachers/t-3.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Rebeka alig</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="img/teachers/t-4.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Hanna bein</h6></a>
                                        <span>Aerobics head</span>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> 
        </div> 
    </section-->
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== PUBLICATION PART START ======-->
    
    <!--section id="publication-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <h5>Publications</h5>
                        <h2>From Store </h2>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    <div class="products-btn text-right pb-60">
                        <a href="#" class="main-btn">All Products</a>
                    </div> 
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="img/publication/p-1.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>Set for life </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now ($50)</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="img/publication/p-2.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>A Daughters </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now ($30)</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="img/publication/p-3.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>A Magnet </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now ($20)</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="img/publication/p-4.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>Pices of light</h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now ($75)</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section-->
    
    <!--====== PUBLICATION PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    <!--section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background-image: url(img/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> 
                </div>
            </div> 
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="img/testimonial/t-1.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="img/testimonial/t-2.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="img/testimonial/t-3.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section-->
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== NEWS PART START ======-->
    
    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>From the news</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="<?=BASE_URL?>img/<?=$singleevent->image?>" alt="News" style="max-width: 570px; max-height: 384px;">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i><?=date("j F Y",strtotime($singleevent->date))?></a></li>
                                <li><a href="#"> <span></span></a></li>
                            </ul>
                            <a href="<?=BASE_URL?>events/<?=$singleevent->id?>/<?=$this->Generateurl($singleevent->title)?>">
                                <h4><?=mb_strimwidth($singleevent->title, 0, 30, "...")?></h4>
                            </a>
                            <p><?=mb_strimwidth($event->description, 0, 500, "...")?></p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-6">
                    <?php foreach($threeevents as $threeevent):?>
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="<?=BASE_URL?>img/<?=$threeevent->image?>" alt="News" style="max-width: 170px; max-height: 108px;">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i><?=date("j F Y",strtotime($threeevent->date))?></a></li>
                                        <li><a href="#"> <span></span></a></li>
                                    </ul>
                                    <a href="<?=BASE_URL?>events/<?=$threeevent->id?>/<?=$this->Generateurl($threeevent->title)?>">
                                        <h3><?=mb_strimwidth($threeevent->title, 0, 30, "...")?></h3>
                                    </a>
                                    <p><?=mb_strimwidth($threeevent->description, 0, 80, "...")?></p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <?php endforeach; ?>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== NEWS PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
    <!--div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="img/patnar-logo/p-1.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="img/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="img/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="img/patnar-logo/p-4.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="img/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="img/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
            </div> 
        </div> 
    </div--> 
    
    <!--====== PATNAR LOGO PART ENDS ======-->