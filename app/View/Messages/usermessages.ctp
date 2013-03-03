<div class="messages view">
<h2><?php echo __('Conversation avec '); ?>
	<?php echo $this->Html->link($messages[0]['Dest']['username'], array('controller' => 'users', 'action' => 'view', $messages[0]['Dest']['id'])); ?>
</h2>

<?php foreach($messages as $message){ ?>
	
	<div class="conv">	
		<?php if($me['id'] == $message['User']['id']):?>
		<div class="blocr">
			<div class="mycoord">
				<img src="<?php echo $this->webroot; ?>files/<?php echo $usersexp[0]['Pic']['url']; ?>" width="100px" height="100px" class="right"> 
				<?php echo $this->Time->timeAgoInWords($message['Message']['date'], array('format' => 'F jS, Y', 'end' => '+2 days')); ?>
			</div>
			<p><?php echo h($message['Message']['content']); ?></p>
		</div>
		<div class="cright"></div>
		
		<?php else: ?>
	
		<div class="blocl">
			<div class="coord">
				<img src="<?php echo $this->webroot; ?>files/<?php echo $usersdest[0]['Pic']['url']; ?>" width="100px" height="100px" class="left"> 
				<?php echo $this->Time->timeAgoInWords($message['Message']['date'], array('format' => 'j F Y', 'end' => '+2 days')); ?>
			</div>
				<p><?php echo h($message['Message']['content']); ?></p>
		</div>
		<div class="cleft"></div>
		<?php endif; ?>
	</div>
	

<?php } ?>


<?php echo $this->Form->create('Message'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>