<div class="Menu">
    <h2>Menus</h2>    
    <?php echo $form->create('Menu', array('action' => 'add')); ?>
        <?php echo $form->input('id',array("type"=>"hidden")); ?>
        <?php echo $form->input('name'); ?>
        <?php echo $form->input('position'); ?>
        <?php echo $form->submit('GO'); ?>
    <?php echo $form->end(); ?>
</div> 
<?php echo $jmycake->autocomplete('MenuMenu','Menu.name',array('MenuId'=>'id','MenuPosition'=>'position')); ?> 
