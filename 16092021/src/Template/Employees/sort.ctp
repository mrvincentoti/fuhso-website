<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Sort Applications</h2>
              <p class="text-muted">sort application based on different criteria</p>
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Form controls</strong>
                </div>
                <div class="card-body">
                  <?= $this->Form->create(null) ?>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group mb-3">
                        <label for="simpleinput">CATEGORY</label>
                        <?php 
                            echo $this->Form->control('positioncategory_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                'required'=>false, 'label'=>false, 'placeholder'=>'','options'=>$positioncategories, 'empty'=>'Select Position',
                                'onChange'=>'getPosition(this.value);'
                                ]);
                        ?> 
                      </div>
                    </div> <!-- /.col -->
                    <div class="col-md-3">
                      <div class="form-group mb-3" id="positiondiv">
                        <label for="example-helping">POSITION</label>
                        <?php 
                            echo $this->Form->control('position_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                'required'=>false, 'label'=>false, 'placeholder'=>'','options'=>$positions, 'empty'=>'Select Position'
                                ]);
                        ?> 
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group mb-3">
                        <label for="example-helping">DEPARTMENT</label>
                        <?php 
                            echo $this->Form->control('faculty_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                'required'=>false, 'label'=>false, 'placeholder'=>'','options'=>$faculties, 'empty'=>'Select Department',
                                ]);
                        ?> 
                      </div>
                    </div>
                    <div class="col-md-3 text-right">
                      <div class="form-group">
                         <button type="submit" class="btn mb-2 btn-outline-primary" style="margin-top: 25px;">
                             <span class="fe fe-search fe-16 mr-2"></span>
                             Filter
                         </button>
                      </div>
                    </div>
                  </div>
                  <?= $this->Form->end() ?>
                </div>
              </div> <!-- / .card -->
              <div class="row">
                <?php if(!empty($result)){?>
                  <div class="col-md-12 mb-4">
                    <div class="card shadow">
                      <div class="card-body">
                      <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                            <th></th>
                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Applied For</th>
                            <th>Last Position</th>
                            <!--th>Address</th-->
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($result as $applicant): ?>
                            <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                                </div>
                            </td>
                            <td><?=$applicant->code?></td>
                            <td><?=$applicant->firstname.' '.$applicant->surname. ' '.$applicant->othername?></td>
                            <td><?=$applicant->positioncategory->name?></td>
                            <td><?=$applicant->position->name?></td>
                            <td><?=$applicant->lastposition?></td>
                            
                            <!--td><?=$applicant->lga->name.','.$applicant->state->name?></td-->
                            <td>
                                <?php if($applicant->status == 1){?>
                                    <span style="padding:10px;" class="badge badge-pill badge-warning">Pending</span>
                                <?php }?>
                                <?php if($applicant->status == 2){?>
                                    <span style="padding:10px;" class="badge badge-pill badge-danger">Declined</span>
                                <?php }?>
                                <?php if($applicant->status == 3){?>
                                    <span style="padding:10px;" class="badge badge-pill badge-success">Employed</span>
                                <?php }?>
                            </td>
                            <td>
                                <!--button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <?= $this->Html->link(__('View'), ['action' => 'view', $applicant->id],['class'=>'dropdown-item']) ?>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                                </div-->
                                <?= $this->Html->link(__('View details'), ['action' => 'view', $applicant->id],['class'=>'btn btn-outline-success']) ?>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <?php }else{ ?>
                  <div class="col-md-12 mb-4">
                    <div class="card shadow">
                      <div class="card-body text-center pt-10">
                        <img src="<?=BASE_URL?>img/search.png"/>
                        <br/>
                        <span class="text-mute mt-10">There were no results. You need to adjust your search parameters</span>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->


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