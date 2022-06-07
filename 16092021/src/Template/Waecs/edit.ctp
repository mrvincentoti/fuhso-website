<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Waec $waec
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $waec->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $waec->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Waecs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="waecs form large-9 medium-8 columns content">
    <?= $this->Form->create($waec) ?>
    <fieldset>
        <legend><?= __('Edit Waec') ?></legend>
        <?php
            echo $this->Form->control('applicant_id', ['options' => $applicants]);
            echo $this->Form->control('name');
            echo $this->Form->control('year');
            echo $this->Form->control('numberofcredit');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
