<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Waec $waec
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Waec'), ['action' => 'edit', $waec->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Waec'), ['action' => 'delete', $waec->id], ['confirm' => __('Are you sure you want to delete # {0}?', $waec->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Waecs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Waec'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="waecs view large-9 medium-8 columns content">
    <h3><?= h($waec->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Applicant') ?></th>
            <td><?= $waec->has('applicant') ? $this->Html->link($waec->applicant->id, ['controller' => 'Applicants', 'action' => 'view', $waec->applicant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($waec->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($waec->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($waec->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numberofcredit') ?></th>
            <td><?= $this->Number->format($waec->numberofcredit) ?></td>
        </tr>
    </table>
</div>
