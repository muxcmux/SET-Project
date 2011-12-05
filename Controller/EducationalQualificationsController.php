<?php
App::uses('AppController', 'Controller');
/**
 * EducationalQualifications Controller
 *
 * @property EducationalQualification $EducationalQualification
 */
class EducationalQualificationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EducationalQualification->recursive = 0;
		$this->set('educationalQualifications', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EducationalQualification->id = $id;
		if (!$this->EducationalQualification->exists()) {
			throw new NotFoundException(__('Invalid educational qualification'));
		}
		$this->set('educationalQualification', $this->EducationalQualification->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EducationalQualification->create();
			if ($this->EducationalQualification->save($this->request->data)) {
				$this->Session->setFlash(__('The educational qualification has been saved'), 'success');
				$this->redirect('/profile');
			} else {
				$this->Session->setFlash(__('The educational qualification could not be saved. Please, try again.'));
			}
		}
		$people = $this->EducationalQualification->Person->find('list');
		$educationLevels = $this->EducationalQualification->EducationLevel->find('list');
		$this->set(compact('people', 'educationLevels'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EducationalQualification->id = $id;
		if (!$this->EducationalQualification->exists()) {
			throw new NotFoundException(__('Invalid educational qualification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EducationalQualification->save($this->request->data)) {
				$this->Session->setFlash(__('The educational qualification has been saved'), 'success');
				$this->redirect('/profile');
			} else {
				$this->Session->setFlash(__('The educational qualification could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EducationalQualification->read(null, $id);
		}
		$people = $this->EducationalQualification->Person->find('list');
		$educationLevels = $this->EducationalQualification->EducationLevel->find('list');
		$this->set(compact('people', 'educationLevels'));
	}
	
	public function admin_edit($id = null) {
		$this->EducationalQualification->id = $id;
		if (!$this->EducationalQualification->exists()) {
			throw new NotFoundException(__('Invalid educational qualification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EducationalQualification->save($this->request->data)) {
				$this->Session->setFlash(__('The educational qualification has been saved'), 'success');
				$this->redirect('/dashboard');
			} else {
				$this->Session->setFlash(__('The educational qualification could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EducationalQualification->read(null, $id);
		}
		$people = $this->EducationalQualification->Person->find('list');
		$educationLevels = $this->EducationalQualification->EducationLevel->find('list');
		$this->set(compact('people', 'educationLevels'));
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
		$this->EducationalQualification->id = $id;
		if (!$this->EducationalQualification->exists()) {
			throw new NotFoundException(__('Invalid educational qualification'));
		}
		if ($this->EducationalQualification->delete()) {
			$this->Session->setFlash(__('Educational qualification deleted'), 'success');
			$this->redirect('/profile');
		}
		$this->Session->setFlash(__('Educational qualification was not deleted'));
		$this->redirect('/profile');
	}
	
	
	public function get_single($id = null) {
		$this->EducationalQualification->id = $id;
		if (!$this->EducationalQualification->exists()) {
			throw new NotFoundException(__('Invalid educational qualification'));
		}
		return $this->EducationalQualification->read(null, $id);
	}
	
}
