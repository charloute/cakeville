<div class="ads view">
<h2><?php  echo __('Ad'); ?></h2>

	
<p>	<?php echo __('Message'); ?></p>
		
		<p>	<?php echo h($ad['Ad']['message']); ?></p>
			&nbsp;
		
	<p>	<?php echo __('Title'); ?></p>
		
	<p>		<?php echo h($ad['Ad']['title']); ?></p>
			&nbsp;
		
	<p>	<?php echo __('User'); ?></p>
		
			<p>		<?php echo $this->Html->link($ad['User']['username'], array('controller' => 'users', 'action' => 'view', $ad['User']['id'])); ?></p>
			&nbsp;
		
	<p>	<?php echo __('Revue'); ?></p>
		
		<p>		<?php echo $this->Html->link($ad['Revue']['title'], array('controller' => 'revues', 'action' => 'view', $ad['Revue']['id'])); ?></p>

			&nbsp;
		
	
</div>


