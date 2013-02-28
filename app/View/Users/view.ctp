<div class="users view">
<?php if($me['id']==$user['User']['id']){ ?>

  
<h2><?php echo h($user['User']['username']); ?></h2>
	
<img src="<?php echo $this->webroot; ?>files/<?php echo $user['Pic']['url']; ?>" width="250px" height="250px"> 


	
<div class="infos">		
	<p>
		<?php echo __('Age:'); ?>
		
			<?php echo h($user['User']['age']); ?>
	</p>		
	<p>	
		<?php echo __('Sexe:'); ?>
		
			<?php echo h($user['User']['sexe']); ?>
	</p>		
	<p>	
		<?php echo __('Groupe:'); ?>
		
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
	</p>
	
	<p>
	<?php echo $this->Html->link(__('Voir mes photos'), array('controller' => 'pictures', 'action' => 'index')); ?> 
	</p>
			
</div>		
	
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hobbies'), array('controller' => 'hobbies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hobby'), array('controller' => 'hobbies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Messages'); ?></h3>
	<?php if (!empty($user['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Dest Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Message'] as $message): ?>
		<tr>
			<td><?php echo $message['id']; ?></td>
			<td><?php echo $message['user_id']; ?></td>
			<td><?php echo $message['dest_id']; ?></td>
			<td><?php echo $message['content']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages', 'action' => 'view', $message['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $message['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages', 'action' => 'delete', $message['id']), null, __('Are you sure you want to delete # %s?', $message['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Movies'); ?></h3>
	<?php if (!empty($user['Movie'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Movie'] as $movie): ?>
		<tr>
			<td><?php echo $movie['id']; ?></td>
			<td><?php echo $movie['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movies', 'action' => 'view', $movie['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movies', 'action' => 'edit', $movie['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movies', 'action' => 'delete', $movie['id']), null, __('Are you sure you want to delete # %s?', $movie['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Games'); ?></h3>
	<?php if (!empty($user['Game'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Game'] as $game): ?>
		<tr>
			<td><?php echo $game['id']; ?></td>
			<td><?php echo $game['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'games', 'action' => 'view', $game['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'games', 'action' => 'edit', $game['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'games', 'action' => 'delete', $game['id']), null, __('Are you sure you want to delete # %s?', $game['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hobbies'); ?></h3>
	<?php if (!empty($user['Hobby'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Hobby'] as $hobby): ?>
		<tr>
			<td><?php echo $hobby['id']; ?></td>
			<td><?php echo $hobby['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hobbies', 'action' => 'view', $hobby['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hobbies', 'action' => 'edit', $hobby['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hobbies', 'action' => 'delete', $hobby['id']), null, __('Are you sure you want to delete # %s?', $hobby['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hobby'), array('controller' => 'hobbies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pictures'); ?></h3>
	<?php if (!empty($user['Picture'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('URL'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Picture'] as $picture): ?>
		<tr>
			<td><?php echo $picture['id']; ?></td>
			<td><?php echo $picture['url']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pictures', 'action' => 'view', $picture['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pictures', 'action' => 'edit', $picture['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pictures', 'action' => 'delete', $picture['id']), null, __('Are you sure you want to delete # %s?', $picture['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Picture'), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
		</ul>
	</div>

<?php
}
else{
?>
	<h2><?php echo h($user['User']['username']); ?></h2>
	<img src="<?php echo $this->webroot; ?>files/<?php echo $user['Pic']['url']; ?>" width="250px" height="250px">
<?php
};
?>


</div>
