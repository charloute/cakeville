<div class="hobbies form">
<?php echo $this->Form->create('Hobby'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hobby'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hobby.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hobby.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hobbies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
