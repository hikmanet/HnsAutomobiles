<h1>Add a note</h1>
<fieldset>
<legend><?php __('Add Notes');?></legend>
<?=$form->create('Post',array('action'=>'add','type'=>'file'));?>
Name:<?=$form->input('Posts.name',array('onBlur'=>'test(this.value)','label' => false));?>
Date: <?=$form->dateTime('Posts.date');?>
<?php echo $form->input('date', array( 'label' => 'Date of birth'
                                    , 'dateFormat' => 'DMY'
                                    , 'minYear' => date('Y') - 70
                                    , 'maxYear' => date('Y') - 0 ));?>
<?=$form->input('Posts.content',array('size'=>'10'));?>
<?php echo $form->input('Posts.content', array('type' => 'time', 'interval' => 15)); ?>
<?php
echo $form->year('date',2000,date('Y'));
?>
<?php
echo $form->month('mob');
?>
<?php
echo $form->day('created');
?>
<?php
 echo $form->file('avatar');
?>
 <?=$form->end('Save',array('size'=>'10'));?>
</fieldset>

<?php echo $html->link('All','/posts/add/#',array('onClick'=>'test1("left")')); ?></p> 
<?php echo "<div id='left' style='display:none;' class='addl'>"; ?> 
<?php echo "Div content";?>
<?php echo "</div>";


?>
msadjkh

