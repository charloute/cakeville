<div class="revues form">
<?php echo $this->Form->create('Revue'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Revue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Revue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Revue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Revues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
