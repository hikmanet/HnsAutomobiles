<?php
/**
 * Group Model File
 *
 * Group Model
 *
 * @copyright		Copyright 2007-2008, 3HN Deisngs.
* @author			Baz L
* @link			http://www.WebDevelopment2.com/
 */

/**
 * Group Model Class
 *
 * @author	Baz L
  */
class Group extends AppModel {

	var $name = 'Group';
	var $validate = array(
		'name' => VALID_NOT_EMPTY,
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'group_id',
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'dependent' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''),
	);

}
?>