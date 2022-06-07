<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Positioncategory[]|\Cake\Collection\CollectionInterface $positioncategories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Positioncategory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="positioncategories index large-9 medium-8 columns content">
    <h3><?= __('Positioncategories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($positioncategories as $positioncategory): ?>
            <tr>
                <td><?= $this->Number->format($positioncategory->id) ?></td>
                <td><?= h($positioncategory->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $positioncategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $positioncategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $positioncategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positioncategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
