<?php
App::uses('AppController', 'Controller');
/**
 * Experiences Controller
 *
 * @property Experience $Experience
 */
class ExperiencesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Experience->recursive = 0;
		$this->set('experiences', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Experience->id = $id;
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		$this->set('experience', $this->Experience->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Experience->create();
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved'), 'success');
				$this->redirect('/profile');
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
			}
		}
		$people = $this->Experience->Person->find('list');
		$employmentLevels = $this->Experience->EmploymentLevel->find('list');
		$jobTitles = $this->Experience->JobTitle->find('list');
		$this->set(compact('people', 'employmentLevels', 'jobTitles'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Experience->id = $id;
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved'), 'success');
				$this->redirect('/profile');
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Experience->read(null, $id);
		}
		$people = $this->Experience->Person->find('list');
		$employmentLevels = $this->Experience->EmploymentLevel->find('list');
		$jobTitles = $this->Experience->JobTitle->find('list');
		$this->set(compact('people', 'employmentLevels', 'jobTitles'));
	}
	
	public function admin_edit($id = null) {
		$this->Experience->id = $id;
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved'), 'success');
				$this->redirect('/dashboard');
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Experience->read(null, $id);
		}
		$people = $this->Experience->Person->find('list');
		$employmentLevels = $this->Experience->EmploymentLevel->find('list');
		$jobTitles = $this->Experience->JobTitle->find('list');
		$this->set(compact('people', 'employmentLevels', 'jobTitles'));
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
		$this->Experience->id = $id;
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		if ($this->Experience->delete()) {
			$this->Session->setFlash(__('Experience deleted'), 'success');
			$this->redirect('/profile');
		}
		$this->Session->setFlash(__('Experience was not deleted'));
		$this->redirect('/profile');
	}
	
	public function get_single($id = null) {
		$this->Experience->id = $id;
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		return $this->Experience->read(null, $id);
	}
	
}
