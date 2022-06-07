    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-30 pb-50 gray-bg">
        <div class="container">
           <div class="row">
             <?php foreach ($events as $event): ?>
               <div class="col-lg-6">
                   <div class="singel-event-list mt-30">
                       <div class="event-thum">
                           <img src="<?=BASE_URL?>img/<?=$event->image?>" alt="Event" style="width: 194px; height: 159px;">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i><?=date("j F Y",strtotime($event->date))?></span>
                             <a href="<?=BASE_URL?>events/<?=$event->id?>/<?=$this->Generateurl($event->title)?>">
                                <h4><?=mb_strimwidth($event->title, 0, 30, "...")?></h4>
                            </a>
                            <span><i class="fa fa-clock-o"></i><?=date("H:i A", strtotime($event->time))?></span>
                            <span><i class="fa fa-map-marker"></i><?=$event->venue?></span>
                            <p><?=mb_strimwidth($event->description, 0, 80, "...")?></p>
                       </div>
                   </div>
               </div>
              <?php endforeach; ?>
           </div> <!-- row -->
            <!--div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav> 
                </div>
            </div-->  <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->