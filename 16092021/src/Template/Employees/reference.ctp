<section id="contact-page" class="gray-bg pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30 mb-30">
                        <?=$this->Flash->render()?>
                        <div class="section-title">
                            <h5>Recommendation</h5>
                        </div> <!-- section title -->
                        <p>
                            Your recommendation will assist the screening committee in selecting the best candidate
                            that will contribute towards the mission of The Federal University Of health Sciences Otukpo.
                            The screening committee may contact you for further information.
                        </p>
                        <div class="main-form pt-45">
                            <!--form id="contact-form" action="#" method="post" data-toggle="validator"-->
                            <?= $this->Form->create(null) ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="firstname" type="text" placeholder="Firstname" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="lastname" type="text" placeholder="Lastname" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="organization" type="text" placeholder="Organiation" data-error="Subject is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="position" type="text" placeholder="Position/Title" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="relationship" type="text" placeholder="Relationship" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="telephone" type="text" placeholder="Telephone" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" value="<?=$refs->refemail?>" placeholder="Email" data-error="Subject is required." required="required" readonly>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="country" type="text" placeholder="Country" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="city" type="text" placeholder="City" data-error="Subject is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="postalcode" type="text" placeholder="Postal Code" data-error="Phone is required.">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="address" placeholder="Street Address" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <p><b>Please rate the applicant on the following criteria, in relation to other high potential people you know.</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <label>Leadership Potential</label>
                                            <select class="form-control list-dt" name="leadership">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <label>Creativity</label>
                                            <select class="form-control list-dt" name="creativity">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <label>Resourcefulness</label>
                                            <select class="form-control list-dt" name="resourcefulness">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <label>Energy & Initiative</label>
                                            <select class="form-control list-dt" name="energy">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <label>Ability to work in a team</label>
                                            <select class="form-control list-dt" name="team">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <label>Oral communication Skills in English</label>
                                            <select class="form-control list-dt" name="oral">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <label>Written communication Skills in English</label>
                                            <select class="form-control list-dt" name="written">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <label>Preference</label>
                                            <select class="form-control list-dt" name="preference" style="margin-top: 22px;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <label>Thinking & Reasoning</label>
                                            <select class="form-control list-dt" name="thinking">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
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
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="cont">
                                        <p>
                                            Applicant: <span><b><?=$refs->employee->firstname.' '.$refs->employee->surname?></b></span>
                                        </p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <div class="cont">
                                    <p>
                                            Applying for: <span><b><?=$refs->employee->position->name?></b></span>
                                        </p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="cont">
                                    <p>
                                            Recommender: <span><b><?=$refs->reffullname?></b></span>
                                        </p>
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