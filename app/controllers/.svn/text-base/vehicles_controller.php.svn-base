<?php
class VehiclesController extends AppController 
{ 
	public $name = 'Vehicles'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Pagination');
	var $uses = array('Vehicle','VehicleModel');
	
	/*
	var	$menus= null;
	function initialize() {
       $this->_loadModels();
    }
	function beforeRender()
	{
		App::import('Controller', 'Menus');
		$this->menus = new MenusController();
		$this->menus->constructClasses();
		return $this->menus->test();
	}
	
	function renderSubmenu($id)
	{
		App::import('Controller', 'Submenus');
		$this->submenus = new SubmenusController();
		$this->submenus->constructClasses();
		return $this->submenus->smenu($id);
	}
	function sdt($id)
	{
		$sdata = $this->renderSubmenu($id);
		$this->set('sdata',$sdata);
		//$this->set('t',$t);
	}
	*/
	
	
	function index() {
		$val = $this->beforeRender();
		$this->set('val',$val);
		$criteria=NULL; 
        list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
        $vehicles = $this->Vehicle->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('vehicles',$vehicles); 
	}
	
	public function view($id)
	{	
		$this->Vehicle->id = $id;
		$this->set('data', $this->Vehicle->read());
	}
	
	function add() {
		$model = $this->VehicleModel->findAll(); 
		$this->set('model',$model); 
		if (!empty($this->data)) {
			 $this->Vehicle->create();
			 if ($this->Vehicle->save($this->data['Vehicle'])) {
			 $this->Session->setFlash(__('The Vehicle data has been saved', true));
			 $this->redirect(array('action'=>'index'));
		 	} 
			 else 
			 {
				 $this->Session->setFlash(__('Could not be saved. Please, try again.',true));
			 }
		}
	}
	
	function delete($id) 
	{ 
	   if ($this->Vehicle->del($id)) 
	   { 
		   $this->Session->setFlash('The Vehicle data has been deleted.');
		   $this->redirect('/vehicles');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['Vehicle']))
	   {
		 $model = $this->VehicleModel->findAll(); 
		// print_r($model);
		 $this->set('model',$model); 
		 $this->Vehicle->id = $id;
		 $this->data = $this->Vehicle->read();
		 $this->set('sdata',$this->data['VehicleModel']['id']);
		  
	   }
	   else
	   {
		   if($this->Vehicle->save($this->data['Vehicle']))
		   {
				$this->Session->setFlash('Vehicle data has been updated.');
				$this->redirect('/vehicles');
		   }
	   }
	   
	}
} 
?>