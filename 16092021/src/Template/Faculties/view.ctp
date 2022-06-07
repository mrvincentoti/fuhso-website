<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Faculty'), ['action' => 'edit', $faculty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Faculty'), ['action' => 'delete', $faculty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Faculties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faculty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="faculties view large-9 medium-8 columns content">
    <h3><?= h($faculty->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($faculty->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($faculty->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($faculty->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Applicants') ?></h4>
        <?php if (!empty($faculty->applicants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Surname') ?></th>
                <th scope="col"><?= __('Fullname') ?></th>
                <th scope="col"><?= __('Middlename') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Lga Id') ?></th>
                <th scope="col"><?= __('Town') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Faculty Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Position Id') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Date Applied') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($faculty->applicants as $applicants): ?>
            <tr>
                <td><?= h($applicants->id) ?></td>
                <td><?= h($applicants->surname) ?></td>
                <td><?= h($applicants->fullname) ?></td>
                <td><?= h($applicants->middlename) ?></td>
                <td><?= h($applicants->dob) ?></td>
                <td><?= h($applicants->state_id) ?></td>
                <td><?= h($applicants->lga_id) ?></td>
                <td><?= h($applicants->town) ?></td>
                <td><?= h($applicants->phone) ?></td>
                <td><?= h($applicants->email) ?></td>
                <td><?= h($applicants->faculty_id) ?></td>
                <td><?= h($applicants->course_id) ?></td>
                <td><?= h($applicants->position_id) ?></td>
                <td><?= h($applicants->gender) ?></td>
                <td><?= h($applicants->status) ?></td>
                <td><?= h($applicants->date_applied) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Applicants', 'action' => 'view', $applicants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Applicants', 'action' => 'edit', $applicants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applicants', 'action' => 'delete', $applicants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Courses') ?></h4>
        <?php if (!empty($faculty->courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Faculty Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($faculty->courses as $courses): ?>
            <tr>
                <td><?= h($courses->id) ?></td>
                <td><?= h($courses->faculty_id) ?></td>
                <td><?= h($courses->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
