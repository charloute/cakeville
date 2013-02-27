<div class="pictures form">
<?php echo $this->Form->create('Picture'); ?>
	<fieldset>
		<legend><?php echo __('Edit Picture'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('url');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
