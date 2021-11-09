<div id="resultDiv"> 
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo __('Books');?></h3>
             </div>
            <div class="box-body">
        <div class="row">
        <div class="col-md-12">
            <div class="btn-group">
            <?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;'.__('Add New Book'),array('controller'=>'Books','action'=>'add'),array('escape'=>false,'class'=>'btn btn-success'));?>
              

            </div>
        </div>
        
       </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
             <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><?php echo __('Books Data');?></h3>
                </div><!-- /.box-header -->
                 <div class="box-body table-responsive">
                  <!--<div class="box-body table-responsive no-padding">-->
                  <table id="example2" class="table table-bordered table-hover">
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
                 <!--</div>-->
                <?php echo $this->Form->end();?>
                </div><!-- /.box-body -->
                </div><!-- /.box -->
             </div><!-- /.col -->
          </div><!-- /.row -->
         

        </section><!-- /.content -->
      
   
  </div><!-- /.ajax div -->
  
  <script>
    $('document').ready(function(){
         $('#search').keyup(function(){
            var searchkey = $(this).val();
            searchTags( searchkey );
         });

        function searchTags( keyword ){
        var data = keyword;
        $.ajax({
                    method: 'get',
                    url : "<?php echo $this->Url->build( [ 'controller' => 'Books', 'action' => 'Search' ] ); ?>",
                    data: {keyword:data},

                    success: function( response )
                    {       
                       $( '.table-content' ).html(response);
                    }
                });
        };
    });
</script>
  
  
 




