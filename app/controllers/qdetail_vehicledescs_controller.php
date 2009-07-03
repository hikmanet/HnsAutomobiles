<?php
class QdetailVehicledescsController extends AppController 
{ 
	public $name = 'QdetailVehicledescs'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Html', 'Form','Pagination','Javascript','Ajax');
	var $uses = array('QdetailVehicledesc','VehicleDesc','QuotationDetail');
	
	
	function index() {
		$criteria=NULL; 
        list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
        $qdvd = $this->QdetailVehicledesc->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('qdvd',$qdvd); 


	}
} 
?>