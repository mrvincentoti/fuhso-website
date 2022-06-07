    <!--====== PAGE BANNER PART START ======-->
    
    <!--section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(img/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
            </div> 
        </div> 
    </section-->
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110" style="background: #f9f8f8;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to FUHSO </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>
                           <?=$abouts->description?>
                        </p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="<?=BASE_URL?>img/slider/ourstudent2.jpg" alt="About">
                    </div>  <!-- about imag -->
                </div> 
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <!--div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>Why Choose us</h4>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
                        </div> 
                    </div-->
                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>Our vision</h4>
                            <p>
                            <?=$abouts->vision?>
                            </p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>02</span>
                            <h4>Our Mission</h4>
                            <p><?=$abouts->mission?></p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>03</span>
                            <h4>Our Philosophy</h4>
                            <p><?=$abouts->philosophy?></p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
  
    <!--====== EVENT 2 PART START ======-->
    
    <section id="event-part" class="pt-120 pb-120">
        <div class="container">
            <div class="event-bg bg_cover" style="background-image: url(img/slider/ourstudent3.jpg)">
                <div class="row">
                    <div class="col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="event-2 pt-90 pb-70">
                            <div class="event-title">
                                <h3>Upcoming events</h3>
                            </div> <!-- event title -->
                            <ul>
                                 <?php foreach($events as $event):?>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i><?=date("j F Y",strtotime($event->date))?></span>
                                        <a href="<?=BASE_URL?>events/<?=$event->id?>/<?=$this->Generateurl($event->title)?>">
                                            <h4><?=mb_strimwidth($event->title, 0, 30, "...")?></h4>
                                        </a>
                                        <span><i class="fa fa-clock-o"></i><?=date("H:i A", strtotime($event->time))?></span>
                                        <span><i class="fa fa-map-marker"></i><?=$event->venue?></span>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                <!--li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="events-singel.html"><h4>Tech Summit</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="events-singel.html"><h4>Enviroement conference</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li-->
                            </ul> 
                        </div> <!-- event 2 -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- container -->
    </section>
    
    <!--====== EVENT 2 PART ENDS ======-->

    