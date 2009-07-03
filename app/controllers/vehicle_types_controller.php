<?php
class VehicleTypesController extends AppController 
{ 
	public $name = 'VehicleTypes'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Pagination');
	
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
        $vehicletypes = $this->VehicleType->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('vehicletypes',$vehicletypes); 
	}
	/*public function index()
	{
	   $this->set('Menus', $this->Menu->findAll());
	}
	*/
	public function view($id)
	{	
		$this->VehicleType->id = $id;
		$this->set('data', $this->VehicleType->read());
	}
	
	function add() {
		if (!empty($this->data)) {
			 $this->VehicleType->create();
			 if ($this->VehicleType->save($this->data['VehicleType'])) {
			 $this->Session->setFlash(__('The Vehicle Type has been saved', true));
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
	   if ($this->VehicleType->del($id)) 
	   { 
		   $this->Session->setFlash('The Vehicle Types with id: '.$id.' has been deleted.');
		   $this->redirect('/vehicle_types');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['VehicleType']))
	   {
		   $this->VehicleType->id = $id;
		   $this->data = $this->VehicleType->read();
	   }
	   else
	   {
		   if($this->VehicleType->save($this->data['VehicleType']))
		   {
				$this->Session->setFlash('Supplier has been updated.');
				$this->redirect('/vehicle_types');
		   }
	   }
	   
	}
} 
?>