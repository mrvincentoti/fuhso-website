<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $team->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="teams form large-9 medium-8 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= __('Edit Team') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('desinition');
            echo $this->Form->control('image');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Add User</strong>
            </div>
            <div class="card-body">
            <?=$this->Flash->render()?>
                <div class="row">
                    <div class="col-md-12">
                         <?= $this->Form->create($team,['type'=>'file']) ?>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Fullname</label>
                                <?php
                                echo $this->Form->control('name', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Designation</label>
                                <?php
                                echo $this->Form->control('desinition', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Officer Type</label>
                                <select class="form-control" name="category" required>
                                    <option value="">--select--</option>
                                    <option value="1">Principal Officer</option>
                                    <option value="2">Council Members</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Image</label>
                                <?php
                                echo $this->Form->control('image', ['class'=>'form-control','label'=>false,'type'=>'file','required'=>false]);
                                ?>
                            </div>
                            <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div> <!-- /.col -->
                </div>
            </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>
