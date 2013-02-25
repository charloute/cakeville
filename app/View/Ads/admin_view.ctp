<div class="ads view">
<h2><?php  echo __('Ad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['id']); ?>
			&nbsp;
		</dd>
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
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revue Id'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['revue_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ad'), array('action' => 'edit', $ad['Ad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ad'), array('action' => 'delete', $ad['Ad']['id']), null, __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Revues'), array('controller' => 'revues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revue'), array('controller' => 'revues', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Revues'); ?></h3>
	<?php if (!empty($ad['Revue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ad['Revue'] as $revue): ?>
		<tr>
			<td><?php echo $revue['id']; ?></td>
			<td><?php echo $revue['date']; ?></td>
			<td><?php echo $revue['title']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'revues', 'action' => 'view', $revue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'revues', 'action' => 'edit', $revue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'revues', 'action' => 'delete', $revue['id']), null, __('Are you sure you want to delete # %s?', $revue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Revue'), array('controller' => 'revues', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
