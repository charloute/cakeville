<div class="pictures index">
	<h2><?php echo __('Pictures'); ?></h2>
	
	
			
<ul class="thumbnails">		
	
	<?php foreach ($pictures as $picture): ?>
	<?php if($me['id']==$picture['Picture']['user_id']){
	?>

	
		
		

	<li class="span4">
		<div class="thumbnail">
			<img src="/cakeville/files/<?php echo $picture['Picture']['url']; ?>" width="150px" height="150px">
		</div>
		<div class="caption">
			<h3><?php echo h($picture['Picture']['name']); ?></h3>
			<p>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $picture['Picture']['id'])); ?>
			
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $picture['Picture']['id']), null, __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?>
			</p>
		</div>
	</li>
	
<?php
};
?>
	
	
<?php endforeach; ?>
</ul>	
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

