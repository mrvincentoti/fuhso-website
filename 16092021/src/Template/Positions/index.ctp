<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position[]|\Cake\Collection\CollectionInterface $positions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?></li>
        <!--li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li-->
    </ul>
</nav>
<!--div class="positions index large-9 medium-8 columns content">
    <h3><?= __('Positions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $this->Number->format($position->id) ?></td>
                <td><?= h($position->code) ?></td>
                <td><?= h($position->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $position->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $position->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $position->id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id)]) ?>
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
                    <!--button type="button" class="btn mb-2 btn-outline-success" data-toggle="modal" data-target="#verticalModal">
                        <span class="fe fe-download fe-16"><span> Export to excel</span></span>
                    </button-->
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
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $count = 0; foreach ($positions as $position): $count += 1;?>
                            <tr>
                            <td><?=$count?></td>
                            <td><?=$position->code?></td>
                            <td><?=$position->name?></td>
                            <td>
                                <!--button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <!--?= $this->Html->link(__('View'), ['action' => 'view', $position->id],['class'=>'dropdown-item']) ?>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                                </div-->
                                <!--?= $this->Html->link(__('View details'), ['action' => 'view', $position->id],['class'=>'btn btn-outline-success']) ?-->
                                <!--?= $this->Html->link(__('View'), ['action' => 'view', $position->id]) ?-->
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $position->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $position->id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id)]) ?>
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
</div> 