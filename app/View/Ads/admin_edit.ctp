<div class="ads form">
<?php echo $this->Form->create('Ad'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Ad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('message');
		echo $this->Form->input('title');
		echo $this->Form->input('user_id');
		echo $this->Form->input('revue_id');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ad.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Revues'), array('controller' => 'revues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revue'), array('controller' => 'revues', 'action' => 'add')); ?> </li>
	</ul>
</div>
