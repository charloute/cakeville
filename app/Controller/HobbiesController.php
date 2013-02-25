<?php
App::uses('AppController', 'Controller');
/**
 * Hobbies Controller
 *
 * @property Hobby $Hobby
 */
class HobbiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hobby->recursive = 0;
		$this->set('hobbies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hobby->exists($id)) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		$options = array('conditions' => array('Hobby.' . $this->Hobby->primaryKey => $id));
		$this->set('hobby', $this->Hobby->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hobby->create();
			if ($this->Hobby->save($this->request->data)) {
				$this->Session->setFlash(__('The hobby has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hobby could not be saved. Please, try again.'));
			}
		}
		$users = $this->Hobby->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hobby->exists($id)) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hobby->save($this->request->data)) {
				$this->Session->setFlash(__('The hobby has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hobby could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hobby.' . $this->Hobby->primaryKey => $id));
			$this->request->data = $this->Hobby->find('first', $options);
		}
		$users = $this->Hobby->User->find('list');
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
		$this->Hobby->id = $id;
		if (!$this->Hobby->exists()) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hobby->delete()) {
			$this->Session->setFlash(__('Hobby deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hobby was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Hobby->recursive = 0;
		$this->set('hobbies', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Hobby->exists($id)) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		$options = array('conditions' => array('Hobby.' . $this->Hobby->primaryKey => $id));
		$this->set('hobby', $this->Hobby->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Hobby->create();
			if ($this->Hobby->save($this->request->data)) {
				$this->Session->setFlash(__('The hobby has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hobby could not be saved. Please, try again.'));
			}
		}
		$users = $this->Hobby->User->find('list');
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
		if (!$this->Hobby->exists($id)) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hobby->save($this->request->data)) {
				$this->Session->setFlash(__('The hobby has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hobby could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hobby.' . $this->Hobby->primaryKey => $id));
			$this->request->data = $this->Hobby->find('first', $options);
		}
		$users = $this->Hobby->User->find('list');
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
		$this->Hobby->id = $id;
		if (!$this->Hobby->exists()) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hobby->delete()) {
			$this->Session->setFlash(__('Hobby deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hobby was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
