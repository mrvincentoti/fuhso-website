<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lga $lga
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lga->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lga->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lgas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lgas form large-9 medium-8 columns content">
    <?= $this->Form->create($lga) ?>
    <fieldset>
        <legend><?= __('Edit Lga') ?></legend>
        <?php
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
