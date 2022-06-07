<!-- Breadcrumb -->
<div class="container" style="background-color: #ffffff;">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Contact Us</li>
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
                    <section id="contact">
                        <header><h1>Contact Us</h1></header>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Federal University Of Health Sciences</strong>
                                    <br>
                                    <span>Akwete-Akpa</span>
                                    <br><br>
                                    <span>Otukpo LGA, Benue State</span>
                                    <br>
                                    <abbr title="Telephone">Telephone:</abbr> +234 123 456 789
                                    <br>
                                    <abbr title="Email">Email:</abbr> <a href="#">info@fuhso.edu.ng</a>
                                </address>
                                <div class="icons">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-pinterest"></i></a>
                                    <a href=""><i class="fa fa-youtube-play"></i></a>
                                </div><!-- /.icons -->
                                <hr>
                                <p>
                                    The Federal University of Health Sciences, Otukpo is a world class specialized
                                     University that will train and produce high quality healthcare professionals 
                                     that will contribute to the development of the health sector in Nigeria, 
                                     and the University will be equipped with state of the...
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="map-wrapper">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.389928525137!2d-0.11316612883517647!3d51.52440760342934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b48959f07e1%3A0xb6b70e6a76950525!2s5+Phoenix+Pl!5e0!3m2!1ssk!2s!4v1395674632609" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="contact-form" class="clearfix">
                        <header><h2>Send Us a Message</h2></header>
                        <?= $this->Flash->render() ?>
                        <?= $this->Form->create(null, ['url' => ['action' => 'contact'],'class'=>'contact-form']) ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="name">Your Name</label>
                                            <input type="text" name="name" id="name" required>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="email">Your Email</label>
                                            <input type="email" name="email" id="email" required>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="message">Your Message</label>
                                            <textarea name="message" id="message" required></textarea>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-12">
                                    <div class="section-field" style="width: 100% !important;">
                                        <label for="message">5 + 1 = ?</label>
                                        <input type="text" placeholder="5 + 1 = ?" class="form-control" name="captcha" required>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                            
                            <div class="pull-right">
                                <input type="submit" class="btn btn-color-primary" id="submit" value="Send a Message">
                            </div><!-- /.form-actions -->
                            <div id="form-status"></div>
                            <?= $this->Form->end() ?><!-- /.footer-form -->
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <?=$this->element('news')?>
                    <?=$this->element('teacher')?>
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->