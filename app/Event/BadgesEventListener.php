<?php
App:: uses('CakeEventListener','Event');
class BadgesEventListener implements CakeEventListener{

		public function implementedEvents(){
			return array(
				'Model.Post.add' => 'userAddPost',
				'Plugin.Comment.add' => 'userAddComment'
			);
		}

		public function userAddPost($event){
			$user_id = $event->subject()->data['Post']['user_id'];
			$badges = array(
				1 => 1,
				2 => 3
			);
			$post = ClassRegistry::init('Post');
			$count = $post->find('count', array(
					'conditions' => array('Post.user_id' => $user_id)
			));
			foreach($badges as $badge_id =>$limit){
				if($count >= $limit){
					$this->unlock($badge_id,$user_id);
				}
			}
		}

		public function userAddComment($event){
			$user_id = $event->subject()->data['Comment']['user_id'];
			if($user_id || $user_id ==0){
				return false;
			}
			$badges = array(
				3 => 2,
			);
			$comment = ClassRegistry::init('Comment.Comment');
			$count = $comment->find('count',array(
				'conditions' => array('Comment.user_id' =>$user_id)
			));
			foreach($badges as $badge_id => $limit){
				if($count >= $limit){
					$this->unlock($badge_id,$user_id);
				}
			}
		}

		public function unlock($badge_id, $user_id){
			$badgesUser = ClassRegistry::init('BadgesUser');
			$badge = $badgesUser->find('first',array(
				'conditions' => array('BadgeUser.badge_id','BadgeUser.user_id' =>$user_id)
				));
			if(empty($badge)){
				$badgeUser->save(array(
					'badge_id' => $badge_id,
					'user_id'  => $user_id
				));
				SessionComponet::setFlash('Vous avez debloqué un badge');
			}
		}

}
?>
