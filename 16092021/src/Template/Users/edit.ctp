<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!_-li class="heading"><?= __('Actions') ?></li-->
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <!--li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li-->
    </ul>
</nav>
<!--div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('applicant_id', ['options' => $applicants, 'empty' => true]);
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('role_id');
            echo $this->Form->control('roles._ids', ['options' => $roles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div-->


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Edit User</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                         <?= $this->Form->create($user) ?>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Username</label>
                                <?php
                                echo $this->Form->control('username', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Email</label>
                                <?php
                                echo $this->Form->control('email', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Password</label>
                                <?php
                                echo $this->Form->control('password', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Role</label>
                                <?php
                                 echo $this->Form->control('role_id', ['options' => $roles,'class'=>'form-control','label'=>false]);
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
