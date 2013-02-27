<div class="movies form">
<?php echo $this->Form->create('Movie'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Movie'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
