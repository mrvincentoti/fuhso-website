    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="gray-bg pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30 mb-30">
                        <?=$this->Flash->render()?>
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h2>Keep in touch</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <!--form id="contact-form" action="#" method="post" data-toggle="validator"-->
                            <?= $this->Form->create(null) ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="messege" placeholder="Messege" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    
                                </div> <!-- row -->
                            <!--    /form-->
                            <?= $this->Form->button(__('Send'),['class'=>'main-btn']) ?>
                            <?= $this->Form->end() ?>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Federal University of Health Sciences
                                        Akwete-Akpa,
                                        Otukpo LGA,
                                        Benue State,<br/>
                                        Nigeria
                                        </p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <!--li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+234 123 456 789</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li-->
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@fuhso.ng</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                    <!--div class="map mt-30">
                        <div id="contact-map"></div>
                    </div--> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->