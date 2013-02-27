<div class="pictures view">
<h2><?php  echo __('Picture'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picture['User']['username'], array('controller' => 'users', 'action' => 'view', $picture['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
