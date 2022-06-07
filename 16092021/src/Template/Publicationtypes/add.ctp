<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicationtype $publicationtype
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Publicationtypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Publicationcategories'), ['controller' => 'Publicationcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicationcategory'), ['controller' => 'Publicationcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publicationtypes form large-9 medium-8 columns content">
    <?= $this->Form->create($publicationtype) ?>
    <fieldset>
        <legend><?= __('Add Publicationtype') ?></legend>
        <?php
            echo $this->Form->control('publicationcategory_id', ['options' => $publicationcategories]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
