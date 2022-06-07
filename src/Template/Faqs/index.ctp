<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq[]|\Cake\Collection\CollectionInterface $faqs
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Faq'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="faqs index large-9 medium-8 columns content">
    <h3><?= __('Faqs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_added') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($faqs as $faq): ?>
            <tr>
                <td><?= $this->Number->format($faq->id) ?></td>
                <td><?= $this->Number->format($faq->status) ?></td>
                <td><?= h($faq->date_added) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $faq->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $faq->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id)]) ?>
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
</div> -->
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-12">
        <h2 class="page-title">FAQs</h2>
        <!--p> Tables with built-in bootstrap styles </p-->
        <div class="row">
        <!-- Bordered table -->
        <div class="col-md-12 my-4">
            <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">All FAQs</h5>
                
                <table class="table table-bordered table-hover mb-0">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $count = 0; 
                        foreach($faqs as $faq):
                        $count += 1;
                    ?>
                    <tr>
                    <td><?=$count?></td>
                    <td><?=$faq->question?></td>
                    <td class="text-center">
                        <!--?= $this->Html->link(__('VIEW'), ['action' => 'view', $event->id]) ?-->
                        <?= $this->Html->link(__('EDIT'), ['action' => 'edit', $faq->id]) ?> |
                        <?= $this->Form->postLink(__('DELETE'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id)]) ?>
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
            </div>
        </div> <!-- Bordered table -->
        </div> <!-- end section -->
    </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
