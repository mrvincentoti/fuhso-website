<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lga[]|\Cake\Collection\CollectionInterface $lgas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lga'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lgas index large-9 medium-8 columns content">
    <h3><?= __('Lgas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lgas as $lga): ?>
            <tr>
                <td><?= $this->Number->format($lga->id) ?></td>
                <td><?= $lga->has('state') ? $this->Html->link($lga->state->name, ['controller' => 'States', 'action' => 'view', $lga->state->id]) : '' ?></td>
                <td><?= h($lga->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lga->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lga->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lga->id)]) ?>
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
