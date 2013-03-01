<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('age');
		echo $this->Form->input('Gender',
			array(
				'multiple'=>'checkbox'
			));
		echo $this->Form->input('group_id');
		echo $this->Form->input('Movie');
		echo $this->Form->input('Game');
		echo $this->Form->input('Hobby');
		echo $this->Form->input('Picture');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
