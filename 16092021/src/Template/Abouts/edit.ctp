<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!--li class="heading"><?= __('Actions') ?></li-->
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $about->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Abouts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<!--div class="abouts form large-9 medium-8 columns content">
    <?= $this->Form->create($about) ?>
    <fieldset>
        <legend><?= __('Edit About') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('vision');
            echo $this->Form->control('mission');
            echo $this->Form->control('philosophy');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div-->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Add User</strong>
            </div>
            <div class="card-body">
            <?=$this->Flash->render()?>
                <div class="row">
                    <div class="col-md-12">
                         <?= $this->Form->create($about) ?>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Description</label>
                                <?php
                                echo $this->Form->control('description', ['class'=>'form-control','label'=>false, 'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Vision</label>
                                <?php
                                echo $this->Form->control('vision', ['class'=>'form-control','label'=>false,'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Mission</label>
                                <?php
                                echo $this->Form->control('mission', ['class'=>'form-control','label'=>false,'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Philosophy</label>
                                <?php
                                echo $this->Form->control('philosophy', ['class'=>'form-control','label'=>false,'type'=>'textarea']);
                                ?>
                            </div>
                            <!--div class="form-group mb-3">
                                <label for="simpleinput">Image</label>
                                <?php
                                echo $this->Form->control('image', ['class'=>'form-control','label'=>false,'type'=>'file','required'=>false]);
                                ?>
                            </div-->
                            <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div> <!-- /.col -->
                </div>
            </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>
