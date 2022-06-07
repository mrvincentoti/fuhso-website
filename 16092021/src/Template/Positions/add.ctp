<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?></li>
        <!--li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li-->
    </ul>
</nav>
<!--div class="positions form large-9 medium-8 columns content">
    <?= $this->Form->create($position) ?>
    <fieldset>
        <legend><?= __('Add Position') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div-->

<div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3 mb-4">
        <div class="card shadow">
        <?= $this->Form->create($position) ?>
            <div class="card-body">
                <div class="form-group mb-3">
                <label for="example-select">Category</label>
                <?php echo $this->Form->control('positioncategory_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
                    'required'=>true, 'label'=>false, 'placeholder'=>'','options'=>$positioncategories, 'empty'=>'Select Category'
                    ]);
                ?>
                </div>
                <div class="form-group mb-3">
                    <label for="simpleinput">Code</label>
                    <?php
                        echo $this->Form->control('code', ['class'=>'form-control','label'=>false]);
                    ?>
                </div>
                <div class="form-group mb-3">
                    <label for="simpleinput">Name</label>
                    <?php
                        echo $this->Form->control('name', ['class'=>'form-control','label'=>false]);
                    ?>
                </div>
                <?= $this->Form->button(__('Submit')) ?>
            </div> <!-- /.card-body -->
        <?= $this->Form->end() ?>
        </div> <!-- /.card -->
    </div>
    </div>
</div>
