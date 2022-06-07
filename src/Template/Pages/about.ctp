<!-- Breadcrumb -->
<div class="container" style="background-color: #ffffff;">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">About Us</li>
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
                    <section id="about">
                        <header><h1>About Us</h1></header>
                        <p>
                            <?=$abouts->description?>
                        </p>
                        <img src="<?=BASE_URL?>/img/about-us-head-img.jpg">
                        <h2>Mission</h2>
                        <p>
                            <?=$abouts->mission?>
                        </p>
                        <h2>Vision</h2>
                        <p>
                            <?=$abouts->vision?>
                        </p>
                        <h2>Philosophy</h2>
                        <p>
                            <?=$abouts->philosophy?>
                        </p>
                        <?=$this->element('gallery', ['pageTitle' => 'about'])?>
                        
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                     <?=$this->element('news', ['relatedevents', $relatedevents])?>
                    <?=$this->element('teacher', ['officers', $officers])?>
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->