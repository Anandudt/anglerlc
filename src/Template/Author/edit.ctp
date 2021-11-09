<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $author->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $author->id)]
            )
        ?></li>
         <li><?= $this->Html->link(__('Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Publishers'), ['controller' => 'Publishers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Author'), ['controller' => 'Author', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="author form large-9 medium-8 columns content">
    <?= $this->Form->create($author) ?>
    <fieldset>
        <legend><?= __('Edit Author') ?></legend>
        <?php
            echo $this->Form->control('aut_name');
            echo $this->Form->control('aut_details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
