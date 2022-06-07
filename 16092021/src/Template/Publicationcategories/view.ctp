<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicationcategory $publicationcategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publicationcategory'), ['action' => 'edit', $publicationcategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publicationcategory'), ['action' => 'delete', $publicationcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicationcategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publicationcategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicationcategory'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publicationcategories view large-9 medium-8 columns content">
    <h3><?= h($publicationcategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($publicationcategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publicationcategory->id) ?></td>
        </tr>
    </table>
</div>
