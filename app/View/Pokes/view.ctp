<div class="pokes view">
<h2><?php  echo __('Poke'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($poke['Poke']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($poke['User']['username'], array('controller' => 'users', 'action' => 'view', $poke['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dest Id'); ?></dt>
		<dd>
			<?php echo h($poke['Poke']['dest_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($poke['Poke']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
