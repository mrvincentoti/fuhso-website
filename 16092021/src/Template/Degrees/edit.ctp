<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Degree $degree
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $degree->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $degree->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="degrees form large-9 medium-8 columns content">
    <?= $this->Form->create($degree) ?>
    <fieldset>
        <legend><?= __('Edit Degree') ?></legend>
        <?php
            echo $this->Form->control('applicant_id', ['options' => $applicants]);
            echo $this->Form->control('name');
            echo $this->Form->control('year');
            echo $this->Form->control('subject');
            echo $this->Form->control('classofbsc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
