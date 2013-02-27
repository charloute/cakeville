<div class="hobbies form">
<?php echo $this->Form->create('Hobby'); ?>
	<fieldset>
		<legend><?php echo __('Add Hobby'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
