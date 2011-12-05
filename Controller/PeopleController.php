<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Person $Person
 */
class PeopleController extends AppController {
  
  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow(array('register'));
  }
  
  public function register() {
		if ($this->request->is('post')) {
			$this->Person->create();
			$this->Person->set($this->request->data);
			if ($this->Person->validates()) {
			  if ($this->request->data['Person']['password'] != $this->request->data['Person']['confirm_pass']) {
  			  $this->Session->setFlash(__('Passwords do not match.'), 'error');
  			  return;
  			}
  			$this->Person->data['Person']['password'] = $this->Auth->password($this->request->data['Person']['password']);
  			if ($this->Person->save()) {
  				$this->Auth->login();
  				$this->Session->setFlash("{$this->Session->read('Auth.User.forename1')}, welcome to TalentSeekr! <a href='/profile'>Go to my profile.</a>", 'success');
          $this->redirect('/');
  			}
			} else {
				$this->Session->setFlash(__('There was a problem with your registration. Please try again.'), 'error');
			}
		}
	}
  
  public function logout() {
    $this->Auth->logout();
    $this->Session->setFlash('Bye Bye', 'success');
    $this->redirect('/');
  }
  
  public function login() {
      if ($this->request->is('post')) {
          if ($this->Auth->login()) {
      				$this->Session->setFlash("Welcome back {$this->Session->read('Auth.User.forename1')}. <a href='/profile'>Go to my profile.</a>", 'success');
              return $this->redirect($this->Auth->redirect());
          } else {
              $this->Session->setFlash(__('Username or password is incorrect'), 'default', array('class' => 'error-message'), 'auth');
          }
      }
  }

	public function view($id = null) {
	  if (!$id) {
	    $id = $this->Session->read('Auth.User.idUser');
	  }
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$this->set('person', $this->Person->read(null, $id));
	}

	public function edit() {
	  $id = $this->Session->read('Auth.User.idUser');
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('Your profile has been updated!'), 'success');
				$this->redirect('/profile');
			} else {
				$this->Session->setFlash(__('We couldnt update your profile'), 'error');
			}
		} else {
			$this->request->data = $this->Person->read(null, $id);
		}
		$educationLevels = $this->Person->EducationLevel->find('list');
		$this->set(compact('educationLevels'));
	}

	public function delete() {
	  $id = $this->Session->read('Auth.User.idUser');
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->Person->delete()) {
			$this->Session->setFlash(__('Person deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Person was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
