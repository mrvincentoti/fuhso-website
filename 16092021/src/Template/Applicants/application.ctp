 <style>
* {
  box-sizing: border-box;
}



#regForm {
  background-color: #ffffff;
  font-family: Raleway;
  padding: 40px;
  width: 100%;

  margin-bottom: 10px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

.nice-select.open .list {
  max-height: 300px;
  overflow: auto;
}


</style>

  <section id="contact-page" class="pt-20 pb-120 gray-bg">
    <div class="container">
      <div class="row">
          <div class="col-md-12 blog-main">
            <!--form id="regForm" action="/action_page.php"-->
                <?= $this->Form->create($applicant, ['id'=>'regForm', 'type'=>'file']) ?>
              <h1>Application Form</h1>
              <?=$this->Flash->render()?>
              <hr/>
              <!-- One "tab" for each step in the form: -->
              <div class="tab"><h3 class="mb-20">Personal Information</h3>
                <!--p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p-->
                  <div class="form-row">
                    <div class="singel-form form-group col-md-4" style="border: 1px dashed #bfacacb3; padding: 5px;">
                       <label for="sname">Upload photo</label>
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
                  <div class="form-row">
                    <div class="singel-form form-group col-md-6 mb-10">
                      <label for="sname">Surname</label>
                      <input type="text" class="form-control" id="sname" placeholder="Surname" name="surname" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="fname">Firstname</label>
                      <input type="text" class="form-control" id="fname" placeholder="Firtsname" name="fullname" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="mname">Middlename</label>
                      <input type="text" class="form-control" id="mname" placeholder="Middlename" name="middlename">
                    </div>
                    <div class="singel-form form-group col-md-6">
                      <label for="date-input1">Date Of Birth</label>
                      <input type="text" class="form-control drgpicker" id="date" name="date" placeholder="MM/DD/YYY" placeholder="Date Of Birth" required>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="gender">Gender</label>
                      <select id="gender" class="form-control" name="gender" required>
                        <option value="">Choose...</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="town">Town Of Residence</label>
                      <input type="text" class="form-control" id="town" name="town" required>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="state">State</label>
                      <?= $this->Form->input('state_id', 
                         array('type'=>'select', 'label'=>false, 'options'=>$states,'class'=>'form-control','onChange'=>'getLgas(this.value)','required'=>true)
                      )?>
                    </div>

                    <div class="form-group col-md-6" id="lgadiv">
                      <label for="lga">Local Governmant</label>
                      <?= $this->Form->input('lga_id', 
                         array('type'=>'select', 'label'=>false, 'options'=>$lgas,'class'=>'form-control', 'required'=>true)
                      )?>
                      <!--select id="lga" class="form-control" name="lga" >
                        <option value="">Choose...</option>
                        <option>...</option>
                      </select-->
                    </div>

                    
                  </div>

                  <div class="form-row">
                    <div class="singel-form form-group col-md-6">
                      <label for="phone">Phone Number</label>
                      <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <!--input type="email" class="form-control" id="email" placeholder="email" name="email"-->
                      <?php 
                        echo $this->Form->control('email', 
                        ['class'=>'form-control','type'=>'email', 'placeholder'=>'Email', 'id'=>'email', 'label'=>false, 'required'=>true]
                       );
                      ?>
                    </div>
                  </div>

                  <!--div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="course">Faculty</label>
                        <?= $this->Form->input('faculty_id', 
                          array('type'=>'select', 'label'=>false, 'options'=>$faculties,'class'=>'form-control', 'empty'=>'Choose..', 'onChange'=>'getCourses(this.value)')
                        )?>
                    </div>

                    <div class="form-group col-md-6" id="coursesdiv">
                        <label for="course">Position Applied For</label>
                        <?= $this->Form->input('course_id', 
                          array('type'=>'select', 'label'=>false, 'options'=>$courses,'class'=>'form-control', 'empty'=>'Choose..')
                        )?>
                    </div>
                  </div-->
                  <div class="form-row">
                    <div class="form-group col-md-12">
                            <label for="course">Position Applied For</label>
                            <?= $this->Form->input('position_id', 
                              array('type'=>'select', 'label'=>false, 'options'=>$positions,'class'=>'form-control', 'empty'=>'Choose..')
                            )?>
                      </div>
                  </div>
              </div>
              
              <div class="tab"><h3 class="mb-20">Qualification</h3>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="qname">Qualification Name</label>
                      <!--?= $this->Form->input('state', 
                         array('type'=>'select', 'label'=>false, 'options'=>$states,'class'=>'form-control')
                      )?-->
                      <select id="qname" class="form-control" name="qname" required onChange="showInput(this.value)">
                        <option value="">Choose...</option>
                         <option value="WAEC">WAEC</option>
                         <option value="NECO">NECO</option>
                         <option value="NABTEB">NABTEB</option>
                         <option value="TCII">TCII</option>
                         <option value="Others">Others</option>
                      </select>
                    </div>
                    <div class="singel-form form-group col-md-12 mb-10" id="qnamediv" style="display:none;">
                      <input type="text" class="form-control" id="qnameo" placeholder="Qualification Name" name="qnameo">
                    </div>

                    <div class="form-group col-md-12">
                      <label for="qyear">Qualification Year</label>
                      <select id="lga" class="form-control" name="qyear" require>
                        <?php
                          $currently_selected = date('Y'); 
                          $earliest_year = 1950; 
                          $latest_year = date('Y'); 
                          foreach ( range( $latest_year, $earliest_year ) as $i ) {
                            print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                          }
                          ?>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="qnumber">Number Of Credits</label>
                      <input type="text" class="form-control" id="qnumber" name="qnumber" required>
                    </div>
                  </div>
              </div>
              <div class="tab"><h3 class="mb-20">Diploma</h3>
                <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="dname">Name</label>
                      <!--?= $this->Form->input('state', 
                         array('type'=>'select', 'label'=>false, 'options'=>$states,'class'=>'form-control')
                      )?-->
                      <select id="ddname" class="form-control" name="ddname" onChange="showInput1(this.value)">
                        <option value="">Choose...</option>
                         <option value="ND">ND</option>
                         <option value="OND">OND</option>
                         <option value="HND">HND</option>
                         <option value="PGD">PGD</option>
                         <option value="Others">Others</option>
                      </select>
                    </div>
                    <div class="singel-form form-group col-md-12 mb-10" id="ddnamediv" style="display:none;">
                      <input type="text" class="form-control" id="ddnameo" placeholder="Qualification Name" name="ddnameo">
                    </div>

                    <div class="form-group col-md-12">
                      <label for="ddyear">Qualification Year</label>
                      <select id="lga" class="form-control" name="ddyear" >
                        <?php
                          $currently_selected = date('Y'); 
                          $earliest_year = 1950; 
                          $latest_year = date('Y'); 
                          foreach ( range( $latest_year, $earliest_year ) as $i ) {
                            print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                          }
                          ?>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="ddsubject">
                    </div>

                    <div class="form-group col-md-12">
                      <label for="dclass">Class Of Diploma</label>
                      <select id="ddclass" class="form-control" name="ddclass" >
                        <option value="">Choose...</option>
                         <option value="Distinction">Distinction</option>
                         <option value="Upper credit">Upper Credit</option>
                         <option value="Lower Credit">Lower Credit</option>
                         <option value="Pass">Pass</option>
                         <option value="Fail">Fail</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="tab"><h3 class="mb-20">Degree</h3>
               <div class="form-row">
                 <div class="form-group col-md-12">
                      <label for="dname">Name</label>
                      <!--?= $this->Form->input('state', 
                         array('type'=>'select', 'label'=>false, 'options'=>$states,'class'=>'form-control')
                      )?-->
                      <select id="dname" class="form-control" name="dname" >
                        <option value="">Choose...</option>
                         <option value="BSc">BSc</option>
                         <option value="BA">BA</option>
                         <option value="B.Tech">B.Tech</option>
                         <!--option value="PGD">PGD</option>
                         <option value="Others">Others</option-->
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="dyear">Qualification Year</label>
                      <select id="lga" class="form-control" name="dyear" >
                        <?php
                          $currently_selected = date('Y'); 
                          $earliest_year = 1950; 
                          $latest_year = date('Y'); 
                          foreach ( range( $latest_year, $earliest_year ) as $i ) {
                            print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                          }
                          ?>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="dsubject">
                    </div>

                    <div class="form-group col-md-12">
                      <label for="dclass">Class Of Degree</label>
                      <select id="dclass" class="form-control" name="dclass" >
                        <option value="">Choose...</option>
                         <option value="First Class">First Class</option>
                         <option value="Second Class Upper">Second Class Upper</option>
                         <option value="Second Class Lower">Second Class Lower</option>
                         <option value="Third Class">Third Class</option>
                         <option value="Pass">Pass</option>
                      </select>
                    </div>
               </div>
              </div>
              <div class="form-row mt-10">
                <div class="col-md-12 text-right mt-10">
                  <button class="main-btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                  <button class="main-btn" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
              </div>
            <?= $this->Form->end() ?>
          </div>
      </div>
    </div>
  </section>

 


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "" && y[i].required) {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

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


    /*var nameField = document.getElementById("qname");
    var qnamediv = document.getElementById("qnamediv");

    nameField.addEventListener("change", function(){
      //Update this to your logic...
      if(nameField.value === "Others"){
        //qnamediv.style.display = 'block';
        console.log(nameField.value);
      }
    });*/

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