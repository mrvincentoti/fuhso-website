<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deg $deg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Degs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="degs form large-9 medium-8 columns content">
    <?= $this->Form->create($deg) ?>
    <fieldset>
        <legend><?= __('Add Deg') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
