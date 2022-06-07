<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication $publication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publication'), ['action' => 'edit', $publication->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publication'), ['action' => 'delete', $publication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publication->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publication'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publicationcategories'), ['controller' => 'Publicationcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicationcategory'), ['controller' => 'Publicationcategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publications view large-9 medium-8 columns content">
    <h3><?= h($publication->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Publicationcategory') ?></th>
            <td><?= $publication->has('publicationcategory') ? $this->Html->link($publication->publicationcategory->name, ['controller' => 'Publicationcategories', 'action' => 'view', $publication->publicationcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($publication->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publication->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicationnumber') ?></th>
            <td><?= $this->Number->format($publication->publicationnumber) ?></td>
        </tr>
    </table>
</div>
