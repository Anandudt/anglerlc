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
	<script
              src="https://code.jquery.com/jquery-3.3.1.js"
              integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
              crossorigin="anonymous">
    </script>
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
<body class="login-page">
	<div class="verticalcenter">
	</div>
	
    <div class="login-box">
      <div class="login-logo">
	    <?php echo$this->Html->image('logo-black.png',array('alt'=>$cakeDescription,'class'=>'brand'));?>
	   </div>
	   <!-- /.login-box -->
	

	<?= $this->fetch('content') ?>
     
    
    </div>
	

</body>
</html>
