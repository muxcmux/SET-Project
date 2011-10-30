<?php
App::uses('AppController', 'Controller');
/**
 * EmploymentLevels Controller
 *
 * @property EmploymentLevel $EmploymentLevel
 */
class EmploymentLevelsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmploymentLevel->recursive = 0;
		$this->set('employmentLevels', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmploymentLevel->id = $id;
		if (!$this->EmploymentLevel->exists()) {
			throw new NotFoundException(__('Invalid employment level'));
		}
		$this->set('employmentLevel', $this->EmploymentLevel->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmploymentLevel->create();
			if ($this->EmploymentLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The employment level has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment level could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EmploymentLevel->id = $id;
		if (!$this->EmploymentLevel->exists()) {
			throw new NotFoundException(__('Invalid employment level'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmploymentLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The employment level has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment level could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EmploymentLevel->read(null, $id);
		}
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
		$this->EmploymentLevel->id = $id;
		if (!$this->EmploymentLevel->exists()) {
			throw new NotFoundException(__('Invalid employment level'));
		}
		if ($this->EmploymentLevel->delete()) {
			$this->Session->setFlash(__('Employment level deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Employment level was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
