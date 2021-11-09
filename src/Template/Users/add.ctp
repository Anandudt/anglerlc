<!-- src/Template/Users/add.ctp -->
<?= $this->Flash->render() ?>

<div class="login-box-body">
<h2>Register</h2>

<?= $this->Form->create($user) ?>
    <fieldset>
       <div class="form-group has-feedback">
		 <?= $this->Form->input('username',array('label' => false,'class'=>'form-control','placeholder'=>__('Username'),'div'=>false));?>
    </div>   
   <div class="form-group has-feedback">
       <?= $this->Form->input('password',array('label' => false,'class'=>'form-control','placeholder'=>__('Password'),'div'=>false));?>
    </div>
    <div class="form-group has-feedback">    
        <?= $this->Form->select('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]) ?>
	</div>	
   </fieldset>
<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
<?= $this->Form->end() ?>
<?= $this->Html->link('Login', ['action' => 'login']) ?>
</div>