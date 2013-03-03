<script>

//Rafraichissement auto de la page pour reload les messages

$(document).ready(function(){
	refresh();
})
var refresh = function(){
	$.ajax({
		success: function(){
			window.setTimeout(function(){
				refresh();
			}, 3000);
		}
	});
}
</script>


<div class="messages">
	<div class="mcontent">
		<h2><?php echo __('Conversation avec '); ?>
			<?php if($me['id'] == $messages['0']['Message']['user_id']): ?>
			
			
			
			<?php echo $this->Html->link($messages[0]['Dest']['username'], array('controller' => 'users', 'action' => 'view', $messages[0]['Dest']['id'])); ?>
			
			<?php elseif($me['id'] == $messages['0']['Message']['dest_id']): ?>
				
			<?php echo $this->Html->link($messages[0]['User']['username'], array('controller' => 'users', 'action' => 'view', $messages[0]['Dest']['id'])); ?>
			
			<?php endif; ?>
		</h2>



		<?php echo $this->Form->create('Message'); ?>
			<fieldset>
			<?php
				echo $this->Form->input('content', array('placeholder'=>'Répondre...'));
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		<div class="cright"></div>



		<?php foreach($messages as $message){ ?>
	
			<div class="conv">	
				<?php if($me['id'] == $message['User']['id']):?>
				<div class="blocr">
					<div class="mycoord">
						<img src="<?php echo $this->webroot; ?>files/<?php echo $usersexp[0]['Pic']['url']; ?>" width="100px" height="100px" class="right img-polaroid"> 
						<p><em><?php echo $this->Time->timeAgoInWords($message['Message']['date'], array('format' => 'F jS, Y', 'end' => '+2 days')); ?></em></p>
						<p class="mcont"><?php echo h($message['Message']['content']); ?></p>
					</div>
				</div>
				<div class="cright"></div>
		
				<?php else: ?>
	
				<div class="blocl">
					<div class="coord">
						<img src="<?php echo $this->webroot; ?>files/<?php echo $usersdest[0]['Pic']['url']; ?>" width="100px" height="100px" class="left img-polaroid"> 
						<p><em><?php echo $this->Time->timeAgoInWords($message['Message']['date'], array('format' => 'j F Y', 'end' => '+2 days')); ?></em></p>
						<p class="mcont"><?php echo h($message['Message']['content']); ?></p>
					</div>
				</div>
				<div class="cleft"></div>
				<?php endif; ?>
			</div>
	

		<?php } ?>



	
	</div>
</div>