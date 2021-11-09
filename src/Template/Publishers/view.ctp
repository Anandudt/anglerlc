<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Publisher $publisher
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Publishers'), ['controller' => 'Publishers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Author'), ['controller' => 'Author', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="publishers view large-9 medium-8 columns content">
    <h3><?= h($publisher->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pub Name') ?></th>
            <td><?= h($publisher->pub_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pub Details') ?></th>
            <td><?= h($publisher->pub_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publisher->id) ?></td>
        </tr>
    </table>
</div>
