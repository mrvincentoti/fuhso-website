<style type="text/css">
  .nice-select{
   /* height: 50px !important;*/
    padding: 10px;
    border: 1px solid #a1a1a1;
    border-radius: 5px;
    color: #8a8a8a;
    font-size: 15px;
    width: 100%;
  }

   .section-title h5{
     text-transform: uppercase;
   }

  .section-title h5::before {
      width: 100% !important;
  }

  .nice-number input {
    /*width: 1025px !important;*/
    text-align: left !important;
}

label{
  color: #302159;
}
</style>
<!--====== CONTACT PART START ======-->    
<section id="contact-page" class="pt-20 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-from mt-30">
                    <div class="col-md-12">
                    <?=$this->Flash->render()?>
                    <div class="section-title">
                        <h5>Personal Information</h5>
                        <!--h2>Keep in touch</h2-->
                    </div> <!-- section title -->
                    </div>
                    <div class="main-form pt-45">
                        <!--form id="contact-form" action="#" method="post" data-toggle="validator"-->
                        <?= $this->Form->create($employee, ['type'=>'file']) ?>
                          <div class="col-md-12">
                            <div class="form-row">
                              <div class="singel-form form-group col-md-4" style="border: 1px dashed #bfacacb3; padding: 5px;">
                                <label for="sname">UPLOAD PHOTO</label>
                                <!-- Upload image input-->
                                <!--p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p-->
                                <div class="image-area mt-4"><img id="imageResult" style="width: 200px;" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" name="upload" type="file" onchange="readURL(this);" class="form-control border-0" required>
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="firstname">FIRST NAME</label>
                              <?php 
                                    echo $this->Form->control('firstname', ['class'=>'form-control','data-error'=>"firstname required", 
                                      'required'=>true, 'label'=>false, 'placeholder'=>'',
                                      ]);
                                ?>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="surname">SURNAME</label>
                                <?php 
                                    echo $this->Form->control('surname', ['class'=>'form-control','data-error'=>"surname required", 
                                      'required'=>true, 'label'=>false, 'placeholder'=>'',
                                      ]);
                                ?>
                                </div>
                              </div>
                            </div>
                          </dvi>

                          <div class="col-md-12">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="othername">OTHER NAME</label>
                                  <?php 
                                      echo $this->Form->control('othername', ['class'=>'form-control','data-error'=>"othername required", 
                                        'required'=>false, 'label'=>false, 'placeholder'=>'',
                                        ]);
                                  ?>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="gender_id">GENDER</label>
                                <?php 
                                    echo $this->Form->control('gender_id', ['class'=>'form-control','data-error'=>"othername required", 
                                      'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$genders, 'empty'=>'Select Gender'
                                      ]);
                                ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="lga">DATE OF BIRTH</label>
                                <input type="text" class="form-control drgpicker" id="date" name="date" placeholder="" placeholder="" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="age">AGE</label>
                                  <?php 
                                      echo $this->Form->control('age', ['class'=>'form-control','data-error'=>"othername required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'','type'=>'text'
                                        ]);
                                  ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="faculty_id">FACULTY</label>
                                  <?php 
                                      echo $this->Form->control('faculty_id', ['class'=>'form-control','data-error'=>"othername required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$faculties, 'empty'=>'Select faculty',
                                        'onChange'=>'getDepartments(this.value)'
                                        ]);
                                  ?>
                              </div>
                              <div class="form-group col-md-6" id="deptdiv">
                                <label for="course_id">DEPARTMENT</label>
                                  <?php 
                                      echo $this->Form->control('course_id', ['class'=>'form-control','data-error'=>"othername required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$courses, 'empty'=>'Select department'
                                        ]);
                                  ?>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="position_id">POSITION APPLIED FOR</label>
                                  <?php 
                                      echo $this->Form->control('position_id', ['class'=>'form-control','data-error'=>"othername required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$positions, 'empty'=>'Select Position'
                                        ]);
                                  ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 pt-30 pb-30">
                            <div class="section-title">
                                <h5>Qualification</h5>
                                <!--h2>Keep in touch</h2-->
                            </div> <!-- section title -->
                          </div>
                          <div class="col-md-12">
                            <div class="form-row">
                              <!--div class="form-group col-md-6">
                                <label for="position_id">POSITION APPLIED FOR</label>
                                  <?php 
                                      echo $this->Form->control('position_id', ['class'=>'form-control','data-error'=>"othername required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$positions, 'empty'=>'Select Position'
                                        ]);
                                  ?>
                              </div-->
                              <div class="form-group col-md-12">
                                <label for="deg_id">CLASS OF DEGREE</label>
                                  <?php 
                                      echo $this->Form->control('deg_id', ['class'=>'form-control','data-error'=>"othername required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$degs, 'empty'=>'Select degree'
                                        ]);
                                  ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                  <label for="qualification">QUALIFICATIONS OBTAINED WITH DATES</label>
                                  <?php 
                                      echo $this->Form->control('qualification', ['class'=>'form-control','data-error'=>"qualification required",'type'=>'textarea' ,
                                        'required'=>true, 'label'=>false, 'placeholder'=>'e.g Ph.D ARABIC IN VIEW, M. A ARABIC (2014), B. A ARABIC (2006), SSCE (1998), FSLC (1993)'
                                        ]);
                                  ?>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="experience">WORK EXPERIENCE</label>
                                  <?php 
                                      echo $this->Form->control('experience', ['class'=>'form-control','data-error'=>"experience required",'type'=>'textarea' ,
                                        'required'=>true, 'label'=>false, 'placeholder'=>'e.g UNIVERSITY OF CALABAR, ARABIC LECTURER F.C.E KATSINA  (2013 TO DATE)'
                                        ]);
                                  ?>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="yearofteaching">YEARS OF TEACHING EXPERIENCE</label>
                                  <?php 
                                      echo $this->Form->control('yearofteaching', ['class'=>'form-control','data-error'=>"yearofteaching required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'','type'=>'text'
                                        ]);
                                  ?>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="lastposition">LAST POSITION</label>
                                  <?php 
                                      echo $this->Form->control('lastposition', ['class'=>'form-control','data-error'=>"lastposition required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'e.g Lecturer II','type'=>'text'
                                        ]);
                                  ?>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="publication">NO. OF PUBLICATIONS</label>
                                  <?php 
                                      echo $this->Form->control('publication', ['class'=>'form-control','data-error'=>"publication required", 
                                        'required'=>true, 'label'=>false, 'placeholder'=>'','type'=>'text'
                                        ]);
                                  ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 pt-30 pb-30">
                            <div class="section-title">
                                <h5>Contact</h5>
                                <!--h2>Keep in touch</h2-->
                            </div> <!-- section title -->
                          </div>
                          <div class="col-md-12">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="state">STATE OF ORIGIN</label>
                                <?= $this->Form->input('state_id', 
                                  array('empty'=>'Select State','type'=>'select', 'label'=>false, 'options'=>$states,'class'=>'form-control','onChange'=>'getLgas(this.value)','required'=>true)
                                )?>   
                              </div>
                              <div class="form-group col-md-6" id="lgadiv">
                                <label for="lga">L.G.A OF ORIGIN</label>
                                  <?= $this->Form->input('lga_id', 
                                    array('empty'=>'Select LGA','type'=>'select', 'label'=>false, 'options'=>$lgas,'class'=>'form-control', 'required'=>true)
                                  )?>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                              <label for="phone">CONTACT PHONE NO</label>
                                <?=
                                  $this->Form->control('phone',['class'=>'form-control', 
                                  'required'=>false, 'label'=>false, 'placeholder'=>'',
                                  ])
                                ?>  
                              </div>
                               <div class="form-group col-md-12">
                              <label for="phone">EMAIL ADDRESS</label>
                                <?=
                                  $this->Form->control('email',['class'=>'form-control', 
                                  'required'=>false, 'label'=>false, 'placeholder'=>'',
                                  ])
                                ?>  
                              </div>
                              <div class="form-group col-md-12">
                                <label for="address">CONTACT ADDRESS </label>
                                <textarea class="form-control" name="address" placeholder="" data-error="Please,enter  your address." required="required"></textarea>
                              </div>
                            </div>
                          </div>
                         <?= $this->Form->button(__('Submit'),['class'=>'main-btn']) ?>
                          <?= $this->Form->end() ?>
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->
<!--nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Genders'), ['controller' => 'Genders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gender'), ['controller' => 'Genders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lgas'), ['controller' => 'Lgas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lga'), ['controller' => 'Lgas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employees form large-9 medium-8 columns content">
    <?= $this->Form->create($employee) ?>
    <fieldset>
        <legend><?= __('Add Employee') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('salutation');

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
            echo $this->Form->control('remark');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div-->



<script type="text/javascript">
    function getLgas(stateid){
    //alert('am called');
        $.ajax({
            url: '<?=BASE_URL?>states/lga/'+stateid,
            method: 'GET',
            dataType: 'text',
            success: function(response) {
              //console.log(response); return;
                document.getElementById('lgadiv').innerHTML = "";
                document.getElementById('lgadiv').innerHTML = response;
                //location.href = redirect;
            }
        });

    }


    function getCourses(facultyid){
    //alert('am called');
        $.ajax({
            url: '<?=BASE_URL?>faculties/courses/'+facultyid,
            method: 'GET',
            dataType: 'text',
            success: function(response) {
              //console.log(response); return;
                document.getElementById('coursesdiv').innerHTML = "";
                document.getElementById('coursesdiv').innerHTML = response;
                //location.href = redirect;
            }
        });

    }

    function getDepartments(facultyid){
        $.ajax({
            url: '<?=BASE_URL?>faculties/departments/'+facultyid,
            method: 'GET',
            dataType: 'text',
            success: function(response) {
              //console.log(response); return;
                document.getElementById('deptdiv').innerHTML = "";
                document.getElementById('deptdiv').innerHTML = response;
                //location.href = redirect;
            }
        });

    }

    


    function showInput(value){
      var nameField = document.getElementById("qname");
      var qnamediv = document.getElementById("qnamediv");
      if(value === "Others"){
        qnamediv.style.display = 'block';
        qnamediv.disabled = false;
        //document.getElementById("qnameo").setAttribute("required", true);
      }else{
        qnamediv.style.display = 'none';
        //document.getElementById("qnameo").setAttribute("required", false);
        qnamediv.disabled = true;
      }
    }

    function showInput1(value){
      var nameField = document.getElementById("ddname");
      var qnamediv = document.getElementById("ddnamediv");
      if(value === "Others"){
        qnamediv.style.display = 'block';
        qnamediv.disabled = false;
        //document.getElementById("dnameo").setAttribute("required", true);
      }else{
        qnamediv.style.display = 'none';
        //document.getElementById("dnameo").setAttribute("required", false);
        qnamediv.disabled = true;
      }
    }
</script>