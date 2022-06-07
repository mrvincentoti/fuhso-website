<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<!--nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></li>
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
<div class="employees index large-9 medium-8 columns content">
    <h3><?= __('Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salutation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('othername') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qualification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('degree_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('experience') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yearofteaching') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastposition') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publication') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lga_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $this->Number->format($employee->id) ?></td>
                <td><?= h($employee->code) ?></td>
                <td><?= h($employee->salutation) ?></td>
                <td><?= h($employee->firstname) ?></td>
                <td><?= h($employee->surname) ?></td>
                <td><?= h($employee->othername) ?></td>
                <td><?= $employee->has('gender') ? $this->Html->link($employee->gender->name, ['controller' => 'Genders', 'action' => 'view', $employee->gender->id]) : '' ?></td>
                <td><?= h($employee->dob) ?></td>
                <td><?= $this->Number->format($employee->age) ?></td>
                <td><?= $employee->has('position') ? $this->Html->link($employee->position->name, ['controller' => 'Positions', 'action' => 'view', $employee->position->id]) : '' ?></td>
                <td><?= h($employee->qualification) ?></td>
                <td><?= $employee->has('degree') ? $this->Html->link($employee->degree->name, ['controller' => 'Degrees', 'action' => 'view', $employee->degree->id]) : '' ?></td>
                <td><?= h($employee->experience) ?></td>
                <td><?= $this->Number->format($employee->yearofteaching) ?></td>
                <td><?= h($employee->lastposition) ?></td>
                <td><?= $this->Number->format($employee->publication) ?></td>
                <td><?= $employee->has('state') ? $this->Html->link($employee->state->name, ['controller' => 'States', 'action' => 'view', $employee->state->id]) : '' ?></td>
                <td><?= $employee->has('lga') ? $this->Html->link($employee->lga->name, ['controller' => 'Lgas', 'action' => 'view', $employee->lga->id]) : '' ?></td>
                <td><?= h($employee->phone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div-->


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-2 page-title">Applicants</h2>
                </div>
                <div class="col-md-6 text-right">
                    <!--?= $this->Html->link('export', 
                        [
                            'controller' => 'Employees', 
                            'action' => 'export',
                        ],['class'=>'']) 
                    ?-->
                    <!--?=
                        $this->Html->link(
                        $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Export to excel",
                        ['controller'=>'employees', 'action'=>'export'],
                        ['class'=>'nav-link pl-3', 'escape'=> false]
                        );
                    ?-->
                    <button type="button" class="btn mb-2 btn-outline-success" data-toggle="modal" data-target="#verticalModal">
                        <span class="fe fe-download fe-16"><span> Export to excel</span></span>
                    </button>
                </div>
            </div>
            <!--p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. </p-->
            <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                    <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                            <th></th>
                            <th>#</th>
                            <th>Name</th>
                            <!--th>Phone</th-->
                            <th>Applied For</th>
                            <th>Last Position</th>
                            
                            <!--th>Address</th-->
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($employees as $applicant): ?>
                            <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                                </div>
                            </td>
                            <td><?=$applicant->code?></td>
                            <td><?=$applicant->firstname.' '.$applicant->surname. ' '.$applicant->othername?></td>
                            <!--td><?=$applicant->phone?></td-->
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
                </div> <!-- simple table -->
            </div> <!-- end section -->

            <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticalModalTitle">Export criteria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= $this->Form->create($employee, ['url' => ['action' => 'export']]) ?>
                            <div class="form-group mb-3">
                                <label for="example-select">CATEGORY</label>
                                <?php
                                echo $this->Form->control('positioncategory_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                    'required'=>false, 'label'=>false, 'placeholder'=>'','options'=>$positioncategories, 'empty'=>'Select Position',
                                    'onChange'=>'getPosition(this.value); hideExp(this.value);'
                                    ]);
                                ?>
                            </div>
                            <div class="form-group mb-3" id="positiondiv">
                                <label for="example-select">POSITION APPLIED FOR</label>
                                <?php 
                                    echo $this->Form->control('position_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                                        'required'=>false, 'label'=>false, 'placeholder'=>'','options'=>$positions, 'empty'=>'Select Position'
                                        ]);
                                ?> 
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Cancel</button>
                        <?= $this->Form->button(__('Export'),['class'=>'btn mb-2 btn-primary']) ?>
                        <!--button type="button" class="btn mb-2 btn-primary">Save changes</button-->
                        <!--?= $this->Html->link('Export', 
                            [
                                'controller' => 'Employees', 
                                'action' => 'export',
                            ],['class'=>'btn mb-2 btn-primary']) 
                        ?-->
                    </div>
                    <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->

<script type="text/javascript">
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
</script>