<h1>Add a note</h1>
<fieldset>
<legend><?php __('Add Notes');?></legend>
<?=$form->create('Post',array('action'=>'add'));?>
<?=$form->error('name');?>
Name:<?=$form->input('Posts.name',array('onBlur'=>'test(this.value)','label' => false));?>
Date: <?=$form->dateTime('Posts.date1');?>
<?=$form->input('Posts.content',array('size'=>'10'));?>
<?=$form->end('Save',array('size'=>'10'));?>
</fieldset>

<?php echo $html->link('All','/posts/add/#',array('onClick'=>'test1("left")')); ?></p> 
<?php echo "<div id='left' style='display:none;' class='addl'>"; ?> 
<?php echo "Div content";?>
<?php echo "</div>";


?>


