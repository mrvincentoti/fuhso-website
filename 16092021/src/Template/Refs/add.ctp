<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ref $ref
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Refs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="refs form large-9 medium-8 columns content">
    <?= $this->Form->create($ref) ?>
    <fieldset>
        <legend><?= __('Add Ref') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('reffullname');
            echo $this->Form->control('refemail');
            echo $this->Form->control('refphone');
            echo $this->Form->control('refjobtitle');
            echo $this->Form->control('refcompany');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
