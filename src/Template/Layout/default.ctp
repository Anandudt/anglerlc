<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Angler Technologies';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

   
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
	   
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   
    <?php
		echo $this->Html->css('style');
		echo $this->Html->css('bootstrap-switch.min.css');
        echo $this->Html->css('/design300/assets/css/glyphicons.min');
		echo $this->Html->css('/design300/assets/css/font-awesome.min');
		echo $this->Html->css('/design400/css/bootstrap.min.css');
		echo $this->Html->css('/design400/css/AdminLTE.min.css');
		
		echo $this->Html->css('/design400/css/_all-skins.min.css');
		echo $this->Html->css('/design400/css/jquery-jvectormap-1.2.2.css');
		echo $this->Html->css('/design400/plugins/select2/select2.min.css');
		echo $this->Html->script('bootbox.min');

		 
		echo $this->Html->script('/design400/js/jQuery-2.1.4.min.js');
		echo $this->Html->script('/design400/js/jquery-ui.min.js');
		echo $this->Html->script('/design400/js/bootstrap.min.js');
		echo $this->Html->script('/design400/js/Chart.min.js');
		echo $this->Html->script('/design400/js/legend.js');
		echo $this->Html->script('/design400/js/app.min.js');		
		echo $this->Html->script('/design400/js/jquery-jvectormap-1.2.2.min.js');
		echo $this->Html->script('/design400/js/jquery-jvectormap-world-mill-en.js');
		echo $this->Html->script('/design400/plugins/select2/select2.full.min.js');
		echo $this->Html->script('bootstrap-switch.min.js'); 
		echo $this->Html->script('moment-with-locales');
	    echo $this->Html->script('bootstrap-datetimepicker.min');  
	    echo $this->Html->script('main.custom.min');
		echo $this->Html->script('print');
		echo $this->fetch('script');
       
	?>	
</head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        
          <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><?php echo $cakeDescription;?></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><?php echo $cakeDescription;?> </b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
	      
	      
           <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user"></i>
                  <span class="hidden-xs"><?php echo $cakeDescription;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <i class="fa fa-user"></i>
                    <p>
                      <?php echo $cakeDescription;?>
                    
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                     </div>
                    <div class="pull-right">
                      <?php echo $this->Html->link(__('Sign Out'),array('controller' => 'Users','action' => 'logout'),array('class'=>'btn btn-default btn-flat','escape' => false));?>
                    </div>
                  </li>
                </ul>
              </li>
           </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
          
          <!-- /.search form -->
          <ul class="sidebar-menu">
            
	  </ul> 
          <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul id="sidebar-menu" class="sidebar-menu">
	  
	   <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-book')).'Books', array('controller' => 'Books', 'action' => 'index'), array('escape' => false)) ?></li>
       <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')).'Author', array('controller' => 'Author', 'action' => 'index'), array('escape' => false)) ?></li>
       <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-shopping-cart')).'Publishers', array('controller' => 'Publishers', 'action' => 'index'), array('escape' => false)) ?></li>
       
	   </ul> 
                    
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
        <!-- Main content -->
        <section class="content">
		<?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
            </section><!-- /.Left col -->
                    </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <footer>
    </footer>
</body>
</html>
