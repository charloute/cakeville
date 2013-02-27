<div class="pictures view">

<h2><?php  echo __('Picture'); ?></h2>
<div><img src="/cakeville/files/<?php echo $picture['Picture']['url']; ?>" width="250px" height="250px"></div>

	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
		
				

			<?php echo h($picture['Picture']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picture['User']['username'], array('controller' => 'users', 'action' => 'view', $picture['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Picture'), array('action' => 'edit', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Picture'), array('action' => 'delete', $picture['Picture']['id']), null, __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
