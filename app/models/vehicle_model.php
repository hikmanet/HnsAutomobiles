<?php 
class VehicleModel extends AppModel 
{ 
   public $name = 'Vehicle_models'; 
   public $useTables = 'vehicle_models';
   public $belongsTo = 'Vehicle_category';
   /*
   var $validate = array('vehicle_type_name'=>array('rule'=>'isUnique','message'=>'Sorry, this name already exists'),
   						 'vehicle_type_name'=>array('rule'=>'alphaNumeric','message'=>'Please Enter Name')
						 );
	*/
}
?>