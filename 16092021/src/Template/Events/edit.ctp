<style type="text/css">
    input[type="select"] {
        width: 33.33%;
    }
</style>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<!--div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('image');
            echo $this->Form->control('created_date');
            echo $this->Form->control('status');
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
                <strong class="card-title">Edit Event</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->Form->create($event,['type'=>'file']) ?>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Title</label>
                                <?php
                                echo $this->Form->control('title', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Description</label>
                                <?php
                                echo $this->Form->control('description', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Image</label>
                                <?php
                                echo $this->Form->control('image', ['type'=>'file','class'=>'form-control','label'=>false,'required'=>false]);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Date</label>
                                <?php
                                echo $this->Form->control('date', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="simpleinput">Time</label>
                                <?php
                                echo $this->Form->control('time', ['class'=>'form-control','label'=>false]);
                                ?>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="simpleinput">Venue</label>
                                <?php
                                echo $this->Form->control('venue', ['class'=>'form-control','label'=>false]);
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
