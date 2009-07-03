<h1>Edit Menu Item</h1> 
<fieldset>
<legend><?php __('Edit Menu Item');?></legend>
<form action="<?php echo $form->url('/menus/edit')?>" method="post"> 
   <?php echo $form->hidden('Menu.id'); ?> 
   <?=$form->error('name');?>
   	<?=$form->input('Menu.name');?>
	<?=$form->input('Menu.position',array('size'=>'10'));?>
	<?php echo $form->input('Menu.active', array('options' => array('yes','no'))); ?>
   <p><?php echo $form->submit('Save') ?> </p> 
</form>
</fieldset>