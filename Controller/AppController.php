<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 */
class AppController extends Controller {
  
  public $helpers = array('Html', 'Form', 'Session', 'Text', 'Time');
  
  public $components = array(
      'Email',
      'Session',
      'Auth' => array(
          'loginAction' => array(
              'controller' => 'people',
              'action' => 'login'
          ),
          'authError' => 'Please login first',
          'authenticate' => array(
              'Form' => array(
                'userModel' => 'Person'
              )
          )
      )
  );
  
  protected function kill_if_not_admin() {
    if ($this->Session->read('Auth.User.role') != 'admin') {
      $this->Session->setFlash('You are not authorized to access this resource.');
      $this->redirect('/');
    }
  }
  
  public function beforeFilter() {
    $this->Auth->allow(array('get_single'));
  }
  
}
