<div class="pictures index">
	<h2><?php echo __('Pictures'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('Image'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pictures as $picture): ?>
	<?php if($me['id']==$picture['Picture']['user_id']){
	?>

	<tr>
		
		<td><?php echo h($picture['Picture']['name']); ?>&nbsp;</td>
		<td>
			<img src="/cakeville/files/<?php echo $picture['Picture']['url']; ?>" width="50px" height="50px"></div>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $picture['Picture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $picture['Picture']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $picture['Picture']['id']), null, __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?>
		</td>
<?php
};
?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Picture'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

