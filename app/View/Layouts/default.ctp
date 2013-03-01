<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>

	<?php
		

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<link rel="stylesheet" href="<?php echo $this->Html->url('/css/bootstrap.css');?>">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo $this->Html->url('/js/bootstrap.js');?>"></script>
</head>

<body>
	<div id="header">
			<div class="navbar navbar-inverse">
					<div class="navbar-inner">
						<div class="container">
							
							<h3><a href="#">CakeVille</a>	</h3> 	<?php if($me['id']>0): ?>

										<?php echo $this->Html->link('logout', '/users/logout') ?>

										<?php else: ?>

										<?php echo $this->Html->link('login', '/users/login') ?>

									<?php endif; ?>
						
							
								<div class="nav-collapse collapse">	
									<ul class="nav">
					
								
									<li class="dropdown"> 
										<a class="dropdown-toggle" data-toggle="dropdown">Users<b class="caret"></b></a>
									<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('List users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users','action' => 'add')); ?></li>
									</ul>
									</li>
									<li class="dropdown"> 
										<a class="dropdown-toggle" data-toggle="dropdown">Groups<b class="caret"></b></a>
									<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
								<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
									</ul>
									</li>	
									<li class="dropdown"> 
										<a class="dropdown-toggle" data-toggle="dropdown">Messages<b class="caret"></b></a>
									<ul class="dropdown-menu">		
								<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
								<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
									</ul>
									</li>
										<li class="dropdown"> 
											<a class="dropdown-toggle" data-toggle="dropdown">Movies<b class="caret"></b></a>
										<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
								<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
									</ul>
									</li>
										<li class="dropdown"> 
											<a class="dropdown-toggle" data-toggle="dropdown">Games<b class="caret"></b></a>
										<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
								<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
									</ul>
									</li>
										<li class="dropdown"> 
											<a class="dropdown-toggle" data-toggle="dropdown">Hobbies<b class="caret"></b></a>
										<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('List Hobbies'), array('controller' => 'hobbies', 'action' => 'index')); ?> </li>
								<li><?php echo $this->Html->link(__('New Hobby'), array('controller' => 'hobbies', 'action' => 'add')); ?> </li>
									</ul>
									</li>
									<li class="dropdown"> 
										<a class="dropdown-toggle" data-toggle="dropdown">Pictures<b class="caret"></b></a>
									<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('New Picture'), array('controller' => 'pictures', 'action' => 'add')); ?></li>
								<li><?php echo $this->Html->link(__('List Pictures'), array('controller' => 'pictures', 'action' => 'index')); ?></li>
								</ul>
								</li>
									<li class="dropdown"> 
										<a class="dropdown-toggle" data-toggle="dropdown">Revue/Ad<b class="caret"></b></a>
									<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('New Revue'), array('controller' => 'revues', 'action' => 'add')); ?></li>
								<li><?php echo $this->Html->link(__('List Revues'), array('controller' => 'revues', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?></li>
										<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?></li>
								</ul>
								</li>
								<li class="dropdown"> 
									<a class="dropdown-toggle" data-toggle="dropdown">Pokes<b class="caret"></b></a>
								<ul class="dropdown-menu">
							<li><?php echo $this->Html->link(__('New Poke'), array('controller' => 'pokes', 'action' => 'add')); ?></li>
							<li><?php echo $this->Html->link(__('List Pokes'), array('controller' => 'pokes', 'action' => 'index')); ?></li>
							</ul>
							</li>
							
							
							</ul>
							</div>	
						</div>
					</div>
				</div>
		</div><!-- /.header -->
			<div id="container">
		<div id="content">
			

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
