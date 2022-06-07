<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($course->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Applicants') ?></h4>
        <?php if (!empty($course->applicants)): ?>
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
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->applicants as $applicants): ?>
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
                <td><?= h($applicants->course_id) ?></td>
                <td><?= h($applicants->gender) ?></td>
                <td><?= h($applicants->status) ?></td>
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
</div>
