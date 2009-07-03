<h1><?php echo $data['Post']['name']?></h1> 
<p><small>Created: <?php echo $data['Post']['date']?></small></p> 
<p><?php echo $data['Post']['content']?></p>

<?php echo $html->link('Back','/posts/index/'); ?></p> 