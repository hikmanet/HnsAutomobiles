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
<div class="p-st"><?php echo $html->link('Add New','/vehicleCategories/add/'); ?></div> 
<br>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
?>
<table width="60%" >
  <tr style="background-color:#E9ECF1;">
    <td width="35%">&nbsp;<?php echo $pagination->sortBy('VEHICLE_CAT_NAME','Category');?></td>
    <td width="42%">&nbsp;<?php echo $pagination->sortBy('DESCRIPTION','Description');?></td>
    <td width="23%">&nbsp;</td>
   </tr>
  <?php
  $i=0;
  foreach ($vehiclecategories as $output)
  {
  $i++;
  	  if($i%2==0)
	  	$color = "#f3f3f3";
	  else
	  $color = "#D5DFE9";
  ?>
  <tr bgcolor="<?php echo $color;?>" class="BDJLebels">
    <td>&nbsp;<?php echo $output['VehicleCategory']['vehicle_cat_name'];?></td>
    <td>&nbsp;<?php echo $output['VehicleCategory']['description']?></td>
    <td>&nbsp;<?php echo $html->link("Edit",  "/vehicleCategories/edit/{$output['VehicleCategory']['id']}");?> &brvbar; <?php echo $html->link("View", "/vehicleCategories/view/{$output['VehicleCategory']['id']}");?> &brvbar; <?php echo $html->link("Delete", "/vehicleCategories/delete/{$output['VehicleCategory']['id']}", null, 'Are you sure to delete the following Vehicle Categories?');?></td>
  </tr>
  <?
  }
  ?>
  </table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>