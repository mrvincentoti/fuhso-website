<div id="page-content">
    <!-- Slider -->
    <div id="slider">
        <div class="container">
            <div class="slider-wrapper">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                            <div class="image-carousel">
                                <?php foreach($banners as $banner): ?>
                                <div class="slide">
                                    <div class="col-md-4 col-sm-4">
                                        <h1><?=$banner->title?></h1>
                                        <p>
                                           <?=mb_strimwidth($banner->description, 0, 200, "...")?>
                                        </p>
                                        <a href="<?=BASE_URL?>/banners/details/<?=$banner->id?>/<?=$this->Generateurl($banner->title)?>" class="btn btn-framed btn-small btn-color-white">View Details</a>
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-md-8 col-sm-8">
                                        <div class="image-carousel-slide">
                                            <!-- <img src="assets/img/slide-2.jpg" alt=""> -->
                                            <?php
                                                echo $this->Html->image($banner->image);
                                            ?>
                                        </div>
                                    </div><!-- /.col-md-8 -->
                                </div><!-- /.slide -->
                                <?php endforeach; ?>
                            </div><!-- /.image-carousel -->
                        </div><!-- /.row -->
                    </div><!-- /.col-md-9 -->

                    <div class="col-md-3 col-sm-12">
                        <aside class="news-small" id="news-slider">
                            <header>
                                <h2>Featured News</h2>
                            </header>
                            <div class="section-content">
                                <?php foreach($features as $feature):?>
                                <article>
                                    <header>
                                        <i class="fa fa-file-o"></i>
                                        <a href="<?=BASE_URL?>/events/<?=$feature->id?>/<?=$this->Generateurl($feature->title)?>"><?=$feature->title?></a>
                                    </header>
                                </article><!-- /article -->
                                <?php endforeach;?>
                            </div><!-- /.section-content -->
                            <a href="<?=BASE_URL?>/news-and-events" class="read-more">All News</a>
                        </aside><!-- /.news-small -->
                    </div><!-- /.col-md-3 -->

                </div><!-- /.row -->
            </div><!-- /.slider-wrapper -->
        </div><!-- /.container -->
    </div>
    <!-- end Slider -->
</div>

<div class="block about-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6" style="min-height: 391px;">
                <section class="news-small" id="news-small">
                    <header>
                        <h2>News</h2>
                    </header>
                    <div class="section-content">
                        <?php foreach($events as $event):?>
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i><?=$event->date?></figure>
                                <header>
                                    <a href="<?=BASE_URL?>/events/<?=$event->id?>/<?=$this->Generateurl($event->title)?>">
                                        <?=mb_strimwidth($event->title, 0, 100, "...")?>
                                    </a>
                                </header>
                            </article><!-- /article -->
                        <?php endforeach;?>
                    </div><!-- /.section-content -->
                    <a href="<?=BASE_URL?>/news-and-events" class="read-more stick-to-bottom">All News</a>
                </section><!-- /.news-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6" style="min-height: 391px;">
                <section class="events small" id="events-small">
                    <header>
                        <h2>Events</h2>
                    </header>
                    <div class="section-content">
                        <?php foreach($news as $new):?>
                        <article class="event nearest-second">
                            <figure class="date">
                                <div class="month"><?=date_format(date_create($new->date), 'M')?></div>
                                <div class="day" style="font-size: 40px;"><?=date_format(date_create($new->date), 'd')?></div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="<?=BASE_URL?>/events/<?=$new->id?>/<?=$this->Generateurl($new->title)?>">
                                        <?=mb_strimwidth($new->title, 0, 100, "...")?>
                                    </a>
                                </header>
                                <div class="additional-info"><?=$new->venue?></div>
                            </aside>
                        </article><!-- /article -->
                        <?php endforeach;?>
                    </div><!-- /.section-content -->
                </section><!-- /.events-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-12" style="min-height: 391px;">
                <section id="about">
                    <header>
                        <h2>About FUHSO</h2>
                    </header>
                    <div class="section-content">
                        <img src="<?=BASE_URL?>/img/small.png" alt="" class="add-margin">
                        <p><strong>Welcome o Fuhso.</strong> 
                            <?=mb_strimwidth($abouts->description, 0, 350, "...")?>
                        </p>
                        <a href="<?=BASE_URL?>/about-us" class="read-more stick-to-bottom">Read More</a>
                    </div><!-- /.section-content -->
                </section><!-- /.about -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<section id="testimonials" class="testimonials">
    <div class="block">
        <div class="container">
            <div class="author-carousel owl-carousel owl-theme" style="display: block; opacity: 1;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 4560px; left: 0px; display: block;">
                    <div class="owl-item" style="width: 1140px;"><div class="author has-dark-background">
                    <blockquote>
                        <figure class="author-picture"><img src="<?=BASE_URL?>/img/logo.jpg" alt="" style="width: 80px;"></figure>
                        <article class="paragraph-wrapper">
                            <div class="inner">
                                <footer>Philosophy</footer>
                                <header>
                                <?=mb_strimwidth($abouts->philosophy, 0, 350, "...")?>
                                </header>
                            </div>
                        </article>
                    </blockquote>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.block -->
</section>

<div class="block gallery-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4" style="min-height: 335px;">
                <section id="our-professors">
                    <header>
                        <h2>Principal Officer</h2>
                    </header>
                    <div class="section-content">
                        <div class="professors">
                            <?php foreach($officers as $officer):?>
                            <article class="professor-thumbnail">
                                <figure class="professor-image"><a href="member-detail.html"><img src="<?=BASE_URL?>/img/professor.jpg" alt=""></a></figure>
                                <aside>
                                    <header>
                                        <a href=""><?=$officer->name?></a>
                                        <div class="divider"></div>
                                        <figure class="professor-description"><?=$officer->desinition?></figure>
                                    </header>
                                    <a href="#" class="show-profile">Show Profile</a>
                                </aside>
                            </article><!-- /.professor-thumbnail -->
                            <?php endforeach;?>
                            <a href="<?=BASE_URL?>/principal-officers" class="read-more stick-to-bottom">All Officer</a>
                        </div><!-- /.professors -->
                    </div><!-- /.section-content -->
                </section><!-- /.our-professors -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-8" style="min-height: 335px;">
                <section id="gallery">
                    <header>
                        <h2>Gallery</h2>
                    </header>
                    <div class="section-content">
                        <ul class="gallery-list">
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                            <li><a href="<?=BASE_URL?>/img/banner-3.jpg" class="image-popup"><img src="<?=BASE_URL?>/img/banner-3.jpg" alt=""></a></li>
                        </ul>
                        <a href="" class="read-more">Go to Gallery</a>
                    </div><!-- /.section-content -->
                </section><!-- /.gallery -->
            </div><!-- /.col-md-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<div class="block" style="background: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                    <h2>FAQ</h2>
                </header>
                <article>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#question-1">
                                        <span class="question">1. 2020/2021 ADMISSION SCREENING EXERCISE: WHO IS THIS MEANT FOR</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="question-1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    The exercise is meant for candidates who have fulfilled the following conditions: (I) Have a minimum score of 200 at the 2020 JAMB exams in the relevant subjects (II) Have successfully concluded the change of institution to FUHSO as at 1st June 2021. Please note that change of institution to FUHSO for the 2020/2021 academic session is officially closed.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#question-2">
                                        <span class="question">2. CAN THE SCREENING BE DONE BY PROXY</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="question-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    NO
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#question-3">
                                        <span class="question">3. CAN I STILL APPLY TO CHANGE INSTITUTION TO FUHSO</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="question-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    NO
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#question-4">
                                        <span class="question">4. WHAT CREDENTIALS SHOULD I COME WITH?</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="question-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Original copies of WAEC/NECO results. Evidence/print out of JAMB change of institution to FUHSO, JAMB result sheet, state of origin, birth certificate and any other relevant document.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#question-5">
                                        <span class="question">5. DOES THIS CALL INCLUDE EMPLOYMENT APPLICANTS</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="question-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    NO
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#question-6">
                                        <span class="question">6. DO I NEED TO PAY MONEY TO GAIN ADMISSION TO FUHSO?</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="question-6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    NO. FUHSO admits only qualified candidates. Any one asking for or soliciting for money for himself or on behalf of any official of FUHSO is a fraudster and should be reported immediately. BEWARE OF FRAUDSTERS!!
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#question-7">
                                        <span class="question">7. WHAT SHOULD I DO IF OFFERED AN ALTERNATIVE COURSE</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="question-7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Proceed to any accredited JAMB CBT centre to accept the alternative course if you so wish.
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article style="margin-top: 10px;">
                    <a href="<?=BASE_URL?>/faq" class="read-more">All Faq</a>
                </article>
            </div>
        </div>
    </div>
</div>
