<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<!--nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genders'), ['controller' => 'Genders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gender'), ['controller' => 'Genders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lgas'), ['controller' => 'Lgas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lga'), ['controller' => 'Lgas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($employee->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salutation') ?></th>
            <td><?= h($employee->salutation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($employee->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($employee->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Othername') ?></th>
            <td><?= h($employee->othername) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $employee->has('gender') ? $this->Html->link($employee->gender->name, ['controller' => 'Genders', 'action' => 'view', $employee->gender->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $employee->has('position') ? $this->Html->link($employee->position->name, ['controller' => 'Positions', 'action' => 'view', $employee->position->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qualification') ?></th>
            <td><?= h($employee->qualification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Degree') ?></th>
            <td><?= $employee->has('degree') ? $this->Html->link($employee->degree->name, ['controller' => 'Degrees', 'action' => 'view', $employee->degree->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Experience') ?></th>
            <td><?= h($employee->experience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastposition') ?></th>
            <td><?= h($employee->lastposition) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $employee->has('state') ? $this->Html->link($employee->state->name, ['controller' => 'States', 'action' => 'view', $employee->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lga') ?></th>
            <td><?= $employee->has('lga') ? $this->Html->link($employee->lga->name, ['controller' => 'Lgas', 'action' => 'view', $employee->lga->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($employee->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($employee->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yearofteaching') ?></th>
            <td><?= $this->Number->format($employee->yearofteaching) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publication') ?></th>
            <td><?= $this->Number->format($employee->publication) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($employee->dob) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($employee->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Remark') ?></h4>
        <?= $this->Text->autoParagraph(h($employee->remark)); ?>
    </div>
</div-->

<div class="container">
<!--?=debug(json_encode( $degrees->deg->name, JSON_PRETTY_PRINT));exit;?-->
  <div class="row justify-content-center">
    <div class="col-12">
      <!--div class="row mt-5 align-items-center">
          <div class="col-md-3 text-center mb-5">
              <div class="avatar avatar-xl">
              <img src="<?=BASE_URL?>img/passports/<?=$employee->photo?>" alt="..." class="avatar-img rounded-circle">
              </div>
          </div>
          <div class="col">
              <div class="row align-items-center">
              <div class="col-md-7">
                  <h4 class="mb-1"><?=$employee->firstname.' '.$employee->surname.' '.$employee->othername?></h4>
                  <p class="small mb-3">CODE - <b><?=$employee->code?></b></p>
                  <p class="small mb-3">EMAIL - <b><?=$employee->email?></b></p>
                  <p class="small mb-3">PHONE NUMBER - <b><?=$employee->phone?></b></p>
                  <p class="small mb-3">GENDER - <b><?=strtoupper($employee->gender->name)?></b></p>
                  <p class="small mb-3">STATE OF ORIGIN - <b><?=strtoupper($employee->state->name)?></b></p>
                  <p class="small mb-3">LOCAL GOVERNMENT OF ORIGIN - <b><?=strtoupper($employee->lga->name)?></b></p>
                  <p class="small mb-3">LOCAL GOVERNMENT OF ORIGIN - <b><?=strtoupper($employee->address)?></b></p>
              </div>
              </div>
              <div class="row mb-4">
              <div class="col-md-7">
                  <p class="text-muted"></p>
              </div>
              <div class="col">
                  <p><p>
              </div>
              </div>
          </div>
      </div-->
      <div class="row align-items-center mb-4">
        <div class="col">
          <h2 class="h5 page-title"><small class="text-muted text-uppercase"></small><br /></h2>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-danger">Reject</button>
          <button type="button" class="btn btn-primary">Accept</button>
        </div>
      </div> <!-- .row -->
      <div class="row my-4">
        <div class="col-md-8">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Position</strong>
            </div>
            <div class="card-body">
              <dl class="row align-items-center mb-0">
                <dt class="col-sm-2 mb-3 text-muted">Category</dt>
                <dd class="col-sm-4 mb-3">
                  <strong><?=$employee->Positioncategories['name']?></strong>
                </dd>
                
              </dl>
              <dl class="row mb-0">
                <dt class="col-sm-2 mb-3 text-muted">Applied for</dt>
                <dd class="col-sm-4 mb-3"><?=$employee->position->name?></dd>
                <dt class="col-sm-2 mb-3 text-muted"></dt>
                <dd class="col-sm-4 mb-3"></dd>
                <dt class="col-sm-2 mb-3 text-muted">Status</dt>
                <dd class="col-sm-4 mb-3">
                  <?php 
                    if($employee->status == 1){
                      echo 'Pending  <span class="dot dot-md bg-warning mr-2"></span>';
                    }elseif($employee->status == 2){
                      echo 'Rejected  <span class="dot dot-md bg-danger mr-2"></span>';
                    }else{
                      echo 'Accepted  <span class="dot dot-md bg-success mr-2"></span>';
                    }
                  ?>
                </dd>
                <dt class="col-sm-2 mb-3 text-muted">Applied On</dt>
                <dd class="col-sm-4 mb-3"><?=$employee->applied_on?></dd>
                <dt class="col-sm-2 mb-3 text-muted">Last Position</dt>
                <dd class="col-sm-4 mb-3"><?=$employee->lastposition?></dd>
                <dt class="col-sm-4 mb-3 text-muted">Years Of Teaching Experience</dt>
                <dd class="col-sm-2 mb-3"><?=$employee->yearofteaching != "" ? $employee->yearofteaching : "0" ?></dd>
                
              </dl>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Qualification</strong>
            </div>
            <div class="card-body">
              <div class="row align-items-center mb-4">
                <!--div class="col-auto">
                  <div class="avatar avatar-sm mb-3 mx-4">
                    <img src="./assets/avatars/face-3.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>
                </div-->
                <div class="col">
                  <strong>Class Of Degree</strong>
                  <div class="mb-2"><?=$degrees->deg->name?></div>
                  
                  <small class="text-muted"></small>
                </div>
                <div class="col">
                  <!--strong>Class Of Degree</strong>
                  <div class="mb-2">SSCE(2003),NCE(2001),BSC(2011)</div>
                  
                  <small class="text-muted"></small-->
                </div>
              </div> <!-- .row-->
              <div class="row align-items-center mb-4">
              <?php foreach($qualifications as $qualification):?>
                <div class="col-4">
                  <strong><?=$qualification->qualificationname?></strong>
                  <div class="mb-2">Year Obtained - <?=$qualification->qualificationyear?></div>
                  <small class="text-muted"></small>
                </div>
              <?php endforeach;?>
              </div> <!-- .row-->
              <hr class="my-4">
              
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Experience</strong>
            </div>
            <div class="card-body">
              <div class="row align-items-center mb-4">
                <!--div class="col-auto">
                  <div class="avatar avatar-sm mb-3 mx-4">
                    <img src="./assets/avatars/face-3.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>
                </div-->
                <?php foreach($experiences as $experience):?>
                <div class="col-8 mb-3">
                  <strong>Description</strong>
                  <div class="mb-2"><?=$experience->experiencename?></div>
                  
                  <small class="text-muted"></small>
                </div>
                <div class="col-2 mb-3">
                  <strong>From</strong>
                  <div class="mb-2"><?=$experience->experienceyearstart?></div>
                  
                  <small class="text-muted"></small>
                </div>
                <div class="col-2 mb-3">
                  <strong>To</strong>
                  <div class="mb-2"><?=$experience->experienceyearend?></div>
                  
                  <small class="text-muted"></small>
                </div>
                <?php endforeach;?>
              </div> <!-- .row-->
              <hr class="my-4">
              
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Publication</strong>
            </div>
            <div class="card-body">
              <div class="row align-items-center mb-4">
                <!--div class="col-auto">
                  <div class="avatar avatar-sm mb-3 mx-4">
                    <img src="./assets/avatars/face-3.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>
                </div-->
                <?php foreach($publications as $publication):?>
                <div class="col-6">
                  <strong><?=$publication->others != "" ? $publication->others : $publication->publicationcategory->name?> - <?=$publication->publicationnumber?></strong>
                  <!--div class="mb-2"><?=$publication->publicationnumber?></div-->
                  
                  <small class="text-muted"></small>
                </div>
                <?php endforeach ?>
              </div> <!-- .row-->
              <hr class="my-4">
              
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
              <h2 class="page-title">Reference</h2>
              <div class="card my-4">
                <!--div class="card-header">
                  <strong>Basic</strong>
                </div-->
                <div class="card-body">
                  <div id="example-basic">
                    <?php foreach($recommendations as $recommendation):?>
                      <h3><?=ucwords(strtolower($recommendation->firstname." ".$recommendation->lastname))?></h3>
                      <section>
                        <p>Recommender: <span><b><?=ucwords(strtolower($recommendation->firstname." ".$recommendation->lastname))?></b></span></p>
                        <p>Organization: <span><b><?=ucwords(strtolower($recommendation->organization))?></b></span></p>
                        <p>Position: <span><b><?=ucwords(strtolower($recommendation->position))?></b></span></p>
                        <p>Relationship: <span><b><?=ucwords(strtolower($recommendation->relationship))?></b></span></p>
                        <p>Telephone: <span><b><?=ucwords(strtolower($recommendation->telephone))?></b></span></p>
                        <p>Email: <span><b><?=strtolower($recommendation->email)?></b></span></p>
                        <p>Country: <span><b><?=ucwords(strtolower($recommendation->country))?></b></span></p>
                        <p>City: <span><b><?=ucwords(strtolower($recommendation->city))?></b></span></p>
                        <p>Postal Code: <span><b><?=ucwords(strtolower($recommendation->postalcode))?></b></span></p>
                        <p>Address: <span><b><?=ucwords(strtolower($recommendation->address))?></b></span></p>
                        <table class="table border bg-white">
                          <thead>
                            <tr>
                              <th>Criteria</th>
                              <th>Score</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Leadership Potential</th>
                              <td><?=$recommendation->leadership?>/5</td>
                            </tr>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Creativity</th>
                              <td><?=$recommendation->creativity?>/5</td>
                            </tr>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Resourcefullness</th>
                              <td><?=$recommendation->resourcefulness?>/5</td>
                            </tr>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Energy & Initiative</th>
                              <td><?=$recommendation->energy?>/5</td>
                            </tr>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Ability to work in a team</th>
                              <td><?=$recommendation->team?>/5</td>
                            </tr>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Oral Communication Skills in English Language</th>
                              <td><?=$recommendation->oral?>/5</td>
                            </tr>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Written Communication Skills in English Language</th>
                              <td><?=$recommendation->written?>/5</td>
                            </tr>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Presence</th>
                              <td><?=$recommendation->preference?>/5</td>
                            </tr>
                            <tr>
                              <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Analytic thinking & Reasoning</th>
                              <td><?=$recommendation->thinking?>/5</td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </section>
                    <?php endforeach; ?>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .col-md -->



        <div class="col-md-4">
          <div class="card shadow mb-4">
            <div class="card-body text-center">
              <div class="avatar avatar-xl">
               <img src="<?=BASE_URL?>img/passports/<?=$employee->photo?>" alt="..." class="avatar-img rounded-circle" style="width: 200px;">
              </div>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>FULLNAME -  <b><?=$employee->firstname.' '.$employee->surname.' '.$employee->othername?></b></li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>CODE - <b><?=$employee->code?></b></li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>EMAIL - <b><?=$employee->email?></b></li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>PHONE - <b><?=$employee->phone?></b></li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>GENDER - <b><?=$employee->gender->name?></b></li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>STATE - <b><?=$employee->state->name?></b></li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>LGA - <b><?=$employee->lga->name?></b></li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>ADDRESS - <b><?=$employee->address?></b></li>
              </ul>
            </div>
          </div>
        </div> <!-- .col-md -->
      </div> <!-- .col-md -->
    </div>
  </div> <!-- .col-12 -->
</div> <!-- .row -->





