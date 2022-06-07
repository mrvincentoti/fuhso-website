<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Faqs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="faqs form large-9 medium-8 columns content">
    <?= $this->Form->create($faq) ?>
    <fieldset>
        <legend><?= __('Add Faq') ?></legend>
        <?php
            echo $this->Form->control('question');
            echo $this->Form->control('answer');
            echo $this->Form->control('status');
            echo $this->Form->control('date_added');
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
                <strong class="card-title">Add Faq</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->Form->create($faq) ?>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Question</label>
                                <?php
                                    echo $this->Form->control('question', 
                                        [
                                            'class'=>'form-control ckeditor',
                                            'label'=>false, 'type'=>'textarea'
                                        ]
                                    );
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Answer</label>
                                <?php
                                    echo $this->Form->control('answer', 
                                        [
                                            'class'=>'form-control ckeditor',
                                            'label'=>false,
                                            'type'=>'textarea'
                                        ]
                                    );
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
