<?php 
/*
 * PHP versions 4 and 5
 *
 * dAuth: A secure authentication system for the cakePHP framework.
 * Copyright (c)	2006, Dieter Plaetinck
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author			Dieter Plaetinck
 * @copyright		Copyright (c) 2006, Dieter Plaetinck
 * @version			0.3
 * @modifiedby		Dieter@be
 * @lastmodified	$Date: 2006-12-04 16:18:00 +0000 (Mon, 4 Dec 2006) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class Host extends AppModel
{
    var $name = 'Host';
	var $hasMany = array('LoginAttempt');
    var $validate = array (
        'ip_adress'  => VALID_NOT_EMPTY
    );
    function block ($id = null,$time = null)
    {
    	$success = false;
    	if ($id)
    	{
    		if(!$time)
    		{
    			$time = time();
    		}
    		$this->id = $id;
    		$success = $this->saveField('blocked', $time);
    	}
    	return $success;
    }

	/*
	 *  not really used since hosts are unblocked automatically when the 'blocked' timestamp expires
	 */
   function unBlock ($id = null)
   {
   		$success = false;
   		if ($id)
   		{
   			$this->id = $id;
   			$success = $this->saveField('blocked', '0');
   		}
   		return $success;
   	}

   function isBlocked($host = null,$limit = null)
   {
   		$blocked = false;

   		if($host && $limit)
   		{
   			if($host['Host']['blocked'] >= $limit)
   			{
   				$blocked = true;
   			}
   		}
   		return $blocked;
   }

   function isHammering($data = null,$rules = null)
	{
		$hammer = false;

		if($data['Host'] && $rules && is_array($rules))
		{
			//$datetime = gmdate("Y-m-d H:i:s", $time);
			//strtotime($datetime.' GMT')
			$time = time();
			$time += 60*60;
			//FIXME: really ugly hack . time() is gmt while cake is my timezone. making gmdate -> date below, doesn't work
			$limit = $time - $rules['seconds'];
			$attempts = $this->LoginAttempt->findCount(array('host_id' => ' = '.$data['Host']['id'],'LoginAttempt.created' => '>= '.gmdate("Y-m-d H:i:s", $limit)));
			if($attempts >= $rules['attempts'])
			{
				$hammer = true;
			}
		}
		return $hammer;
	}
}?>