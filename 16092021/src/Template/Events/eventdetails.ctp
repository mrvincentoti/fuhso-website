    <!--====== PAGE BANNER PART START ======-->

    <!--section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(<?=BASE_URL?>img/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Campus clean workshop</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=BASE_URL?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=BASE_URL?>events">Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Campus clean workshop</li>
                            </ol>
                        </nav>
                    </div> 
                </div>
            </div> 
        </div> 
    </section-->

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== EVENTS PART START ======-->

    <section id="event-singel" class="pt-20 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3><?=$event->title?></h3>
                            <a href="#"><span><i class="fa fa-calendar"></i><?=date("j F Y",strtotime($event->date))?></span></a>
                            <a href="#"><span><i class="fa fa-clock-o"></i><?=date("H:i A", strtotime($event->time))?></span></a>
                            <a href="#"><span><i class="fa fa-map-marker"></i><?=$event->venue?></span></a>
                            <img src="<?=BASE_URL?>img/<?=$event->image?>" alt="Event">
                            <p><?=$event->description?></p>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                   <div class="saidbar mt-5">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-post mt-30">
                                   <h4>Other Events</h4>
                                   <ul>
                                     <?php foreach($relatedevents as $events): ?>
                                       <li>
                                            <a href="<?=BASE_URL?>events/<?=$events->id?>/<?=$this->Generateurl($events->title)?>">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                        <img style="width: 95px; height: 95px;" src="<?=BASE_URL?>img/<?=$events->image?>" alt="Event">
                                                   </div>
                                                   <div class="cont">
                                                       <h6><?=$events->title?></h6>
                                                       <span><?=date("j F Y",strtotime($event->date))?></span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                     <?php endforeach;?>  
                                   </ul>
                               </div> <!-- saidbar post -->
                           </div>
                       </div> <!-- row -->
                   </div> <!-- saidbar -->
               </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->