<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diploma $diploma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Diploma'), ['action' => 'edit', $diploma->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Diploma'), ['action' => 'delete', $diploma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diploma->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diplomas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diploma'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diplomas view large-9 medium-8 columns content">
    <h3><?= h($diploma->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Applicant') ?></th>
            <td><?= $diploma->has('applicant') ? $this->Html->link($diploma->applicant->id, ['controller' => 'Applicants', 'action' => 'view', $diploma->applicant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($diploma->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($diploma->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= h($diploma->subject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classofdiploma') ?></th>
            <td><?= h($diploma->classofdiploma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($diploma->id) ?></td>
        </tr>
    </table>
</div>
