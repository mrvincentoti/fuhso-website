<div id="page-content">
    <!-- Slider -->
    <div id="slider">
        <div class="container">
            <div class="slider-wrapper">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                            <div class="image-carousel">
                                <?php foreach ($banners as $banner) : ?>
                                    <div class="slide">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="image-carousel-slide">
                                                <!-- <img src="assets/img/slide-2.jpg" alt=""> -->
                                                <?php
                                                echo $this->Html->image($banner->image, ['height' => '450px']);
                                                ?>
                                            </div>
                                        </div><!-- /.col-md-8 -->
                                        <div class="col-md-12 col-sm-12">
                                            <h1 style="font-size: 20px; text-transform: capitalize !important;"><?= ucfirst($banner->title) ?></h1>
                                            <p>
                                                <?= mb_strimwidth($banner->description, 0, 200, "...") ?>
                                            </p>
                                            <a href="<?= BASE_URL ?>/banners/details/<?= $banner->id ?>/<?= $this->Generateurl($banner->title) ?>" class="btn btn-framed btn-small btn-color-white">View Details</a>
                                        </div><!-- /.col-md-4 -->
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
                                <?php foreach ($features as $feature) : ?>
                                    <article>
                                        <header>
                                            <i class="fa fa-file-o"></i>
                                            <a href="<?= BASE_URL ?>/events/<?= $feature->id ?>/<?= $this->Generateurl($feature->title) ?>"><?= $feature->title ?></a>
                                        </header>
                                    </article><!-- /article -->
                                <?php endforeach; ?>
                            </div><!-- /.section-content -->
                            <a href="<?= BASE_URL ?>/news-and-events" class="read-more">All News</a>
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
                        <?php foreach ($events as $event) : ?>
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i><?= $event->date ?></figure>
                                <header>
                                    <a href="<?= BASE_URL ?>/events/<?= $event->id ?>/<?= $this->Generateurl($event->title) ?>">
                                        <?= mb_strimwidth($event->title, 0, 100, "...") ?>
                                    </a>
                                </header>
                            </article><!-- /article -->
                        <?php endforeach; ?>
                    </div><!-- /.section-content -->
                    <a href="<?= BASE_URL ?>/news-and-events" class="read-more stick-to-bottom">All News</a>
                </section><!-- /.news-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6" style="min-height: 391px;">
                <section class="events small" id="events-small">
                    <header>
                        <h2>Events</h2>
                    </header>
                    <div class="section-content">
                        <?php foreach ($news as $new) : ?>
                            <article class="event nearest-second">
                                <figure class="date">
                                    <div class="month"><?= date_format(date_create($new->date), 'M') ?></div>
                                    <div class="day" style="font-size: 40px;"><?= date_format(date_create($new->date), 'd') ?></div>
                                </figure>
                                <aside>
                                    <header>
                                        <a href="<?= BASE_URL ?>/events/<?= $new->id ?>/<?= $this->Generateurl($new->title) ?>">
                                            <?= mb_strimwidth($new->title, 0, 100, "...") ?>
                                        </a>
                                    </header>
                                    <div class="additional-info"><?= $new->venue ?></div>
                                </aside>
                            </article><!-- /article -->
                        <?php endforeach; ?>
                    </div><!-- /.section-content -->
                </section><!-- /.events-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-12" style="min-height: 391px;">
                <section id="about">
                    <header>
                        <h2>About FUHSO</h2>
                    </header>
                    <div class="section-content">
                        <img src="<?= BASE_URL ?>/img/small.png" alt="" class="add-margin">
                        <p><strong>Welcome to FUHSO.</strong>
                            <?= mb_strimwidth($abouts->description, 0, 350, "...") ?>
                        </p>
                        <a href="<?= BASE_URL ?>/about-us" class="read-more stick-to-bottom">Read More</a>
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
                        <div class="owl-item" style="width: 1140px;">
                            <div class="author has-dark-background">
                                <blockquote>
                                    <figure class="author-picture"><img src="<?= BASE_URL ?>/img/logo.jpg" alt="" style="width: 80px;"></figure>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <footer>Philosophy</footer>
                                            <header>
                                                <?= mb_strimwidth($abouts->philosophy, 0, 350, "...") ?>
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
                            <?php foreach ($officers as $officer) : ?>
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="member-detail.html"><img src="<?= BASE_URL ?>/img/professor.jpg" alt=""></a></figure>
                                    <aside>
                                        <header>
                                            <a href=""><?= $officer->name ?></a>
                                            <div class="divider"></div>
                                            <figure class="professor-description"><?= $officer->desinition ?></figure>
                                        </header>
                                        <a href="#" class="show-profile">Show Profile</a>
                                    </aside>
                                </article><!-- /.professor-thumbnail -->
                            <?php endforeach; ?>
                            <a href="<?= BASE_URL ?>/principal-officers" class="read-more stick-to-bottom">All Officer</a>
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
                            <li><a href="<?= BASE_URL ?>/img/gate-entrance.JPG" class="image-popup"><img src="<?= BASE_URL ?>/img/gate-entrance.JPG" alt=""></a></li>
                            <li><a href="<?= BASE_URL ?>/img/vc-photo.JPG" class="image-popup"><img src="<?= BASE_URL ?>/img/vc-photo.JPG" alt=""></a></li>
                            <li><a href="<?= BASE_URL ?>/img/fuhso-management.JPG" class="image-popup"><img src="<?= BASE_URL ?>/img/fuhso-management.JPG" alt=""></a></li>
                            <li><a href="<?= BASE_URL ?>/img/fuhso-matric.JPG" class="image-popup"><img src="<?= BASE_URL ?>/img/fuhso-matric.JPG" alt=""></a></li>
                            <li><a href="<?= BASE_URL ?>/img/fuhso-nma.JPG" class="image-popup"><img src="<?= BASE_URL ?>/img/fuhso-nma.JPG" alt=""></a></li>
                            <li><a href="<?= BASE_URL ?>/img/fuhso-council.JPG" class="image-popup"><img src="<?= BASE_URL ?>/img/fuhso-council.JPG" alt=""></a></li>
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
                        <?php $count = 1;
                        foreach ($faqs as $faq) : ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#question-<?= $count ?>">
                                            <span class="question" style="font-size: 14px !important;"><?= $faq->question ?></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question-<?= $count ?>" class="panel-collapse collapse <?php if ($count == 1) {
                                                                                                    echo "in";
                                                                                                } ?>">
                                    <div class="panel-body">
                                        <?= $faq->answer ?>
                                    </div>
                                </div>
                            </div>
                        <?php $count = $count + 1;
                        endforeach ?>
                    </div>
                </article>
                <article style="margin-top: 10px;">
                    <a href="<?= BASE_URL ?>/asked-questions" class="read-more">All Faq</a>
                </article>
            </div>
        </div>
    </div>
</div>