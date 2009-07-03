<?php 
class Supplier extends AppModel 
{ 
   public $name = 'Supplier'; 
   public $useTables = 'suppliers';
   var $validate = array('supplier_name'=>array('rule'=>'isUnique','message'=>'Sorry, this name already exists'),
   						 'supplier_name'=>array('rule'=>'alphaNumeric','message'=>'Please Enter Name'),
						 'supplier_email'=>array('rule'=>'email','message'=>'Sorry, this is not a valid email')
   );
}
?>