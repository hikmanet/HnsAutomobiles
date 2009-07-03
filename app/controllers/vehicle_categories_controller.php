<?php
class VehicleCategoriesController extends AppController 
{ 
	public $name = 'Vehicle_categories'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Html', 'Form','Pagination','Javascript','Ajax');
	
	function index() {
		$val = $this->beforeRender();
		$this->set('val',$val);
		$criteria=NULL; 
        list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
        $vehiclecategories = $this->VehicleCategory->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('vehiclecategories',$vehiclecategories); 
	}
	
	public function view($id)
	{	
		$this->VehicleCategory->id = $id;
		$this->set('data', $this->VehicleCategory->read());
	}
	
	function add() {
		if (!empty($this->data)) {
			 $this->VehicleCategory->create();
			 if ($this->VehicleCategory->save($this->data['VehicleCategory'])) {
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
	   if ($this->VehicleCategory->del($id)) 
	   { 
		   $this->Session->setFlash('The Vehicle Category has been deleted.');
		   $this->redirect('/vehicle_categories');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['VehicleCategory']))
	   {
		   $this->VehicleCategory->id = $id;
		   $this->data = $this->VehicleCategory->read();
	   }
	   else
	   {
		   if($this->VehicleCategory->save($this->data['VehicleCategory']))
		   {
				$this->Session->setFlash('Category has been updated.');
				$this->redirect('/vehicle_categories');
		   }
	   }
	   
	}
} 
?>