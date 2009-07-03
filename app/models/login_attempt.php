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
class LoginAttempt extends AppModel
{
    var $name = 'LoginAttempt';
    var $validate = array(
        'host_id'  => VALID_NUMBER
    );
    var $belongsTo = array('Host');
    function cleanUpExpired($date_limit = null)
	{
		if($date_limit)
		{
			$this->query('DELETE FROM login_attempts WHERE login_attempts.created <= '.gmdate("Y-m-d H:i:s",$date_limit));
		}
	}
 }?>