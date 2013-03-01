<div class="messages view">
<h2><?php echo __('Messages'); ?></h2>
<?php foreach($messages as $message){ ?>
<?php if($me['id'] == $message['User']['id']) {
	echo '<h4>MOI</h4>';
}else{ ?>
	
<h4><?php echo $this->Html->link($message['User']['username'], array('controller' => 'users', 'action' => 'view', $message['User']['id'])); }?>
	<?php echo h($message['Message']['date']); ?>
</h4>
<dl>
<dt><?php echo h($message['Message']['content']); ?>
&nbsp;</dt>

</dl>
<br />
<?php 

} ?>
<?php echo $this->Form->create('Message'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>