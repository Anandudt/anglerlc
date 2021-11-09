  <?php echo $this->Html->script('typeahead.min');
echo $this->fetch('script');
    ?>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#pub_date').datetimepicker({locale:'<?php echo 'en';?>',format:'<?php echo 'YYYY-MM-DD';?>'});
         });
</script>   
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Edit Books');?></div>
        <div class="panel-body">
		 <?= $this->Form->create($book) ?>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Book Name');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
				   <?php echo $this->Form->input('book_name',array('label' => false,'class'=>'form-control','placeholder'=>__('Book Name'),'div'=>false));?>
                </div>
            </div>
			<div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Volume');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('volume',array('label' => false,'class'=>'form-control','placeholder'=>__('Volume'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Category');?><span class="text-danger"> </span></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('category',array('label' => false,'class'=>'form-control','placeholder'=>__('Category'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Sub Category');?><span class="text-danger"> </span></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('subcategory',array('label' => false,'class'=>'form-control','placeholder'=>__('Sub Category'),'div'=>false));?>
                </div>
            </div>
			<div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Price');?><span class="text-danger"> </span></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('price',array('label' => false,'class'=>'form-control','placeholder'=>__('Price'),'div'=>false));?>
                </div>
            </div>
			<div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Author');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                   <?php  echo $this->Form->select('aut_id',$author,array('style'=>'width:100%','class'=>'select2','empty'=>__('Select Author')));  ?>
                </div>
            </div>
			<div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Publisher');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                   <?php  echo $this->Form->select('pub_id',$publishers,array('style'=>'width:100%','class'=>'select2','empty'=>__('Select Publisher')));  ?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Published Date');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-2">
                <div class="input-group date" id="pub_date">                        
                    <?php echo $this->Form->input('pub_date',array('type'=>'text','label' => false,'class'=>'form-control','div'=>false));?>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
            </div>
            <div class="form-group text-left">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> <?php echo __('Save');?></button>
                    <?php echo $this->Html->link('<span class="fa fa-close"></span> '.__('Close'),array('controller'=>'Books','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
