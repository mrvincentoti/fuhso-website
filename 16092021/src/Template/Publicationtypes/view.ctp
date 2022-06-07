<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicationtype $publicationtype
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publicationtype'), ['action' => 'edit', $publicationtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publicationtype'), ['action' => 'delete', $publicationtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicationtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publicationtypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicationtype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publicationcategories'), ['controller' => 'Publicationcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicationcategory'), ['controller' => 'Publicationcategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publicationtypes view large-9 medium-8 columns content">
    <h3><?= h($publicationtype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Publicationcategory') ?></th>
            <td><?= $publicationtype->has('publicationcategory') ? $this->Html->link($publicationtype->publicationcategory->name, ['controller' => 'Publicationcategories', 'action' => 'view', $publicationtype->publicationcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($publicationtype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publicationtype->id) ?></td>
        </tr>
    </table>
</div>
