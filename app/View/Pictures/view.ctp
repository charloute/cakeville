<div class="pictures view">

<h2><?php  echo $picture['Picture']['name']; ?></h2>
<div><img src="/cakeville/files/<?php echo $picture['Picture']['url']; ?>" width="250px" height="250px"></div>



		<p><?php echo __('Id'); ?></p>
		<p>
		
				

			<?php echo h($picture['Picture']['id']); ?>
			&nbsp;
		</p>
		<p><?php echo __('Url'); ?></p>
		<p>
			<?php echo h($picture['Picture']['url']); ?>
			&nbsp;
		</p>
		<p><?php echo __('User'); ?></p>
		<p>
			<?php echo $this->Html->link($picture['User']['username'], array('controller' => 'users', 'action' => 'view', $picture['User']['id'])); ?>
			&nbsp;
		</p>

</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Picture'), array('action' => 'edit', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Picture'), array('action' => 'delete', $picture['Picture']['id']), null, __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Définir en tant que photo de profil'), array('controller' => 'users', 'action' => 'profil_picture', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
