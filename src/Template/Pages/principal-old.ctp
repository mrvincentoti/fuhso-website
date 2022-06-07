<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Principal Officers</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section id="members">
                        <header><h1>Principal Officers</h1></header>
                        <section id="our-speakers">
                            <?php foreach($officers as $officer):?>
                            <div class="author-block course-speaker">
                                <a href=""><figure class="author-picture"><img src="<?=BASE_URL?>/img/logo.jpg" alt="" style="width: 70px;"></figure></a>
                                <article class="paragraph-wrapper">
                                    <div class="inner">
                                        <header><a href="member-detail.html"><?=$officer->name?></a></header>
                                        <figure><?=$officer->disinition?></figure>
                                        <!-- <p>
                                            Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                            Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                        </p> -->
                                        <!-- <a href="" class="btn btn-framed btn-small btn-color-grey">Full Bio</a> -->
                                    </div>
                                </article>
                            </div><!-- /.author -->
                            <?php endforeach; ?>
                        </section><!-- /#our-speakers -->
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <?=$this->element('news')?>
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->