<?php 
class Post extends AppModel 
{ 
   public $name = 'Post'; 
   public $useTables = 'posts';
   var $validate = array('name'=>
                                  array('rule'=>'isUnique',
                                          'message'=>'Sorry, this username already exists'));

   
} 
?>