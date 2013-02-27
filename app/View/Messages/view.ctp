<div class="messages view">



<h2><?php  echo __('Message'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($message['Message']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($message['User']['username'], array('controller' => 'users', 'action' => 'view', $message['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($message['Dest']['username'], array('controller' => 'users', 'action' => 'view', $message['Dest']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($message['Message']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
