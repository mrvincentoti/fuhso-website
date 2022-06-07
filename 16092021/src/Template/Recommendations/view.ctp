<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recommendation $recommendation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recommendation'), ['action' => 'edit', $recommendation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recommendation'), ['action' => 'delete', $recommendation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recommendation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recommendations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recommendation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recommendations view large-9 medium-8 columns content">
    <h3><?= h($recommendation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $recommendation->has('employee') ? $this->Html->link($recommendation->employee->id, ['controller' => 'Employees', 'action' => 'view', $recommendation->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($recommendation->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($recommendation->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organization') ?></th>
            <td><?= h($recommendation->organization) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= h($recommendation->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relationship') ?></th>
            <td><?= h($recommendation->relationship) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($recommendation->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($recommendation->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($recommendation->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($recommendation->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postalcode') ?></th>
            <td><?= h($recommendation->postalcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($recommendation->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recommendation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Leadership') ?></th>
            <td><?= $this->Number->format($recommendation->leadership) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creativity') ?></th>
            <td><?= $this->Number->format($recommendation->creativity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resourcefulness') ?></th>
            <td><?= $this->Number->format($recommendation->resourcefulness) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Energy') ?></th>
            <td><?= $this->Number->format($recommendation->energy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $this->Number->format($recommendation->team) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oral') ?></th>
            <td><?= $this->Number->format($recommendation->oral) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Written') ?></th>
            <td><?= $this->Number->format($recommendation->written) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preference') ?></th>
            <td><?= $this->Number->format($recommendation->preference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thinking') ?></th>
            <td><?= $this->Number->format($recommendation->thinking) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Created') ?></th>
            <td><?= h($recommendation->date_created) ?></td>
        </tr>
    </table>
</div>
