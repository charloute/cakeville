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
