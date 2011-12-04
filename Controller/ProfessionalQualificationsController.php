<?php
App::uses('AppController', 'Controller');
/**
 * ProfessionalQualifications Controller
 *
 * @property ProfessionalQualification $ProfessionalQualification
 */
class ProfessionalQualificationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProfessionalQualification->recursive = 0;
		$this->set('professionalQualifications', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProfessionalQualification->id = $id;
		if (!$this->ProfessionalQualification->exists()) {
			throw new NotFoundException(__('Invalid professional qualification'));
		}
		$this->set('professionalQualification', $this->ProfessionalQualification->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProfessionalQualification->create();
			if ($this->ProfessionalQualification->save($this->request->data)) {
				$this->Session->setFlash(__('The professional qualification has been saved'), 'success');
				$this->redirect('/');
			} else {
				$this->Session->setFlash(__('The professional qualification could not be saved. Please, try again.'));
			}
		}
		$people = $this->ProfessionalQualification->Person->find('list');
		$sectors = $this->ProfessionalQualification->Sector->find('list');
		$this->set(compact('people', 'sectors'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProfessionalQualification->id = $id;
		if (!$this->ProfessionalQualification->exists()) {
			throw new NotFoundException(__('Invalid professional qualification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProfessionalQualification->save($this->request->data)) {
				$this->Session->setFlash(__('The professional qualification has been saved'), 'success');
				$this->redirect('/');
			} else {
				$this->Session->setFlash(__('The professional qualification could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProfessionalQualification->read(null, $id);
		}
		$people = $this->ProfessionalQualification->Person->find('list');
		$sectors = $this->ProfessionalQualification->Sector->find('list');
		$this->set(compact('people', 'sectors'));
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
		$this->ProfessionalQualification->id = $id;
		if (!$this->ProfessionalQualification->exists()) {
			throw new NotFoundException(__('Invalid professional qualification'));
		}
		if ($this->ProfessionalQualification->delete()) {
			$this->Session->setFlash(__('Professional qualification deleted'), 'success');
			$this->redirect('/');
		}
		$this->Session->setFlash(__('Professional qualification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
