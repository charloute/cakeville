<div class="pictures form">
<?php 
echo $this->Form->create('Picture',
	array('type' => 'file')
);
?>
	<fieldset>
		<legend><?php echo __('Add Picture'); ?></legend>
	<?php
		echo $this->Form->input('file',
			array(
					'type' => 'file',
					'label' => 'Image'
				)
		);
		echo $this->Form->input('name',
			array(
				'label' => 'Titre de l\'image'
				));
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
