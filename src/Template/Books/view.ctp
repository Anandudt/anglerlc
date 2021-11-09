<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Book $book
  */
?>

<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Book Name') ?></th>
            <td><?= h($book->book_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publisher') ?></th>
            <td><?= $book->has('publisher') ? $this->Html->link($book->publisher->pub_name, ['controller' => 'Publishers', 'action' => 'view', $book->publisher->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= $book->has('author') ? $this->Html->link($book->author->aut_name, ['controller' => 'Author', 'action' => 'view', $book->author->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Volume') ?></th>
            <td><?= h($book->volume) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($book->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subcategory') ?></th>
            <td><?= h($book->subcategory) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($book->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($book->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pub Date') ?></th>
            <td><?= h($book->pub_date) ?></td>
        </tr>
		<tr>
            <th scope="row"><?= __('Shops') ?></th>
            <td><?php
	foreach ($book->shops as $shop)
	{
		echo $shop->shop_name.', ';
	}
	
	?></td>
        </tr>
    </table>
	
	
</div>
