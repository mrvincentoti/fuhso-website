<!-- Breadcrumb -->
<div class="container" style="background-color: #ffffff;">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">News & Event</a></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content" style="background-color: #ffffff;">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section class="events images" id="events">
                        <header><h1>News & Events</h1></header>
                        <div class="section-content">
                            <?php foreach($events as $event):?>
                                <article class="event">
                                    <div class="event-thumbnail">
                                        <figure class="event-image" style="background-image: url(<?=BASE_URL?>/img/<?=$event->image?>); background-size: contain;
                                        background-repeat: no-repeat;">
                                        </figure>
                                        <figure class="date">
                                            <div class="month"><?=date_format(date_create($event->date), 'M')?></div>
                                            <div class="day" style="font-size: 40px;"><?=date_format(date_create($event->date), 'd')?></div>
                                        </figure>
                                    </div>
                                    <aside>
                                        <header>
                                            <a href="<?=BASE_URL?>/events/<?=$event->id?>/<?=$this->Generateurl($event->title)?>">
                                                <?=$event->title?>
                                            </a>
                                        </header>
                                        <div class="additional-info"><span class="fa fa-map-marker"></span> <?=$event->venue?></div>
                                        <div class="description">
                                            <p>
                                                <?=mb_strimwidth($event->description, 0, 300, "...")?>
                                            </p>
                                        </div>
                                        <a href="<?=BASE_URL?>/events/<?=$event->id?>/<?=$this->Generateurl($event->title)?>" class="btn btn-framed btn-color-grey btn-small">View Details</a>
                                    </aside>
                                </article><!-- /.event -->
                            <?php endforeach; ?>
                        </div><!-- /.section-content -->
                    </section><!-- /.events-images -->
                    <div class="center">
                        <ul class="pagination">
                           <?= $this->Paginator->first('<< ' . __('First')) ?>
                            <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('Next') . ' >') ?>
                            <?= $this->Paginator->last(__('Last') . ' >>') ?>
                        </ul><!-- /.pagination -->
                    </div><!-- /.center -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <?=$this->element('teacher')?>
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->