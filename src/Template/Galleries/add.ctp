<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $gallery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Galleries'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="galleries form large-9 medium-8 columns content">
    <?= $this->Form->create($gallery) ?>
    <fieldset>
        <legend><?= __('Add Gallery') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('image');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
