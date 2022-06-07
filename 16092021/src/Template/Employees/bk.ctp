                           <?= $this->Form->create($employee, ['id'=>'contact-form', 'data-toggle'=>'validator']) ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                         <label for="lga">Firstname</label>
                                         <?= 
                                          $this->Form->control('firstname', 
                                          ['class'=>'','data-error'=>"Firstname required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'Firstname',
                                          ]
                                          )
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                          <label for="lga">Surname</label>
                                         <?= 
                                          $this->Form->control('surname', 
                                          ['class'=>'','data-error'=>"Surname required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'Surname',
                                          ]
                                          )
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                          <label for="lga">Othername</label>
                                         <?= 
                                          $this->Form->control('othername', 
                                          ['class'=>'','data-error'=>"Firstname required", 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'Othername',
                                          ]
                                          )
                                         ?>
                                        <!--div class="help-block with-errors"></div-->
                                    </div> <!-- singel form --> 
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <!--input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required"-->
                                         <label for="lga">Gender</label>
                                         <?=
                                          $this->Form->control('gender_id', [
                                            'options' => $genders,'class'=>'form-control','data-error'=>"Firstname required", 
                                            'required'=>false, 'label'=>false, 'type'=>'select','style'=>'height: 50px;',
                                            'empty'=>'Gender'
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                         <label for="lga">Date Of Birth</label>
                                        <input type="text" class="form-control drgpicker" id="date" name="date" placeholder="Date of Birth" placeholder="Date Of Birth" required>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                         <label for="lga">Age</label>
                                         <?=
                                          $this->Form->control('age',['class'=>'','data-error'=>"Age required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'Age',
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                
                                <div class="col-md-12">
                                  <div class="section-title pt-30 pb-30">
                                      <h5>Qualification</h5>
                                  </div> <!-- section title -->
                                </div>
                               
                                 <div class="col-md-12">
                                    <div class="singel-form form-group">
                                         <label for="lga">Position Applied For</label>
                                        <?=
                                          $this->Form->control('position_id', 
                                          [
                                            'options' => $positions,'class'=>'form-control','data-error'=>"Firstname required", 
                                            'required'=>false, 'label'=>false, 'type'=>'select','style'=>'height: 50px;',
                                            'empty'=>'Position applied for'
                                          ]
                                          )
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>
                                  <div class="col-md-12">
                                    <div class="singel-form form-group">
                                         <label for="lga">Class Of Degree</label>
                                        <?=
                                          $this->Form->control('deg_id', 
                                          [
                                            'options' => $degs,'class'=>'form-control','data-error'=>"Please select class of degree", 
                                            'required'=>false, 'label'=>false, 'type'=>'select','style'=>'height: 50px;',
                                            'empty'=>'Class Of Degree'
                                          ]
                                          )
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>

                                  <div class="col-md-12">
                                    <div class="singel-form form-group">
                                           <label for="lga">Qualification Obtained With Date</label>
                                         <?=
                                          $this->Form->control('qualification',['class'=>'', 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'Qualification Obtained With Date (e.g MBBS (2015), SSCE (2004),FLSC[1998] )',
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>

                                  <div class="col-md-12">
                                    <div class="singel-form form-group" style="margin-top: 5px;">
                                          <label for="lga">Work Experience</label>
                                         <?=
                                          $this->Form->control('experience',['class'=>'', 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'Work Experience (e.g FEDERAL MEDICAL CENTRE KEFFI NASARAWA STATE )',
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>

                                  <div class="col-md-12">
                                    <div class="singel-form form-group" style="margin-top: 5px;">
                                          <label for="lga">Years Of Teaching Experience</label>
                                         <?=
                                          $this->Form->control('yearofteaching',['class'=>'', 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'Years Of Teaching Experience',
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>

                                  <div class="col-md-12">
                                    <div class="singel-form form-group" style="margin-top: 5px;">
                                          <label for="lga">Last Position</label>
                                         <?=
                                          $this->Form->control('lastposition',['class'=>'', 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'Last Position',
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>
                                  <div class="col-md-12">
                                    <div class="singel-form form-group" style="margin-top: 5px;">
                                          <label for="lga">Number Of Publications</label>
                                         <?=
                                          $this->Form->control('publication',['class'=>'', 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'Number Of Publications','style'=>'width:1070px'
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>
                                  <div class="col-md-12">
                                    <div class="section-title pt-30 pb-30">
                                        <h5>Contact</h5>
                                    </div> <!-- section title -->
                                  </div>
                                  <div class="col-md-12">
                                    <label for="state">State</label>
                                    <?= $this->Form->input('state_id', 
                                      array('type'=>'select', 'label'=>false, 'options'=>$states,'class'=>'form-control','onChange'=>'getLgas(this.value)','required'=>true)
                                    )?>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="singel-form form-group" id="lgadiv">
                                          <label for="lga">Local Governmant</label>
                                          <?= $this->Form->input('lga_id', 
                                            array('type'=>'select', 'label'=>false, 'options'=>$lgas,'class'=>'form-control', 'required'=>true)
                                          )?>
                                      </div> <!-- singel form -->
                                  </div>
                                  <div class="col-md-12" style="margin-top: 5px;">
                                    <div class="singel-form form-group">
                                        <label for="phone">Contact Phone No.</label>
                                         <?=
                                          $this->Form->control('phone',['class'=>'', 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'Contact Phone No.',
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>
                                  <div class="col-md-12">
                                      <div class="singel-form form-group">
                                           <label for="address">Contact Address</label>
                                          <textarea name="address" placeholder="Contact Address" data-error="Please,enter  your address." required="required"></textarea>
                                          <div class="help-block with-errors"></div>
                                      </div> <!-- singel form -->
                                  </div>
                                  <!--p class="form-message"></p-->
                                  <div class="col-md-12">
                                      <div class="singel-form">
                                          <button type="submit" class="main-btn">Send</button>
                                      </div> <!-- singel form -->
                                  </div> 
                            </div> <!-- row -->
                           <?= $this->Form->end() ?>






                            <?= $this->Form->create($employee) ?>
                          <fieldset>
                              <!--legend><?= __('Add Employee') ?></legend-->
                               <div class="row">
                                 <!--div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="lga">Code</label>
                                    <?php 
                                       echo $this->Form->control('code', ['class'=>'','data-error'=>"Firstname required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'Code',
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="lga">Salutation</label>
                                    <?php 
                                       echo $this->Form->control('salutation', ['class'=>'','data-error'=>"salutation required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'salutation',
                                          ]);
                                    ?>
                                    </div>
                                 </div-->
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="firstname">Firstname</label>
                                    <?php 
                                       echo $this->Form->control('firstname', ['class'=>'','data-error'=>"firstname required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'firstname',
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="surname">Surname</label>
                                    <?php 
                                       echo $this->Form->control('surname', ['class'=>'','data-error'=>"surname required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'surname',
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="othername">Othername</label>
                                    <?php 
                                       echo $this->Form->control('othername', ['class'=>'','data-error'=>"othername required", 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'othername',
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="gender_id">Gender</label>
                                    <?php 
                                       echo $this->Form->control('gender_id', ['class'=>'','data-error'=>"othername required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'Gender','options'=>$genders,'style'=>'width: 100%'
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="singel-form form-group">
                                         <label for="lga">Date Of Birth</label>
                                        <input type="text" class="form-control drgpicker" id="date" name="date" placeholder="Date of Birth" placeholder="Date Of Birth" required>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                   <div class="singel-form form-group">
                                    <label for="age">Age</label>
                                    <?php 
                                       echo $this->Form->control('age', ['class'=>'form-control','data-error'=>"othername required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'Age'
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12 pt-30 pb-30">
                                    <div class="section-title">
                                        <h5>Qualification</h5>
                                        <!--h2>Keep in touch</h2-->
                                    </div> <!-- section title -->
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="position_id">Position</label>
                                    <?php 
                                       echo $this->Form->control('position_id', ['class'=>'','data-error'=>"othername required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'Position','options'=>$positions
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="degree_id">Degree</label>
                                    <?php 
                                       echo $this->Form->control('degree_id', ['class'=>'','data-error'=>"othername required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'Degress','options'=>$degrees
                                          ]);
                                    ?>
                                    </div>
                                 </div>

                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="qualification">qualification</label>
                                    <?php 
                                       echo $this->Form->control('qualification', ['class'=>'','data-error'=>"qualification required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'qualification'
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="experience">experience</label>
                                    <?php 
                                       echo $this->Form->control('experience', ['class'=>'','data-error'=>"experience required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'experience'
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="yearofteaching">yearofteaching</label>
                                    <?php 
                                       echo $this->Form->control('yearofteaching', ['class'=>'','data-error'=>"yearofteaching required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'yearofteaching'
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="lastposition">lastposition</label>
                                    <?php 
                                       echo $this->Form->control('lastposition', ['class'=>'','data-error'=>"lastposition required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'lastposition'
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="singel-form form-group">
                                    <label for="publication">publication</label>
                                    <?php 
                                       echo $this->Form->control('publication', ['class'=>'','data-error'=>"publication required", 
                                          'required'=>true, 'label'=>false, 'placeholder'=>'publication'
                                          ]);
                                    ?>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <label for="state">State</label>
                                    <?= $this->Form->input('state_id', 
                                      array('type'=>'select', 'label'=>false, 'options'=>$states,'class'=>'form-control','onChange'=>'getLgas(this.value)','required'=>true)
                                    )?>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="singel-form form-group" id="lgadiv">
                                          <label for="lga">Local Governmant</label>
                                          <?= $this->Form->input('lga_id', 
                                            array('type'=>'select', 'label'=>false, 'options'=>$lgas,'class'=>'form-control', 'required'=>true)
                                          )?>
                                      </div> <!-- singel form -->
                                  </div>
                                  <div class="col-md-12" style="margin-top: 5px;">
                                    <div class="singel-form form-group">
                                        <label for="phone">Contact Phone No.</label>
                                         <?=
                                          $this->Form->control('phone',['class'=>'', 
                                          'required'=>false, 'label'=>false, 'placeholder'=>'Contact Phone No.',
                                          ])
                                         ?>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                  </div>
                                  <div class="col-md-12">
                                      <div class="singel-form form-group">
                                           <label for="address">Contact Address</label>
                                          <textarea name="address" placeholder="Contact Address" data-error="Please,enter  your address." required="required"></textarea>
                                          <div class="help-block with-errors"></div>
                                      </div> <!-- singel form -->
                                  </div>
                              <?php
                                 
                                  /*echo $this->Form->control('salutation');

                                  echo $this->Form->control('firstname');
                                  echo $this->Form->control('surname');
                                  echo $this->Form->control('othername');
                                  echo $this->Form->control('gender_id', ['options' => $genders]);
                                  echo $this->Form->control('dob');
                                  echo $this->Form->control('age');
                                  echo $this->Form->control('position_id', ['options' => $positions]);
                                  echo $this->Form->control('degree_id', ['options' => $degrees, 'empty' => true]);

                                  echo $this->Form->control('qualification');
                                  echo $this->Form->control('experience');
                                  echo $this->Form->control('yearofteaching');
                                  echo $this->Form->control('lastposition');
                                  echo $this->Form->control('publication');

                                  echo $this->Form->control('state_id', ['options' => $states]);
                                  echo $this->Form->control('lga_id', ['options' => $lgas]);
                                  echo $this->Form->control('address');
                                  echo $this->Form->control('phone');
                                  echo $this->Form->control('remark');*/
                              ?>
                              </div>
                          </fieldset>
                          <?= $this->Form->button(__('Submit'),['class'=>'main-btn']) ?>
                          <?= $this->Form->end() ?>