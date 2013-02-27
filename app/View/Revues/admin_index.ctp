<div class="revues index">
	<h2><?php echo __('Revues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($revues as $revue): ?>
	<tr>
		<td><?php echo h($revue['Revue']['id']); ?>&nbsp;</td>
		<td><?php echo h($revue['Revue']['date']); ?>&nbsp;</td>
		<td><?php echo h($revue['Revue']['title']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $revue['Revue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $revue['Revue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $revue['Revue']['id']), null, __('Are you sure you want to delete # %s?', $revue['Revue']['id'])); ?>
		</td>
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
