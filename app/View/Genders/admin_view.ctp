<div class="genders view">
<h2><?php  echo __('Gender'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gender['Gender']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($gender['Gender']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gender'), array('action' => 'edit', $gender['Gender']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gender'), array('action' => 'delete', $gender['Gender']['id']), null, __('Are you sure you want to delete # %s?', $gender['Gender']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($gender['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Sexe'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Sexe Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($gender['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['age']; ?></td>
			<td><?php echo $user['sexe']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['sexe_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
