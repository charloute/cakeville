<?php
App::uses('AppController', 'Controller');
/**
 * Pictures Controller
 *
 * @property Picture $Picture
 */
class PicturesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
		$this->set('picture', $this->Picture->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if($this->request->is('post')) {
			$data = $this->request->data['Picture'];
			$alea = substr(uniqid(), -3,3);
			
			/* wtf ?
			if(isset($data['url'])){
				$this->redirect(array('action' => 'show', '?class=&alt=&src='.urlencode($data['url'])));
			}
			*/
			$dir = WWW_ROOT.DS.'files'.DS.date('Y');
			
			if(!file_exists($dir)){
				mkdir($dir,0777);
			}
			
			$f = explode('.',$data['file']['name']);
			$ext = end($f);
			
			$filename= Inflector::slug(implode('.',array_slice($f,0,-1)),'-');
			
			//sauvegarde bdd
			// je specifie l'url
			$this->request->data['Picture']['url'] = date('Y').'/'.$filename.$alea.'.'.$ext;
			// vire les donnees sur le file
			unset($this->request->data['Picture']['file']);
			// c'est a MOI
			$this->request->data['Picture']['user_id'] = $this->Auth->user('id');
			
			$this->Picture->create();
			$success = $this->Picture->save($this->request->data);
			if($success){
				move_uploaded_file($data['file']['tmp_name'], $dir.DS.$filename.$alea.'.'.$ext);
				$this->Session->setFlash(__('The picture has been saved.'));
			}
			else{
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
				
		}
		$users = $this->Picture->User->find('list');
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
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
			$this->request->data = $this->Picture->find('first', $options);
		}
		$users = $this->Picture->User->find('list');
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
		$this->Picture->id = $id;
		if (!$this->Picture->exists()) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Picture->delete()) {
			$this->Session->setFlash(__('Picture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
		$this->set('picture', $this->Picture->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Picture->create();
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		}
		$users = $this->Picture->User->find('list');
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
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
			$this->request->data = $this->Picture->find('first', $options);
		}
		$users = $this->Picture->User->find('list');
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
		$this->Picture->id = $id;
		if (!$this->Picture->exists()) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Picture->delete()) {
			$this->Session->setFlash(__('Picture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
