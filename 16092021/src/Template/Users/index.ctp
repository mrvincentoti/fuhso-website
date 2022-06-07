<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!--li class="heading"><?= __('Actions') ?></li-->
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <!--li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li-->
    </ul>
</nav>
<!--div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('applicant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $user->has('applicant') ? $this->Html->link($user->applicant->id, ['controller' => 'Applicants', 'action' => 'view', $user->applicant->id]) : '' ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= $this->Number->format($user->role_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
        <h2 class="page-title">Users</h2>
        <!--p> Tables with built-in bootstrap styles </p-->
        <div class="row">
        <!-- Bordered table -->
        <div class="col-md-12 my-4">
            <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">All Users</h5>
                
                <table class="table table-bordered table-hover mb-0">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Date Added</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $count = 0; 
                        foreach($users as $user):
                        $count += 1;
                    ?>
                    <tr>
                    <td><?=$count?></td>
                    <td><?=$user->username?></td>
                    <td><?=$user->email?></td>
                    <td>
                        <?php
                            if($user->role_id == 1){
                                echo 'Admin';
                            }else{
                                echo 'User';
                            }
                        ?>
                    </td>
                    <td><?=date('M d, Y', strtotime($user->created))?></td>
                    <td class="text-center">
                        <!--?= $this->Html->link(__('VIEW'), ['action' => 'view', $event->id]) ?-->
                        <?= $this->Html->link(__('EDIT'), ['action' => 'edit', $user->id]) ?> |
                        <?= $this->Form->postLink(__('DELETE'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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