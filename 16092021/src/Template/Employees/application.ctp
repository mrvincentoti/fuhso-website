
<style type="text/css" rel="stylesheet">
* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

#grad1 {
    background-color: : #9C27B0;
    /*background-image: linear-gradient(120deg, #FF4081, #81D4FA);*/
    background-image: url("<?=BASE_URL?>img/bg-001.jpg");
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 16.66%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    /*content: "\f023"*/
    content: "\f007"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f187"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    /*content: "\f09d"*/
    content: "\f07c"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f129"
}
#progressbar #reference:before {
    font-family: FontAwesome;
    content: "\f112"
}
#progressbar #publication:before {
    font-family: FontAwesome;
    content: "\f07c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: skyblue
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}

.error{
    border-bottom: 1px solid red !important;
}

.cool{
    border-bottom: 1px solid #ccc !important;
}
</style>
<!-- MultiStep Form -->

<section class="">
<div class="container-fluid pb-120 pt-50" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-8 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <!--h2><strong>Sign Up Your User Account</strong></h2-->
                <p>All fields with <span style="color:red;">(*)</span> are required and must not be empty</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <!--form id="msform"-->
                        <?= $this->Form->create($employee, ['type'=>'file','id'=>'msform']) ?>
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Personal</strong></li>
                                <li id="personal"><strong>Qualification</strong></li>
                                <li id="payment"><strong>Experience</strong></li>
                                <li id="publication"><strong>Publication</strong></li>
                                <li id="reference"><strong>Reference</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Personal Information</h2>
                                    <?=$this->Flash->render()?>
                                    <hr/>
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-row">
                                        <div class="singel-form form-group col-md-12" style="border: 1px dashed #bfacacb3; padding: 5px;">
                                            <label for="sname text-center">UPLOAD PHOTO<span style="color:red;">*</span></label>
                                            <span style="color: red;">Please not that image must be of type : jpeg, png or jpg and less than 2mb</span>
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
                                        <label for="firstname">FIRST NAME<span style="color:red;">*</span></label>
                                        <?php 
                                                echo $this->Form->control('firstname', ['class'=>'form-control','data-error'=>"firstname required", 
                                                'required'=>true, 'label'=>false, 'placeholder'=>'',
                                                ]);
                                            ?>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="surname">SURNAME<span style="color:red;">*</span></label>
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
                                            <label for="gender_id">GENDER<span style="color:red;">*</span></label>
                                            <?php 
                                                echo $this->Form->control('gender_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                                'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$genders, 'empty'=>'Select Gender'
                                                ]);
                                            ?>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="lga">DATE OF BIRTH<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control drgpicker" id="date" name="date" placeholder="" placeholder="" required>
                                        </div>
                                        <!--div class="form-group col-md-6">
                                            <label for="age">AGE<span style="color:red;">*</span></label>
                                            <?php 
                                                echo $this->Form->control('age', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                                    'required'=>true, 'label'=>false, 'placeholder'=>'','type'=>'text'
                                                    ]);
                                            ?>
                                        </div-->
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-row pb-10">
                                            <div class="form-group col-md-6">
                                                <label for="state">STATE OF ORIGIN<span style="color:red;">*</span></label>
                                                <?= $this->Form->input('state_id', 
                                                array('empty'=>'Select State','type'=>'select', 'label'=>false, 'options'=>$states,'class'=>'form-control list-dt','onChange'=>'getLgas(this.value)','required'=>true)
                                                )?>   
                                            </div>
                                            <div class="form-group col-md-6" id="lgadiv">
                                                <label for="lga">L.G.A OF ORIGIN<span style="color:red;">*</span></label>
                                                <?= $this->Form->input('lga_id', 
                                                    array('empty'=>'Select LGA','type'=>'select', 'label'=>false, 'options'=>$lgas,'class'=>'form-control list-dt', 'required'=>true)
                                                )?>
                                            </div>
                                        </div>
                                        <div class="form-row mt-30">
                                        <div class="form-group col-md-6">
                                            <label for="phone">CONTACT PHONE NO<span style="color:red;">*</span></label>
                                            <?=
                                            $this->Form->control('phone',['class'=>'form-control', 
                                            'required'=>true, 'label'=>false, 'placeholder'=>'',
                                            ])
                                            ?>  
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">EMAIL ID<span style="color:red;">*</span></label>
                                            <?=
                                            $this->Form->control('email',['class'=>'form-control', 
                                            'required'=>true, 'label'=>false, 'placeholder'=>'',
                                            ])
                                            ?>  
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="address">CONTACT ADDRESS<span style="color:red;">*</span></label>
                                            <textarea class="form-control" name="address" placeholder="" data-error="Please,enter  your address." required="required"></textarea>
                                        </div> 
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="positioncategory_id">POSITION CATEGORY<span style="color:red;">*</span></label>
                                            <?php 
                                                echo $this->Form->control('positioncategory_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                                    'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$positioncategories, 'empty'=>'Select Position',
                                                    'onChange'=>'getPosition(this.value); hideExp(this.value);'
                                                    ]);
                                            ?> 
                                        </div>
                                        <div class="form-group col-md-12" id="departmentdiv" style="margin-top: 20px;">
                                            <label for="positioncategory_id">DEPARTMENT<span style="color:red;">*</span></label>
                                            <?php 
                                                echo $this->Form->control('faculty_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                                    'required'=>false, 'label'=>false, 'placeholder'=>'','options'=>$faculties, 'empty'=>'Select Department',
                                                    ]);
                                            ?> 
                                        </div>
                                        <div class="form-group col-md-12" id="positiondiv" style="margin-top: 20px;">
                                            <label for="position_id">POSITION APPLIED FOR<span style="color:red;">*</span></label>
                                            <?php 
                                                echo $this->Form->control('position_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                                    'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$positions, 'empty'=>'Select Position'
                                                    ]);
                                            ?> 
                                        </div>
                                    </div>
                                
                                
                                    <div class="form-row mt-30">
                                        <div class="form-group col-md-12">
                                            <label for="lastposition">LAST POSITION</label>
                                            <?=
                                            $this->Form->control('lastposition',['class'=>'form-control', 
                                            'required'=>false, 'label'=>false, 'placeholder'=>'',
                                            ])
                                            ?>  
                                        </div>
                                        <div class="form-group col-md-12" id="yte">
                                            <label for="yearofteaching">YEARS OF TEACHING EXPERIENCE</label>
                                            <?=
                                            $this->Form->control('yearofteaching',['class'=>'form-control', 
                                            'required'=>false, 'label'=>false, 'placeholder'=>'',
                                            ])
                                            ?>  
                                        </div>
                                    </div>
                                   
                                </div>

                                    <!--input type="email" name="email" placeholder="Email Id" /> 
                                    <input type="text" name="uname" placeholder="UserName" />
                                    <input type="password" name="pwd" placeholder="Password" /> 
                                    <input type="password" name="cpwd" placeholder="Confirm Password"/-->
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Education Qualification</h2> 
                                    <hr/>
                                    <div class="col-md-12">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="deg_id">CLASS OF DEGREE<span style="color:red;">*</span></label>
                                                <?php 
                                                    echo $this->Form->control('deg_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                                        'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$degs, 'empty'=>'Select degree'
                                                        ]);
                                                ?>
                                            </div>
                                        </div>
                                        
                                        <div class="rssRowContainer">
                                            <div class="form-row newRow mt-30">
                                                <div class="form-group col-md-6">
                                                    <label for="qualificationname">QUALIFICATION<span style="color:red;">*</span></label>
                                                    <?=
                                                        $this->Form->control('qualificationname[]',['class'=>'form-control', 
                                                        'required'=>true, 'label'=>false, 'placeholder'=>'e.g BSc','id'=>'qualificationname-1'
                                                        ])
                                                    ?> 
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="qualificationyear">YEAR OBTAINED<span style="color:red;">*</span></label>
                                                    <!--?= $this->Form->input('qualificationyear[]', 
                                                        array('empty'=>'Select LGA','type'=>'select','id'=>'qualificationyear-1', 'label'=>false, 'options'=>$lgas,'class'=>'form-control list-dt', 'required'=>true)
                                                    )?-->
                                                    <?php $yearArray = range(1980, 2025);?>
                                                    <select name="qualificationyear[]" id="qualificationyear-1" class="form-control list-dt">
                                                        <option value="Select year">Select Year</option>
                                                        <?php
                                                        foreach ($yearArray as $year) {
                                                            // if you want to select a particular year
                                                            $selected = ($year == 2015) ? 'selected' : '';
                                                            echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12 actionBtn">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 text-right">
                                                <button type="button" id="addQualification" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Experience</h2> 
                                    <hr/>
                                    <div class="expRowContainer">
                                        <div class="form-row newExp mt-30">
                                            <div class="form-group col-md-12">
                                                <label for="phone">DESCRIPTION</label>
                                                <?=
                                                    $this->Form->control('experiencename[]',['class'=>'form-control', 
                                                    'required'=>false, 'label'=>false, 'placeholder'=>'University Of Calabar','id'=>'experiencename-1',
                                                    'type'=>'text'
                                                    ])
                                                ?>  
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="experienceyearstart">START DATE</label>
                                                <?php $yearArray = range(1980, 2025);?>
                                                <select name="experienceyearstart[]" id="experienceyearstart-1" class="form-control list-dt">
                                                    <option value="">Select Year</option>
                                                    <?php
                                                    foreach ($yearArray as $year) {
                                                        // if you want to select a particular year
                                                        $selected = ($year == 2015) ? 'selected' : '';
                                                        echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="experienceyearend">END DATE</label>
                                                <?php $yearArray = range(1980, 2025);?>
                                                <select name="experienceyearend[]" id="experienceyearend-1" class="form-control list-dt">
                                                    <option value="">Select Year</option>
                                                    <?php
                                                    foreach ($yearArray as $year) {
                                                        // if you want to select a particular year
                                                        $selected = ($year == 2015) ? 'selected' : '';
                                                        echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
                                                    }
                                                    ?>
                                                     <option value="TO DATE">TO DATE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12 actionBtn">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 text-right">
                                                    <button type="button" id="addExperience" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Publication</h2> 
                                    <hr/>
                                    <div class="pubRowContainer">
                                        <div class="form-row newPub mt-30">
                                            <div class="form-group col-md-12">
                                                <label for="publicationcategory">PUBLICATION TYPE</label>
                                                <?= $this->Form->input('publicationcategory_id[]',
                                                    array('empty'=>'Select Category','type'=>'select','id'=>'publicationcategory-1', 
                                                    'label'=>false, 'options'=>$publicationcategories,
                                                    'class'=>'form-control list-dt', 'required'=>false, 'onChange'=>'showOthers(this.id)'
                                                    )
                                                )?>
                                            </div>

                                            <div class="form-group col-md-12 mt-30" style="display:none;">
                                                <label for="publicationothers">OTHERS</label>
                                                <?=
                                                    $this->Form->control('publicationothers[]',['class'=>'form-control', 
                                                    'required'=>false, 'label'=>false, 'placeholder'=>'','id'=>'publicationothers-1'
                                                    ])
                                                ?>  
                                            </div>
                                            
                                            <div class="form-group col-md-12 mt-30">
                                                <label for="publicationnumber">NUMBER OF PUBLICATIONS</label>
                                                <?=
                                                    $this->Form->control('publicationnumber[]',['class'=>'form-control', 
                                                    'required'=>false, 'label'=>false, 'placeholder'=>'','id'=>'publicationnumber-1',
                                                    'type'=>'number'
                                                    ])
                                                ?>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12 actionBtn">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 text-right">
                                                    <button type="button" id="addPublication" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Reference</h2> 
                                    <hr/>
                                    <div class="refRowContainer">
                                        <div class="form-row newRef mt-30">
                                            <div class="form-group col-md-6">
                                                <label for="reffullname">FULLNAME</label>
                                                <?=
                                                    $this->Form->control('reffullname[]',['class'=>'form-control', 
                                                    'required'=>true, 'label'=>false, 'placeholder'=>''
                                                    ])
                                                ?>  
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="refemail">EMAIL</label>
                                                <?=
                                                    $this->Form->control('refemail[]',['class'=>'form-control', 
                                                    'required'=>true, 'label'=>false, 'placeholder'=>'example@domain.com'
                                                    ])
                                                ?>  
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="refphone">PHONE</label>
                                                <?=
                                                    $this->Form->control('refphone[]',['class'=>'form-control', 
                                                    'required'=>true, 'label'=>false, 'placeholder'=>''
                                                    ])
                                                ?>  
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="refjobtitle">JOBTITLE</label>
                                                <?=
                                                    $this->Form->control('refjobtitle[]',['class'=>'form-control', 
                                                    'required'=>true, 'label'=>false, 'placeholder'=>''
                                                    ])
                                                ?>  
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="refcompany">COMPANY/ORGANIZATION</label>
                                                <?=
                                                    $this->Form->control('refcompany[]',['class'=>'form-control', 
                                                    'required'=>true, 'label'=>false, 'placeholder'=>''
                                                    ])
                                                ?>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12 actionBtn">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 text-right">
                                                    <button type="button" id="addReference" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Confirmation !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/info--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Are you sure you want to submit this form?</h5>
                                        </div>
                                    </div>
                                   
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <?= $this->Form->button(__('Submit'),['class'=>'next action-button']) ?>
                            </fieldset>
                            <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<script type="text/javascript">
    function hideExp(id){
        if(id == "2"){
            document.getElementById('yte').style.display = "none";
            document.getElementById('departmentdiv').style.display = "none";
        }else{
            document.getElementById('yte').style.display = "block";
            document.getElementById('departmentdiv').style.display = "block";
        }
    }

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

    function getPosition(categoryid){
    //alert('am called');
        $.ajax({
            url: '<?=BASE_URL?>employees/position/'+categoryid,
            method: 'GET',
            dataType: 'text',
            success: function(response) {
              //console.log(response); return;
                document.getElementById('positiondiv').innerHTML = "";
                document.getElementById('positiondiv').innerHTML = response;
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

    function showOthers(id){
        var val = document.getElementById(id);
        var theText = val.options[val.selectedIndex].text;

        if(theText.toLowerCase()== 'others'){
            //console.log("show others");
            $('#'+id).parent().parent().next().show();
        }else{
            //console.log("do not show others");
            $('#'+id).parent().parent().next().hide();
        }
    }

</script>