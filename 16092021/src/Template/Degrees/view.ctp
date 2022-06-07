<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Degree $degree
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Degree'), ['action' => 'edit', $degree->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Degree'), ['action' => 'delete', $degree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $degree->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Degree'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="degrees view large-9 medium-8 columns content">
    <h3><?= h($degree->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Applicant') ?></th>
            <td><?= $degree->has('applicant') ? $this->Html->link($degree->applicant->id, ['controller' => 'Applicants', 'action' => 'view', $degree->applicant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($degree->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($degree->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= h($degree->subject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classofbsc') ?></th>
            <td><?= h($degree->classofbsc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($degree->id) ?></td>
        </tr>
    </table>
</div>
