<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Waec[]|\Cake\Collection\CollectionInterface $waecs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Waec'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="waecs index large-9 medium-8 columns content">
    <h3><?= __('Waecs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('applicant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numberofcredit') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($waecs as $waec): ?>
            <tr>
                <td><?= $this->Number->format($waec->id) ?></td>
                <td><?= $waec->has('applicant') ? $this->Html->link($waec->applicant->id, ['controller' => 'Applicants', 'action' => 'view', $waec->applicant->id]) : '' ?></td>
                <td><?= h($waec->name) ?></td>
                <td><?= h($waec->year) ?></td>
                <td><?= $this->Number->format($waec->numberofcredit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $waec->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $waec->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $waec->id], ['confirm' => __('Are you sure you want to delete # {0}?', $waec->id)]) ?>
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
