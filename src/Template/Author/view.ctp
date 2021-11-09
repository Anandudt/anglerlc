<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Author $author
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
<div class="author view large-9 medium-8 columns content">
    <h3><?= h($author->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aut Name') ?></th>
            <td><?= h($author->aut_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aut Details') ?></th>
            <td><?= h($author->aut_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($author->id) ?></td>
        </tr>
    </table>
</div>
