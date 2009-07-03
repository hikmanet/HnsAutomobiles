<?php 
class Menu extends AppModel 
{ 
   public $name = 'Menu'; 
   public $useTables = 'menus';
   var $validate = array('name'=>array('rule'=>'isUnique','message'=>'Sorry, this name already exists')
   );
  
}
?>