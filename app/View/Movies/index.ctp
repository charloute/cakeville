<div class="movies index">
	<h2><?php echo __('Movies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($movies as $movie): ?>
	<tr>
		<td><?php echo h($movie['Movie']['id']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $movie['Movie']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $movie['Movie']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $movie['Movie']['id']), null, __('Are you sure you want to delete # %s?', $movie['Movie']['id'])); ?>
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
