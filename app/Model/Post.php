<?php
class Post extends AppModel{

	public $actsAs = array('Comment.Commentable');
	public function afterSave ($created){
		if ($created){
				$this->getEventManager()->dispatch(new CakeEvent('Model.Post.add', $this));
		}
	}

}
?>