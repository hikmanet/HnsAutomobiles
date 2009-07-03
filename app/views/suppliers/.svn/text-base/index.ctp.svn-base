<div class="chromestyle" id="chromemenu">
<ul>
<?
$i = 0;
foreach($val as $menu)
{
$i++;
$drop = "dropmenu".$i;
?>
<li><? echo $ajax->link("{$menu['Menu']['name']}",array( 'controller' => 'suppliers', 'action' =>"sdt/{$menu['Menu']['id']}"),array( 'update' => "$drop","rel"=>"$drop"));?></li>
<?php
}
?>
</ul>
</div>
<?
for($j=1;$j<=$i;$j++)
{
?>
<div id="dropmenu<?php echo $j;?>" class="dropmenudiv" style="padding-top:1px">
</div>
<?
}
?>
<br>
<div class="p-st"><?php echo $html->link('Add New','/suppliers/add/'); ?></div> 
<br>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
?>
<table width="100%" >
  <tr style="background-color:#E9ECF1;">
    <td width="21%">&nbsp;<?php echo $pagination->sortBy('SUPPLIER_NAME','Name');?></td>
    <td width="18%" >&nbsp;<?php echo  $pagination->sortBy('SUPPLIER_COUNTRY','Country');?></td>
    <td width="22%">&nbsp;<?php echo $pagination->sortBy('SUPPLIER_PHONE','Phone');?></td>
    <td width="21%">&nbsp;<?php echo $pagination->sortBy('SUPPLIER_EMAIL','Email');?></td>
    <td width="15%">&nbsp;</td>
    
  </tr>
  <?php
  $i=0;
  foreach ($suppliers as $output)
  {  
  	$i++;
  	  if($i%2==0)
	  	$color = "#f3f3f3";
	  else
	  $color = "#D5DFE9";
  ?>
  <tr bgcolor="<?php echo $color;?>" class="BDJLebels" >
    <td>&nbsp;<?php echo $output['Supplier']['supplier_name'];?></td>
    <td>&nbsp;<?php echo $output['Supplier']['supplier_country'];?></td>
    <td>&nbsp;<?php echo $output['Supplier']['supplier_phone'];?></td>
    <td>&nbsp;<?php echo $output['Supplier']['supplier_email']?></td>
    <td>&nbsp;<?php echo $html->link("Edit",  "/suppliers/edit/{$output['Supplier']['id']}");?>&nbsp;&brvbar;&nbsp;<?php echo $html->link("View", "/suppliers/view/{$output['Supplier']['id']}");?>&nbsp;&brvbar;&nbsp;<?php echo $html->link("Delete", "/suppliers/delete/{$output['Supplier']['id']}", null, 'Are you sure to delete the following Supplier?');?></td>
  </tr>
  <?
  }
  ?>
  </table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
