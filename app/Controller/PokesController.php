<?php
App::uses('AppController', 'Controller');
/**
 * Pokes Controller
 *
 * @property Poke $Poke
 */
class PokesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Poke->recursive = 0;
		$this->set('pokes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Poke->exists($id)) {
			throw new NotFoundException(__('Invalid poke'));
		}
		$options = array('conditions' => array('Poke.' . $this->Poke->primaryKey => $id));
		$this->set('poke', $this->Poke->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Poke->create();
			if ($this->Poke->save($this->request->data)) {
				$this->Session->setFlash(__('The poke has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The poke could not be saved. Please, try again.'));
			}
		}
		$users = $this->Poke->User->find('list');
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
		if (!$this->Poke->exists($id)) {
			throw new NotFoundException(__('Invalid poke'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Poke->save($this->request->data)) {
				$this->Session->setFlash(__('The poke has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The poke could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Poke.' . $this->Poke->primaryKey => $id));
			$this->request->data = $this->Poke->find('first', $options);
		}
		$users = $this->Poke->User->find('list');
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
		$this->Poke->id = $id;
		if (!$this->Poke->exists()) {
			throw new NotFoundException(__('Invalid poke'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Poke->delete()) {
			$this->Session->setFlash(__('Poke deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Poke was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
