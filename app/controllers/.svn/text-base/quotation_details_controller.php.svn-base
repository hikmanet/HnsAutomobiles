<?php
class QuotationDetailsController extends AppController 
{ 
	public $name = 'QuotationDetails'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Html', 'Form','Pagination','Javascript','Ajax');
	var $uses = array('QuotationDetail','Vehicle','VehicleModel','QdetailVehicledesc');
	
	
	function index() {
		$val = $this->beforeRender();
		$this->set('val',$val);
		$criteria=NULL; 
        list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
        $quotationd = $this->QuotationDetail->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('quotationd',$quotationd); 


	}
	
	public function view($id)
	{	

	/**	$this->Quotation->id = $id;		
		$this->set('data', $this->Quotation->read());
/*
		$vehicle = $this->Vehicle->findAll(); 
		 print_r($vehicle);
		$this->set('vehicle',$vehicle); 

		$vehiclemodel = $this->VehicleModel->findAll(); 
		 print_r($vehiclemodel);
		$this->set('vehiclemodel',$vehiclemodel); 
*/

		$QuotationDetails = $this->QuotationDetails->findAll(); 
		 print_r($QuotationDetails);
		$this->set('QuotationDetails',$QuotationDetails); 
				
	}
	
	function add() {
		/*VehicleModel*/
		//$model = $this->VehicleModel->findAll(); 
		//print_r($model);
		//$this->set('model',$model); 
		
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
	   if ($this->Quotation->del($id)) 
	   { 
		   $this->Session->setFlash('The Quotation data has been deleted.');
		   $this->redirect('/quotations');
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