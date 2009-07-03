<?php
class VehicleDescsController extends AppController 
{ 
	public $name = 'VehicleDescs'; 
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
        $vehicledescs = $this->VehicleDesc->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('vehicledescs',$vehicledescs); 
	}
	public function view($id)
	{	
		$this->VehicleDesc->id = $id;
		$this->set('data', $this->VehicleDesc->read());
	}
	
	function add() {
		if (!empty($this->data)) {
			 $this->VehicleDesc->create();
			 if ($this->VehicleDesc->save($this->data['VehicleDesc'])) {
			 $this->Session->setFlash(__('The Vehicle Description has been saved', true));
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
	   if ($this->VehicleDesc->del($id)) 
	   { 
		   $this->Session->setFlash('The Vehicle Description has been deleted.');
		   $this->redirect('/vehicle_descs');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['VehicleDesc']))
	   {
		   $this->VehicleDesc->id = $id;
		   $this->data = $this->VehicleDesc->read();
		   $this->set('sdata',$this->data['VehicleDesc']['desc_type_value_s']);
	   }
	   else
	   {
		   if($this->VehicleDesc->save($this->data['VehicleDesc']))
		   {
				$this->Session->setFlash('Description has been updated.');
				$this->redirect('/vehicle_descs');
		   }
	   }
	   
	}
} 
?>