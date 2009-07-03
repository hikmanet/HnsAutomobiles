<?php 
class qdetailVehicledesc extends AppModel 
{ 
   public $name = 'QdetailVehicledesc';
   public $useTables = 'qdetails_vehicledescs';
   public $belongsTo = array('VehicleDesc','QuotationDetail'); 
 //  public $hasMany = "Vehicle_descs";
  
}
?>