<?php 
class Vehicle extends AppModel 
{ 
   public $name = 'Vehicles'; 
   public $useTables = 'vehicles';
   public $belongsTo = 'VehicleModel';
   /*
   var $validate = array('vehicle_type_name'=>array('rule'=>'isUnique','message'=>'Sorry, this name already exists'),
   						 'vehicle_type_name'=>array('rule'=>'alphaNumeric','message'=>'Please Enter Name')
						 );
	*/
}
?>