<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deg $deg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deg'), ['action' => 'edit', $deg->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deg'), ['action' => 'delete', $deg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deg->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Degs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deg'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="degs view large-9 medium-8 columns content">
    <h3><?= h($deg->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($deg->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($deg->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($deg->id) ?></td>
        </tr>
    </table>
</div>
