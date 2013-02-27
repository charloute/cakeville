<?php
class PostsController extends AppController{

	function index(){
		App:uses('BadgesEventListener','Event');
		$this->Post->getEventManager()->attach(new BadgesEventListener());
		if(!empty($this->request->data)){

			$this->request->data['Post']['user_id'] = $this->Auth->user("id");
			$this->Post->save($this->request->data);
		}
		$posts = $this->Post->find('all');
		$this->set(compact('posts'));
	}

	function view($id){
		$post = $this->Post->findById($id);
		if(empty($post)){
			throw new NotFoundException();
		}
		$this->Post->id = $id:
		$comments = $this->Post->findComments();
		$this->helpers[] = 'Comment.Comment'; 
		$this->set(compact('post','comments'));
	}

}
