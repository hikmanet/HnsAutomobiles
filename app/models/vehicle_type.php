<?php 
class VehicleType extends AppModel 
{ 
   public $name = 'Vehicle_types'; 
   public $useTables = 'vehicle_types';
   //public $hasMany = 'menu';
   var $validate = array('vehicle_type_name'=>array('rule'=>'isUnique','message'=>'Sorry, this name already exists'),
   						 'vehicle_type_name'=>array('rule'=>'alphaNumeric','message'=>'Please Enter Name')
						 );
}
?>