<div style="padding-left:200px; width:400px;" >
<h1>Add New Sub Menu</h1>
<fieldset>
<legend><?php __('Add Submenu Item');?></legend>
<?=$form->create('Submenu',array('action'=>'add'));?>
<?=$form->error('name');?>
<?=$form->input('Submenu.name');?>
Menu Name:<select name="data[Submenu][menu_id]" id="SubmenuMenuId" >
<option value="-1">select</option>
<?php foreach($menus as $menu):?>
<option value="<?=$menu['Menu']['id']?>"><?=$menu['Menu']['name']?></option>
<? endforeach; ?>
</select><br>
Description: <?=$form->textarea('Submenu.descrp',array('rows'=>'3','cols'=>'30'));?>
<?php echo $form->input('Submenu.action', array('options' => array('yes','no'))); ?>
<?=$form->end('Save');?>
</fieldset>

<?php echo $html->link('View All','/submenus/index/'); ?>

</div>