<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ref[]|\Cake\Collection\CollectionInterface $refs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ref'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="refs index large-9 medium-8 columns content">
    <h3><?= __('Refs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reffullname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('refemail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('refphone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('refjobtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('refcompany') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($refs as $ref): ?>
            <tr>
                <td><?= $this->Number->format($ref->id) ?></td>
                <td><?= $ref->has('employee') ? $this->Html->link($ref->employee->id, ['controller' => 'Employees', 'action' => 'view', $ref->employee->id]) : '' ?></td>
                <td><?= h($ref->reffullname) ?></td>
                <td><?= h($ref->refemail) ?></td>
                <td><?= h($ref->refphone) ?></td>
                <td><?= h($ref->refjobtitle) ?></td>
                <td><?= h($ref->refcompany) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ref->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ref->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ref->id)]) ?>
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
