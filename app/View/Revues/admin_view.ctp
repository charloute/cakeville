<div class="revues view">
<h2><?php  echo __('Revue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($revue['Revue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($revue['Revue']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($revue['Revue']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Revue'), array('action' => 'edit', $revue['Revue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Revue'), array('action' => 'delete', $revue['Revue']['id']), null, __('Are you sure you want to delete # %s?', $revue['Revue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Revues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ads'); ?></h3>
	<?php if (!empty($revue['Ad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Revue Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($revue['Ad'] as $ad): ?>
		<tr>
			<td><?php echo $ad['id']; ?></td>
			<td><?php echo $ad['message']; ?></td>
			<td><?php echo $ad['title']; ?></td>
			<td><?php echo $ad['user_id']; ?></td>
			<td><?php echo $ad['revue_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ads', 'action' => 'view', $ad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ads', 'action' => 'edit', $ad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ads', 'action' => 'delete', $ad['id']), null, __('Are you sure you want to delete # %s?', $ad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
