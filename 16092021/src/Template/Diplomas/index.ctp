<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diploma[]|\Cake\Collection\CollectionInterface $diplomas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Diploma'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diplomas index large-9 medium-8 columns content">
    <h3><?= __('Diplomas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('applicant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classofdiploma') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diplomas as $diploma): ?>
            <tr>
                <td><?= $this->Number->format($diploma->id) ?></td>
                <td><?= $diploma->has('applicant') ? $this->Html->link($diploma->applicant->id, ['controller' => 'Applicants', 'action' => 'view', $diploma->applicant->id]) : '' ?></td>
                <td><?= h($diploma->name) ?></td>
                <td><?= h($diploma->year) ?></td>
                <td><?= h($diploma->subject) ?></td>
                <td><?= h($diploma->classofdiploma) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $diploma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diploma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diploma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diploma->id)]) ?>
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
