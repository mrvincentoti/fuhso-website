<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Abouts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="abouts form large-9 medium-8 columns content">
    <?= $this->Form->create($about) ?>
    <fieldset>
        <legend><?= __('Add About') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('vision');
            echo $this->Form->control('mission');
            echo $this->Form->control('philosophy');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
