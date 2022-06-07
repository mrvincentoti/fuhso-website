    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== EVENTS PART START ======-->

    <section id="event-singel" class="pt-20 pb-120 gray-bg" style="background-color: #ffffff; ">
        <div class="container">
            <div class="events-area">
                <div class="row" style="margin-top: 10px;">
                    <div class="col-lg-9">
                        <div class="events-left">
                            <header>
                                <h2><?=$event->title?></h2>
                            </header>
                            <a href="#"><span><i class="fa fa-calendar"></i><?=date("j F Y",strtotime($event->date))?></span></a>
                            <a href="#"><span><i class="fa fa-clock-o"></i><?=date("H:i A", strtotime($event->time))?></span></a>
                            <a href="#"><span><i class="fa fa-map-marker"></i><?=$event->venue?></span></a>
                            <img src="<?=BASE_URL?>/img/<?=$event->image?>" alt="Event" style="width: 100%; margin-top: 5px;">
                            <p style="margin-top: 5px;"><?=$event->description?></p>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-3">
                        <div id="page-sidebar" class="sidebar">
                            <?=$this->element('news', ['relatedevents', $relatedevents])?>
                        </div><!-- /#sidebar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->