<?php 
class VehicleCategorie extends AppModel 
{ 
   public $name = 'Vehicle_categories'; 
   public $useTables = 'vehicle_categories';
   var $validate = array('vehicle_cat_name'=>array('rule'=>'isUnique','message'=>'Sorry, this name already exists'),
   						 'vehicle_cat_name'=>array('rule'=>'alphaNumeric','message'=>'Please Enter Name')
						 );
}
?>