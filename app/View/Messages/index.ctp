<div class="messages index">
	
	<?php debug($me);?>
	
	
	
	<h2><?php echo __('Messages reçus'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('FROM'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($messages as $message): ?>
		
		
	<tr>
		<?php if($me['id'] == $message['Dest']['id'] ) {?>
		<td><?php echo h($message['Message']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($message['User']['username'], array('controller' => 'users', 'action' => 'view', $message['User']['id'])); ?>
		</td>
		<td><?php echo h($message['Dest']['username']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['content']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $message['Message']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $message['Message']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $message['Message']['id']), null, __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?>
		</td>
		<?php } else{ echo '';}?>
	</tr>
<?php endforeach; ?>
	</table>
	
	
		<h2><?php echo __('Messages envoyés'); ?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('date'); ?></th>
				<th><?php echo $this->Paginator->sort('FOR'); ?></th>
				<th><?php echo $this->Paginator->sort('content'); ?></th>
				
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($messages as $message): ?>


		<tr>
			<?php if($me['id'] == $message['User']['id'] ) {?>
			<td><?php echo h($message['Message']['date']); ?>&nbsp;</td>
			<td><?php echo h($message['Dest']['username']); ?>&nbsp;</td>
			<td><?php echo h($message['Message']['content']); ?>&nbsp;</td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $message['Message']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $message['Message']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $message['Message']['id']), null, __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?>
			</td>
			<?php } else{ echo '';}?>
		</tr>
	<?php endforeach; ?>
		</table>
	
	
	
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Contacts'); ?></h3>
	
	<ul>
		<?php foreach ($messages as $message): ?>
			<?php if($me['id'] == $message['User']['id'] || $me['id'] == $message['Dest']['id'] ): ?>
				<?php if($me['id'] == $message['User']['id']): ?>
					<li><?php echo $this->Html->link($message['Dest']['username'], array('controller' => 'messages', 'action' => 'add', $message['Dest']['id']));?></li>
				<?php endif; ?>
				<?php if($me['id'] == $message['Dest']['id']): ?>
					<li><?php echo $this->Html->link($message['User']['username'], array('controller' => 'messages', 'action' => 'add', $message['User']['id']));?></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
		
		
	<h3><?php echo __('Actions'); ?></h3>

	<ul>
		<li><?php echo $this->Html->link(__('New Message'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
