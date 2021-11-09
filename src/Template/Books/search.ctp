<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pub_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aut_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('volume') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subcategory') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pub_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $this->Number->format($book->id) ?></td>
                <td><?= h($book->book_name) ?></td>
                <td><?= $book->has('publisher') ? $this->Html->link($book->publisher->pub_name, ['controller' => 'Publishers', 'action' => 'view', $book->publisher->id]) : '' ?></td>
                <td><?= $book->has('author') ? $this->Html->link($book->author->aut_name, ['controller' => 'Author', 'action' => 'view', $book->author->id]) : '' ?></td>
                <td><?= h($book->volume) ?></td>
                <td><?= h($book->category) ?></td>
                <td><?= h($book->subcategory) ?></td>
                <td><?= $this->Number->format($book->price) ?></td>
                <td><?= h($book->pub_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $book->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?>
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
	
