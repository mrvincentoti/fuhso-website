<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Positioncategory $positioncategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $positioncategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $positioncategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Positioncategories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="positioncategories form large-9 medium-8 columns content">
    <?= $this->Form->create($positioncategory) ?>
    <fieldset>
        <legend><?= __('Edit Positioncategory') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
