<div class="pokes view">
<h2><?php  echo __('Poke'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($poke['Poke']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($poke['User']['username'], array('controller' => 'users', 'action' => 'view', $poke['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dest Id'); ?></dt>
		<dd>
			<?php echo h($poke['Poke']['dest_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($poke['Poke']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Poke'), array('action' => 'edit', $poke['Poke']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Poke'), array('action' => 'delete', $poke['Poke']['id']), null, __('Are you sure you want to delete # %s?', $poke['Poke']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pokes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poke'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
