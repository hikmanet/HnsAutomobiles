<?php
/* SVN FILE: $Id: default.ctp 7805 2008-10-30 17:30:26Z AD7six $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7805 $
 * @modifiedby    $LastChangedBy: AD7six $
 * @lastmodified  $Date: 2008-10-30 12:30:26 -0500 (Thu, 30 Oct 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('HNS Automobiles Automation System:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		//echo $html->css('cake.generic');
		echo $html->css('main');
		echo $html->css('style');
		echo $html->css('chromestyle');
		echo $html->css('datepicker');
		echo $scripts_for_layout;
	?>
	
	<?php
	if(isset($javascript)):
	echo $javascript->link('common');
	echo $javascript->link('jquery');
	echo $javascript->link('prototype');
	echo $javascript->link('src/scriptaculous');
	echo $javascript->link('chrome');
	echo $javascript->link('js/datepicker');
	endif; 
	?>
</head>
<body>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#E9ECF1;">
	<tr>
    <td colspan="3" height="5px" style="background-color:#6A85BB;"></td>
  </tr>
  <tr>
    <td colspan="3" style="background-color:#E9ECF1;"><?php echo $html->image('banner.jpg',array('alt'=>__("HNS-automobiles Home", true),'border'=>"0"), 'http://cakephp.org'); ?></td>
    </tr>
	<tr>
    <td colspan="3" height="10px" style="background-color:#E9ECF1;"></td>
  	</tr>
	<tr>
    <td colspan="3" style="background-color:#E9ECF1;">
		<div id="content">
			<?php $session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
	</td>
    
  </tr>
  <tr>
    <td colspan="3" style="background-color:#E9ECF1;"><div id="footer">
			<?php echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank'), null, false
				);
			?>
		</div></td>
    
  </tr>
</table>

</body>
</html>