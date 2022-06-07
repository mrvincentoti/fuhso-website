<div class="card shadow">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('venue') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr>
                    <td><?= $this->Number->format($event->id) ?></td>
                    <td><?= h($event->title) ?></td>
                    <td><?= h($event->image) ?></td>
                    <td><?= h($event->date) ?></td>
                    <td><?= h($event->time) ?></td>
                    <td><?= h($event->venue) ?></td>
                    <td><?= $this->Number->format($event->status) ?></td>
                    <td><?= $this->Number->format($event->type) ?></td>
                    <td><?= $this->Number->format($event->featured) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
