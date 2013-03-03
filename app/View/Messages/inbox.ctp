<?php // debug($messages); ?>

<div class="messages inbox">

<ul>
<?php
foreach($messages as $message){
	
	
	
	
	if($message['User']['id'] == $me['id']){
		echo "<li>";

		echo '<p>'.$this->Html->link($message['Dest']['username'] ,array('controller'=>'messages', 'action'=>'usermessages',$message['User']['id'])).'</p>';

		
		echo "</li>";
	}
	elseif($message['Dest']['id'] == $me['id']){
		echo "<li>";

		
		echo '<p>'.$this->Html->link($message['User']['username'] ,array('controller'=>'messages', 'action'=>'usermessages',$message['User']['id'])).'</p>';
		
		
		
		echo "</li>";
	}
}
?>
</ul>
</div>