<?php
class QuotationsController extends AppController 
{ 
	public $name = 'Quotations'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Pagination','Javascript','Ajax');
	var $uses = array('Quotation','QuotationDetail','Supplier','Vehicle','VehicleModel','VehicleDesc');

	function index() {
		$val = $this->beforeRender();
		$this->set('val',$val);
		/*
		@render all related tables
		@mujib
		
		$vehicleModel = $this->VehicleModel->findAll();
		$this->set('vehicleModel',$vehicleModel);
		
		$vehicle = $this->Vehicle->findAll();
		$this->set('vehicle',$vehicle);
		*/
		
		
		$criteria=NULL; 
        list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
        $quotations = $this->Quotation->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('quotation',$quotations);
		//echo "<pre>";print_r($quotations);echo "</pre>";
		
		/*fetch data from quotation*/
		
		/*$i=0;
		foreach($quotations as $qid)
		{
			$id = $qid['Quotation']['id'];
			//echo $id." ,";
			$qdt[] = $this->QuotationDetail->findAll(" QuotationDetail.quotation_id =".$id);
			$i++;
		}
		//echo "<pre>";print_r($qdt);echo "</pre>";
		//echo "<pre>";echo count($qId);echo "</pre>";
		$this->set('qdt',$qdt);*/
	}
	
	public function view($id)
	{	
		/*$QuotationDetails = $this->QuotationDetail->findAll(); 
		 print_r($QuotationDetails);
		$this->set('QuotationDetails',$QuotationDetails); 
		*/
		
		$this->Quotation->id = $id;		
		$this->set('data', $this->Quotation->read());
/*
		$vehicle = $this->Vehicle->findAll(); 
		 print_r($vehicle);
		$this->set('vehicle',$vehicle); 

		$vehiclemodel = $this->VehicleModel->findAll(); 
		 print_r($vehiclemodel);
		$this->set('vehiclemodel',$vehiclemodel); 
*/

		
				
	}
	
	function add() {
		/*suppliers*/
		$supplier = $this->Supplier->findAll(); 
		$this->set('supplier',$supplier); 
		/*Vehicle*/
		$vehicle = $this->Vehicle->findAll();
		$this->set('vehicle',$vehicle); 
		/*Vehicle Model*/
		$vehicleModel = $this->VehicleModel->findAll();
		$this->set('vehicleModel',$vehicleModel); 
		/*Vehicle Descriptions*/
		$vehicleDesc = $this->VehicleDesc->findAll(NULL,NULL," order by id asc");
		$this->set('vehicleDesc',$vehicleDesc);
			
		if (!empty($this->data)) {
			echo "<pre>";print_r($this->data);echo "</pre>";
			 //$this->Quotation->create();
			 //if ($this->Quotation->save($this->data['Quotation'])) {
			 
			 //$this->data['QuotationDetail'][0]['quotation_id'] = $this->Quotation->id;
			 //echo "<pre>";print_r($this->data);echo "</pre>";
			 
			//$this->Quotation->saveAll($this->data);
			
			//$this->data['QdetailVehicledesc']['quotation_detail_id'] = $this->QuotationDetail->id;
			//echo "<pre>";print_r($this->data);echo "</pre>";
			
			$this->Quotation->saveAll($this->data);
			$this->Session->setFlash(__('The Vehicle data has been saved', true));
			// $this->redirect(array('action'=>'index'));
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
		 //$model = $this->VehicleModel->findAll(); 
		// print_r($model);
		// $this->set('model',$model); 
		 $this->Quotation->id = $id;
		 $this->data = $this->Quotation->read();
		// $this->set('sdata',$this->data['VehicleModel']['id']);
		  
	   }
	   else
	   {
		   if($this->Quotation->save($this->data['Quotation']))
		   {
				$this->Session->setFlash('Vehicle data has been updated.');
				$this->redirect('/vehicles');
		   }
	   }
	   
	}
} 
?>