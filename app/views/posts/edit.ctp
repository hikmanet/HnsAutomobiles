<h1>Edit Note</h1> 
<form action="<?php echo $form->url('/notes/edit')?>" method="post"> 
   <?php echo $form->hidden('Note.id'); ?> 
   <p>Title: <?php echo $form->text('Note.title', array('size' => '40'))?></p> 
   <p>Body: <?php echo $form->textarea('Note.body')?></p> 
   <p><?php echo $form->submit('Save') ?> </p> 
</form>