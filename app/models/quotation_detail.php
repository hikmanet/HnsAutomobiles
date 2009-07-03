<?php 
class QuotationDetail extends AppModel 
{ 
   public $name = 'QuotationDetail';
   public $useTables = 'quotation_details';
   public $belongsTo = array('Vehicle','VehicleModel','Quotation'); 
   public $hasMany = 'QdetailVehicledesc';
  
}
?>