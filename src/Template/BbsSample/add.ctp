<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bbs Sample'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bbsSample form large-9 medium-8 columns content">
    <?= $this->Form->create($bbsSample) ?>
    <fieldset>
        <legend><?= __('Add Bbs Sample') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('age');
            echo $this->Form->control('address');
            echo $this->Form->control('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
