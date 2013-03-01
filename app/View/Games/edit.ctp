<div class="games form">
<?php echo $this->Form->create('Game'); ?>
	<fieldset>
		<legend><?php echo __('Edit Game'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

