<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Positioncategory $positioncategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Positioncategory'), ['action' => 'edit', $positioncategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Positioncategory'), ['action' => 'delete', $positioncategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positioncategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Positioncategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Positioncategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="positioncategories view large-9 medium-8 columns content">
    <h3><?= h($positioncategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($positioncategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($positioncategory->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Positions') ?></h4>
        <?php if (!empty($positioncategory->positions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Positioncategory Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($positioncategory->positions as $positions): ?>
            <tr>
                <td><?= h($positions->id) ?></td>
                <td><?= h($positions->positioncategory_id) ?></td>
                <td><?= h($positions->code) ?></td>
                <td><?= h($positions->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Positions', 'action' => 'view', $positions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Positions', 'action' => 'edit', $positions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positions', 'action' => 'delete', $positions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
