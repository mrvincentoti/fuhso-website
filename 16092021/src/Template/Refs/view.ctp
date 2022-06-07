<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ref $ref
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ref'), ['action' => 'edit', $ref->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ref'), ['action' => 'delete', $ref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ref->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Refs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ref'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="refs view large-9 medium-8 columns content">
    <h3><?= h($ref->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $ref->has('employee') ? $this->Html->link($ref->employee->id, ['controller' => 'Employees', 'action' => 'view', $ref->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reffullname') ?></th>
            <td><?= h($ref->reffullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Refemail') ?></th>
            <td><?= h($ref->refemail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Refphone') ?></th>
            <td><?= h($ref->refphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Refjobtitle') ?></th>
            <td><?= h($ref->refjobtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Refcompany') ?></th>
            <td><?= h($ref->refcompany) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ref->id) ?></td>
        </tr>
    </table>
</div>
