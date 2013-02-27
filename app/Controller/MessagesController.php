<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 */
class MessagesController extends AppController {



	public function usermessages($id) {
			$connectedid = $this->Auth->user('id');

		$this->Message->recursive = 0;
		//$this->set('messages', $this->paginate(array('Message.user_id'=>$id,array(
		//'conditions' => array('Message.user_receiver_id'=> $connectedid)))));



		// OR AND CONDITION VARIABLE
		$orcondition = $this->Message->find('all',array(
			'conditions' => array('OR' => array(
				array('AND' => array(
					array('Message.user_id'=> $id),
					array('Message.dest_id'=> $connectedid)
					)
				),
				array('AND' => array(
					array('Message.user_id'=> $connectedid),
					array('Message.dest_id'=> $id)
					)
				)
			)),
			'order' => array('Message.date DESC')
		) );

		$this->set('messages', $orcondition);


	//debug($orcondition);
	//$this->render("index");
	}








/**
* inbox method
*
* @return void
*/
	public function inbox() {
		$connectedid = $this->Auth->user('id');



		$this->Message->recursive = 0;
		

		$data = $this->Message->find('all',array(
		'conditions' => array('OR' => array(
			array('Message.dest_id'=> $connectedid),
			)),
			'group' => array('Message.user_id','Message.dest_id'),
			'order' => array('Message.date DESC')
		));

		$this->set('messages', $data);
	}



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
		$this->set('message', $this->Message->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Message->create();
			
			$this->request->data['Message']['user_id'] = $this->Auth->user('id');
			$this->request->data['Message']['date'] = DboSource::expression('NOW()');
			
			
			
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('Message envoyé !'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur s\'est produite, veuillez ré-essayer.'));
			}
		}
		
		$users = $this->Message->User->find('list');
		$dests = $this->Message->Dest->find('list');
		$this->set(compact('users', 'dests'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
			$this->request->data = $this->Message->find('first', $options);
		}
		$users = $this->Message->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Message deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Message was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
		$this->set('message', $this->Message->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Message->create();
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		}
		$users = $this->Message->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
			$this->request->data = $this->Message->find('first', $options);
		}
		$users = $this->Message->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Message deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Message was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
