<?php // debug($messages); ?>

<div class="messages inbox">
<h1>Inbox</h1>
<ul>
<?php
foreach($messages as $message){
	if($message['User']['id'] == $me['id']){
		echo "<li>";

		echo $this->Html->link($message['Dest']['username'] ,array('controller'=>'messages', 'action'=>'usermessages',$message['User']['id']));

		echo '----- ';

		echo ' '.$this->Html->link($message['Message']['content'] ,array('controller'=>'messages', 'action'=>'usermessages',$message['Dest']['id']));
		echo ' <i>'.$message['Message']['date'].'</i>';
		echo "</li>";
	}
	elseif($message['Dest']['id'] == $me['id']){
		echo "<li>";

		echo $this->Html->link($message['User']['username'] ,array('controller'=>'messages', 'action'=>'usermessages',$message['User']['id']));

		echo '----- ';

		echo ' '.$this->Html->link($message['Message']['content'] ,array('controller'=>'messages', 'action'=>'usermessages',$message['User']['id']));
		echo ' <i>'.$message['Message']['date'].'</i>';
		echo "</li>";
	}
}
?>
</ul>
</div>