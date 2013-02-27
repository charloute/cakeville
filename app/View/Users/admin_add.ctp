<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('age');
		echo $this->Form->input('sexe');
		echo $this->Form->input('group_id');
		echo $this->Form->input('Movie');
		echo $this->Form->input('Game');
		echo $this->Form->input('Hobby');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
