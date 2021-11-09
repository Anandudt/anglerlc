<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Publisher[]|\Cake\Collection\CollectionInterface $publishers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Publisher'), ['action' => 'add']) ?></li>
		 <li><?= $this->Html->link(__('Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Publishers'), ['controller' => 'Publishers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Author'), ['controller' => 'Author', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="publishers index large-9 medium-8 columns content">
    <h3><?= __('Publishers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pub_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pub_details') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publishers as $publisher): ?>
            <tr>
                <td><?= $this->Number->format($publisher->id) ?></td>
                <td><?= h($publisher->pub_name) ?></td>
                <td><?= h($publisher->pub_details) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publisher->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publisher->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publisher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]) ?>
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
