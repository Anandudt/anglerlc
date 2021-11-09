<!-- File: src/Template/Users/login.ctp -->
<?= $this->Flash->render() ?>

<div class="login-box-body">
<h2>Control Panel</h2>
<?= $this->Form->create() ?>
    <fieldset>
	<div class="form-group has-feedback">
      <?= $this->Form->input('username',array('label' => false,'class'=>'form-control','placeholder'=>__('Username'),'div'=>false));?>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
	</div>
	 <div class="form-group has-feedback">
       <?= $this->Form->input('password',array('label' => false,'class'=>'form-control','placeholder'=>__('Password'),'div'=>false));?>
       <span class="glyphicon glyphicon-lock form-control-feedback"></span>   
   </div>
	<div class="row">
    <div class="col-xs-12">
	<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
      </div><!-- /.col -->
    </div>
    </fieldset>
<?= $this->Form->end() ?>
<br>
<?= $this->Html->link('Register', ['action' => 'add']) ?>
</div>