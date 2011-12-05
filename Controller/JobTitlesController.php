<?php
App::uses('AppController', 'Controller');
/**
 * JobTitles Controller
 *
 * @property JobTitle $JobTitle
 */
class JobTitlesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobTitle->recursive = 0;
		$this->set('jobTitles', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->JobTitle->id = $id;
		if (!$this->JobTitle->exists()) {
			throw new NotFoundException(__('Invalid job title'));
		}
		$this->set('jobTitle', $this->JobTitle->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobTitle->create();
			if ($this->JobTitle->save($this->request->data)) {
				$this->Session->setFlash(__('The job title has been saved'), 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job title could not be saved. Please, try again.'));
			}
		}
		$sectors = $this->JobTitle->Sector->find('list');
		$this->set(compact('sectors'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->JobTitle->id = $id;
		if (!$this->JobTitle->exists()) {
			throw new NotFoundException(__('Invalid job title'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobTitle->save($this->request->data)) {
				$this->Session->setFlash(__('The job title has been saved'), 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job title could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->JobTitle->read(null, $id);
		}
		$sectors = $this->JobTitle->Sector->find('list');
		$this->set(compact('sectors'));
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
		$this->JobTitle->id = $id;
		if (!$this->JobTitle->exists()) {
			throw new NotFoundException(__('Invalid job title'));
		}
		if ($this->JobTitle->delete()) {
			$this->Session->setFlash(__('Job title deleted'), 'success');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job title was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
