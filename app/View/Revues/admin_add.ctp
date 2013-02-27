<div class="revues form">
<?php echo $this->Form->create('Revue'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Revue'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
