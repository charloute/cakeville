<div class="pokes index">
	<h2><?php echo __('Pokes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dest_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pokes as $poke): ?>
	<tr>
		<td><?php echo h($poke['Poke']['id']); ?>&nbsp;</td>
		<td>
		
			<?php echo $this->Html->link($poke['User']['username'], array('controller' => 'users', 'action' => 'view', $poke['User']['id'])); ?>
	
		</td>
		<td><?php echo h($poke['Poke']['dest_id']); ?>&nbsp;</td>
		<td><?php echo h($poke['Poke']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $poke['Poke']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $poke['Poke']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $poke['Poke']['id']), null, __('Are you sure you want to delete # %s?', $poke['Poke']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
