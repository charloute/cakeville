<div class="ads view">
<h2><?php  echo __('Ad'); ?></h2>
	<dl>
	
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
					<?php echo $this->Html->link($ad['User']['username'], array('controller' => 'users', 'action' => 'view', $ad['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revue'); ?></dt>
		<dd>
				<?php echo $this->Html->link($ad['Revue']['title'], array('controller' => 'revues', 'action' => 'view', $ad['Revue']['id'])); ?>

			&nbsp;
		</dd>
	</dl>
</div>


