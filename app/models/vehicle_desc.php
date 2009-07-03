<?php 
class VehicleDesc extends AppModel 
{ 
   public $name = 'Vehicle_descs'; 
   public $useTables = 'vehicle_descs';
   //public $hasMany = 'menu';
   var $validate = array('vehicle_desc_title'=>array('rule'=>'isUnique','message'=>'Sorry, this name already exists')
						 );
}
?>