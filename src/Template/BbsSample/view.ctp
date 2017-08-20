<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BbsSample $bbsSample
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bbs Sample'), ['action' => 'edit', $bbsSample->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bbs Sample'), ['action' => 'delete', $bbsSample->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bbsSample->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bbs Sample'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bbs Sample'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bbsSample view large-9 medium-8 columns content">
    <h3><?= h($bbsSample->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bbsSample->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($bbsSample->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($bbsSample->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bbsSample->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($bbsSample->age) ?></td>
        </tr>
    </table>
</div>
