<?php
App::uses('AppController', 'Controller');
/**
 * Referees Controller
 *
 * @property Referee $Referee
 */
class RefereesController extends AppController {
  
  
  public function admin_edit($id = null) {
    $this->kill_if_not_admin();
    $this->Referee->id = $id;
		if (!$this->Referee->exists()) {
			throw new NotFoundException(__('Invalid referee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Referee->save($this->request->data)) {
				$this->Session->setFlash(__('The referee has been updated'), 'success');
				$this->redirect('/dashboard');
			} else {
				$this->Session->setFlash(__('The referee could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Referee->read(null, $id);
		}
		$people = $this->Referee->Person->find('list');
		$this->set(compact('people'));
  }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Referee->recursive = 0;
		$this->set('referees', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Referee->id = $id;
		if (!$this->Referee->exists()) {
			throw new NotFoundException(__('Invalid referee'));
		}
		$this->set('referee', $this->Referee->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Referee->create();
			if ($this->Referee->save($this->request->data)) {
				$this->Session->setFlash(__('The referee has been saved'), 'success');
				$this->redirect('/profile');
			} else {
				$this->Session->setFlash(__('The referee could not be saved. Please, try again.'));
			}
		}
		$people = $this->Referee->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Referee->id = $id;
		if (!$this->Referee->exists()) {
			throw new NotFoundException(__('Invalid referee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Referee->save($this->request->data)) {
				$this->Session->setFlash(__('The referee has been saved'), 'success');
				$this->redirect('/profile');
			} else {
				$this->Session->setFlash(__('The referee could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Referee->read(null, $id);
		}
		$people = $this->Referee->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Referee->id = $id;
		if (!$this->Referee->exists()) {
			throw new NotFoundException(__('Invalid referee'));
		}
		if ($this->Referee->delete()) {
			$this->Session->setFlash(__('Referee deleted'), 'success');
			$this->redirect('/profile');
		}
		$this->Session->setFlash(__('Referee was not deleted'));
		$this->redirect('/profile');
	}
	
	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('*');
  }
	
	public function get_document($id = null) {
    $this->Referee->id = $id;
    if (!$this->Referee->exists()) {
			throw new NotFoundException(__('Invalid referee'));
		}
		$r = $this->Referee->read(null, $id);
		$this->response->header(array(
		  'Content-type' => 'image/jpeg',
		  'Content-Length' => strlen($r['Referee']['referenceDoc'])
		));
		$this->autoRender = false;
		return $r['Referee']['referenceDoc'];
  }
  
  public function delete_document($id = null) {
    $this->Referee->id = $id;
    $r = $this->Referee->read(null, $id);
    $r['Referee']['referenceDoc'] = array(
      'error' => 4,
      'size' => 0
    );
    $this->Referee->save($r);
    $this->redirect($this->referer());
  }
	
	
}
