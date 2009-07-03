<?php 
class Quotation extends AppModel 
{ 
   public $name = 'Quotation'; 
   public $useTables = 'quotation';
   public $belongsTo = 'Suppliers';
 //  public $hasMany = array('QuotationDetail';
 var $hasMany = array('QuotationDetail'=> array('dependent'=>true));
   
/*    var $hasMany = array(
        'QuotationDetail' => array(
            'className'     => 'QuotationDetail',
            'foreignKey'    => 'quotation_id',
            'dependent'=> true
        )
    ); 
 */
 }
?>