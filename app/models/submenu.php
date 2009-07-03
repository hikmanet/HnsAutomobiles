<?php 
class Submenu extends AppModel 
{ 
   public $name = 'Submenu'; 
   public $useTables = 'submenus';
   var $belongsTo = 'Menu'; 
 //  var $actsAs = array('Tree'); 
   var $validate = array('name'=>array('rule'=>'isUnique','message'=>'Sorry, this name already exists')
   );
 
 
}
?>