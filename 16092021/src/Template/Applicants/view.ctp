<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Applicant $applicant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Applicant'), ['action' => 'edit', $applicant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Applicant'), ['action' => 'delete', $applicant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Applicants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applicant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lgas'), ['controller' => 'Lgas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lga'), ['controller' => 'Lgas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applicants view large-9 medium-8 columns content">
    <h3><?= h($applicant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($applicant->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($applicant->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middlename') ?></th>
            <td><?= h($applicant->middlename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($applicant->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $applicant->has('state') ? $this->Html->link($applicant->state->name, ['controller' => 'States', 'action' => 'view', $applicant->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lga') ?></th>
            <td><?= $applicant->has('lga') ? $this->Html->link($applicant->lga->name, ['controller' => 'Lgas', 'action' => 'view', $applicant->lga->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Town') ?></th>
            <td><?= h($applicant->town) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($applicant->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($applicant->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $applicant->has('course') ? $this->Html->link($applicant->course->name, ['controller' => 'Courses', 'action' => 'view', $applicant->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($applicant->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($applicant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($applicant->status) ?></td>
        </tr>
    </table>
</div>
