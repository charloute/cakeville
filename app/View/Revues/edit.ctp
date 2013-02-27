<div class="revues form">
<?php echo $this->Form->create('Revue'); ?>
	<fieldset>
		<legend><?php echo __('Edit Revue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
