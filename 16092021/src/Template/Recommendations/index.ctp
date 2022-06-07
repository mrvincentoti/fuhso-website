<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recommendation[]|\Cake\Collection\CollectionInterface $recommendations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recommendation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recommendations index large-9 medium-8 columns content">
    <h3><?= __('Recommendations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organization') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relationship') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postalcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('leadership') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creativity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resourcefulness') ?></th>
                <th scope="col"><?= $this->Paginator->sort('energy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oral') ?></th>
                <th scope="col"><?= $this->Paginator->sort('written') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thinking') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recommendations as $recommendation): ?>
            <tr>
                <td><?= $this->Number->format($recommendation->id) ?></td>
                <td><?= $recommendation->has('employee') ? $this->Html->link($recommendation->employee->id, ['controller' => 'Employees', 'action' => 'view', $recommendation->employee->id]) : '' ?></td>
                <td><?= h($recommendation->firstname) ?></td>
                <td><?= h($recommendation->lastname) ?></td>
                <td><?= h($recommendation->organization) ?></td>
                <td><?= h($recommendation->position) ?></td>
                <td><?= h($recommendation->relationship) ?></td>
                <td><?= h($recommendation->telephone) ?></td>
                <td><?= h($recommendation->email) ?></td>
                <td><?= h($recommendation->country) ?></td>
                <td><?= h($recommendation->city) ?></td>
                <td><?= h($recommendation->postalcode) ?></td>
                <td><?= h($recommendation->address) ?></td>
                <td><?= $this->Number->format($recommendation->leadership) ?></td>
                <td><?= $this->Number->format($recommendation->creativity) ?></td>
                <td><?= $this->Number->format($recommendation->resourcefulness) ?></td>
                <td><?= $this->Number->format($recommendation->energy) ?></td>
                <td><?= $this->Number->format($recommendation->team) ?></td>
                <td><?= $this->Number->format($recommendation->oral) ?></td>
                <td><?= $this->Number->format($recommendation->written) ?></td>
                <td><?= $this->Number->format($recommendation->preference) ?></td>
                <td><?= $this->Number->format($recommendation->thinking) ?></td>
                <td><?= h($recommendation->date_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recommendation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recommendation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recommendation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recommendation->id)]) ?>
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
