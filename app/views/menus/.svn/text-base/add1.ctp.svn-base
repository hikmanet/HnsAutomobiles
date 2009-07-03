<div style="padding-left:50px; width:300px;" >

<h1>Add a Menu Item</h1>
<fieldset>
<legend><?php __('Add Menu Item');?></legend>
<?=$form->create('Menu',array('action'=>'add'));?>
<?=$form->error('name');?>
<?=$form->input('Menu.name');?>
<?=$form->input('Menu.position',array('size'=>'10'));?>
<?php echo $form->input('Menu.active', array('options' => array('yes','no'))); ?>
<?=$form->end('Save');?>
</fieldset>

<?php echo $html->link('View All','/menus/index/'); ?>

</div>
