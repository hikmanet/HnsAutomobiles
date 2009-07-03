<?php
class VehicleModelsController extends AppController 
{ 
	public $name = 'VehicleModels'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Pagination');
	var $uses = array('VehicleModel','VehicleCategory');
	
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
        $vehiclemodels = $this->VehicleModel->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('vehiclemodels',$vehiclemodels); 
	}
	
	public function view($id)
	{	
		$this->VehicleModel->id = $id;
		$this->set('data', $this->VehicleModel->read());
	}
	
	function add() {
		$category = $this->VehicleCategory->findAll(); 
		// print_r($category);
		$this->set('category',$category); 
		if (!empty($this->data)) {
			 $this->VehicleModel->create();
			 if ($this->VehicleModel->save($this->data['VehicleModel'])) {
			 $this->Session->setFlash(__('The Vehicle Model has been saved', true));
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
	   if ($this->VehicleModel->del($id)) 
	   { 
		   $this->Session->setFlash('The Vehicle Model has been deleted.');
		   $this->redirect('/vehicle_models');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['VehicleModel']))
	   {
		   $category = $this->VehicleCategory->findAll(); 
		// print_r($category);
		 $this->set('category',$category); 
		   $this->VehicleModel->id = $id;
		   $this->data = $this->VehicleModel->read();
		   $this->set('sdata',$this->data['Vehicle_category']['id']);
		  
	   }
	   else
	   {
		   if($this->VehicleModel->save($this->data['VehicleModel']))
		   {
				$this->Session->setFlash('Model has been updated.');
				$this->redirect('/vehicle_models');
		   }
	   }
	   
	}
} 
?>