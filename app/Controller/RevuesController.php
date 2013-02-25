<?php
App::uses('AppController', 'Controller');
/**
 * Revues Controller
 *
 * @property Revue $Revue
 */
class RevuesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Revue->recursive = 0;
		$this->set('revues', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Revue->exists($id)) {
			throw new NotFoundException(__('Invalid revue'));
		}
		$options = array('conditions' => array('Revue.' . $this->Revue->primaryKey => $id));
		$this->set('revue', $this->Revue->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Revue->create();
			if ($this->Revue->save($this->request->data)) {
				$this->Session->setFlash(__('The revue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revue could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Revue->exists($id)) {
			throw new NotFoundException(__('Invalid revue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Revue->save($this->request->data)) {
				$this->Session->setFlash(__('The revue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Revue.' . $this->Revue->primaryKey => $id));
			$this->request->data = $this->Revue->find('first', $options);
		}
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
		$this->Revue->id = $id;
		if (!$this->Revue->exists()) {
			throw new NotFoundException(__('Invalid revue'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Revue->delete()) {
			$this->Session->setFlash(__('Revue deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Revue was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Revue->recursive = 0;
		$this->set('revues', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Revue->exists($id)) {
			throw new NotFoundException(__('Invalid revue'));
		}
		$options = array('conditions' => array('Revue.' . $this->Revue->primaryKey => $id));
		$this->set('revue', $this->Revue->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Revue->create();
			if ($this->Revue->save($this->request->data)) {
				$this->Session->setFlash(__('The revue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revue could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Revue->exists($id)) {
			throw new NotFoundException(__('Invalid revue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Revue->save($this->request->data)) {
				$this->Session->setFlash(__('The revue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Revue.' . $this->Revue->primaryKey => $id));
			$this->request->data = $this->Revue->find('first', $options);
		}
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
		$this->Revue->id = $id;
		if (!$this->Revue->exists()) {
			throw new NotFoundException(__('Invalid revue'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Revue->delete()) {
			$this->Session->setFlash(__('Revue deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Revue was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
