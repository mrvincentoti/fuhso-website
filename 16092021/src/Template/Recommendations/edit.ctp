<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recommendation $recommendation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recommendation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recommendation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recommendations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recommendations form large-9 medium-8 columns content">
    <?= $this->Form->create($recommendation) ?>
    <fieldset>
        <legend><?= __('Edit Recommendation') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname');
            echo $this->Form->control('organization');
            echo $this->Form->control('position');
            echo $this->Form->control('relationship');
            echo $this->Form->control('telephone');
            echo $this->Form->control('email');
            echo $this->Form->control('country');
            echo $this->Form->control('city');
            echo $this->Form->control('postalcode');
            echo $this->Form->control('address');
            echo $this->Form->control('leadership');
            echo $this->Form->control('creativity');
            echo $this->Form->control('resourcefulness');
            echo $this->Form->control('energy');
            echo $this->Form->control('team');
            echo $this->Form->control('oral');
            echo $this->Form->control('written');
            echo $this->Form->control('preference');
            echo $this->Form->control('thinking');
            echo $this->Form->control('date_created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
