<?php
require_once('../Vendor/dompdf/dompdf_config.inc.php');
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * People Controller
 *
 * @property Person $Person
 */
class PeopleController extends AppController {
  
  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow(array('register', 'get_photo', 'view', 'print_cv', 'contact', 'to_pdf'));
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
		$this->set('sectors', $this->Person->Sector->find('list'));
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
		$this->set('sectors', $this->Person->Sector->find('list'));
	}

  public function get_photo($id = null) {
    $this->Person->id = $id;
    if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$person = $this->Person->read(null, $id);
		$this->response->header(array(
		  'Content-type' => 'image/jpeg',
		  'Content-Length' => strlen($person['Person']['photo'])
		));
		$this->autoRender = false;
		return $person['Person']['photo'];
  }
  
  public function delete_photo() {
    $id = $this->Session->read('Auth.User.idUser');
    $this->Person->id = $id;
    $person = $this->Person->read(null, $id);
    $person['Person']['photo'] = array(
      'error' => 4,
      'size' => 0
    );
    $this->Person->save($person);
    $this->redirect($this->referer());
  }
  
  public function contact($id = null) {
	  if (!$id) {
	    $id = $this->Session->read('Auth.User.idUser');
	  }
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$this->set('person', $this->Person->read(null, $id));
		$this->set('sectors', $this->Person->Sector->find('list'));
		
		if ($this->request->is('post')) {
		  if (!$this->data['Person']['subject']) {
		    $this->Session->setFlash('Please specify a subject for your message');
		  } else if (!$this->data['Person']['message']) {
		    $this->Session->setFlash('What is your message?');
		  } else {
		    $email = new CakeEmail('default');
        $email->to($this->data['Person']['email']);
        $email->subject($this->data['Person']['subject']);
        $email->send($this->data['Person']['message']);
		    $this->Session->setFlash('Your message has been sent sucessfully', 'success');
		  }
	  }
		
	}









  public function print_cv($id = null) {
    $this->Person->id = $id;
    if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$person = $this->Person->read(null, $id);
		$this->layout = 'print';
		$this->set(compact('person'));
		$this->set('sectors', $this->Person->Sector->find('list'));
  }
  
  
  public function to_pdf($id = null) {
    $this->Person->id = $id;
    if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$person = $this->Person->read(null, $id);
    $this->autoRender = false;
    
    $dompdf = new DOMPDF();
    $dompdf->load_html_file("http://set-project.dev/people/print_cv/$id");
    $dompdf->render();
    $dompdf->stream("{$person['Person']['forename1']}_CV.pdf");
  }
  
  
  
  

}
