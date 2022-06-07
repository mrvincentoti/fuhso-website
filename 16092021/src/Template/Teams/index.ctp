<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team[]|\Cake\Collection\CollectionInterface $teams
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!--li class="heading"><?= __('Actions') ?></li-->
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<!--div class="teams index large-9 medium-8 columns content">
    <h3><?= __('Teams') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desinition') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teams as $team): ?>
            <tr>
                <td><?= $this->Number->format($team->id) ?></td>
                <td><?= h($team->name) ?></td>
                <td><?= h($team->desinition) ?></td>
                <td><?= h($team->image) ?></td>
                <td><?= h($team->created) ?></td>
                <td><?= $this->Number->format($team->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $team->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $team->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?>
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
</div-->

<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-12">
        <h2 class="page-title">Team Members</h2>
        <!--p> Tables with built-in bootstrap styles </p-->
        <div class="row">
        <!-- Bordered table -->
        <div class="col-md-12 my-4">
            <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">All Members</h5>
                
                <table class="table table-bordered table-hover mb-0">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Designation</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $count = 0; 
                        foreach($teams as $team):
                        $count += 1;
                    ?>
                    <tr>
                    <td><?=$count?></td>
                    <td><?=$team->name?></td>
                    <td><?=$team->desinition?></td>
                    <td class="text-center">
                        <!--?= $this->Html->link(__('VIEW'), ['action' => 'view', $event->id]) ?-->
                        <?= $this->Html->link(__('EDIT'), ['action' => 'edit', $team->id]) ?> |
                        <?= $this->Form->postLink(__('DELETE'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
            </div>
        </div> <!-- Bordered table -->
        </div> <!-- end section -->
    </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
