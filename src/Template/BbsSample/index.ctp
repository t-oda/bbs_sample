<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BbsSample[]|\Cake\Collection\CollectionInterface $bbsSample
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bbs Sample'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bbsSample index large-9 medium-8 columns content">
    <h3><?= __('Bbs Sample') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bbsSample as $bbsSample): ?>
            <tr>
                <td><?= $this->Number->format($bbsSample->id) ?></td>
                <td><?= h($bbsSample->name) ?></td>
                <td><?= $this->Number->format($bbsSample->age) ?></td>
                <td><?= h($bbsSample->address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bbsSample->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bbsSample->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bbsSample->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bbsSample->id)]) ?>
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
