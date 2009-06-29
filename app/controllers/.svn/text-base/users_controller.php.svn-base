<?php
/**
 *User Controller File
 *
 * User Controller
 *
 * @copyright		Copyright 2007-2008, 3HN Deisngs.
* @author			Baz L
* @link			http://www.WebDevelopment2.com/
 */
 
/**
 * User Controller class
 *
 * @author			Kevin Lloyd
 */
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form', 'Session');
	//var $components = array('Auth'); 
	
	function beforeFilter(){
		//Set up Auth Component
		//parent::beforeFilter(); 
		//$this->Auth->allowedActions = array('*');
		//echo "mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm";
		//$this->Session->setFlash('Invalid User.');
		//	$this->redirect(array('action'=>'index'), null, true);
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'suppliers', 'display' => 'index');
		$this->Auth->logoutRedirect = '/';
		//$this->Auth->allow('*');
		
		// Controller autorization is the simplest form.
		$this->Auth->authorize = 'controller';
		
		//  Additional criteria for loging.
		$this->Auth->userScope = array('User.active' => 1); //user needs to be active.
		
	}
	
	function isAuthorized() {
		if (isset($this->params[Configure::read('Routing.admin')])) {
			//  Usage: $this->Auth->user('field_in_user_model');
			if ($this->Auth->user('group_id') != 1) {
				return false;
			}
		}
		return true;
   }

/**
 * All the admin_ functions are straight from cake's console bake
 *
 */
	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid User.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid User');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data))
			{
				$this->Session->setFlash('The User has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			}
			else
			{
				$this->Session->setFlash('The User could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for User');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->User->del($id)) {
			$this->Session->setFlash('User #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data))
			{
				$this->Session->setFlash('The User has been saved');
				$this->redirect(array('action'=>'index'), null, true);
		} else 
			{
				$this->Session->setFlash('The User could not be saved. Please, try again.');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}
/**
 * End of baked views
 */

/**
 * Login the user
 *
 * Again, keeping it simple this just needs to remain empty. The component handles everything
 *
 */	
	function login()
	{
		
	}

	/**
	 * Log out user
	 *
	 */
	
	function logout(){
        $this->Session->setFlash('Logout');
	    $this->redirect($this->Auth->logout());
    }
	
	
}
?>