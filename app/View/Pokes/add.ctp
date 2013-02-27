<div class="pokes form">
<?php echo $this->Form->create('Poke'); ?>
	<fieldset>
		<legend><?php echo __('Add Poke'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('dest_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
