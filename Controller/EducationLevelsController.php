<?php
App::uses('AppController', 'Controller');
/**
 * EducationLevels Controller
 *
 * @property EducationLevel $EducationLevel
 */
class EducationLevelsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EducationLevel->recursive = 0;
		$this->set('educationLevels', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EducationLevel->id = $id;
		if (!$this->EducationLevel->exists()) {
			throw new NotFoundException(__('Invalid education level'));
		}
		$this->set('educationLevel', $this->EducationLevel->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EducationLevel->create();
			if ($this->EducationLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The education level has been saved'), 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education level could not be saved. Please, try again.'));
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
		$this->EducationLevel->id = $id;
		if (!$this->EducationLevel->exists()) {
			throw new NotFoundException(__('Invalid education level'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EducationLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The education level has been saved'), 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education level could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EducationLevel->read(null, $id);
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
		$this->EducationLevel->id = $id;
		if (!$this->EducationLevel->exists()) {
			throw new NotFoundException(__('Invalid education level'));
		}
		if ($this->EducationLevel->delete()) {
			$this->Session->setFlash(__('Education level deleted'), 'success');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Education level was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
