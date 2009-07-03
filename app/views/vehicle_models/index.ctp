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
<div class="p-st"><?php echo $html->link('Add New','/vehicleModels/add/'); ?></div> 
<br>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
?>
<table width="100%" >
  <tr style="background-color:#E9ECF1;">
    <td width="16%">&nbsp;<?php echo $pagination->sortBy('VehicleCategory.id','Category');?></td>
    <td width="17%">&nbsp;<?php echo $pagination->sortBy('VEHICLE_MODEL_NAME','Model');?></td>
    <td width="11%">&nbsp;<?php echo $pagination->sortBy('VEHICLE_YEAR','Year');?></td>
    <td width="14%">&nbsp;<?php echo $pagination->sortBy('VEHICLE_CAPACITY','Capacity');?></td>
    <td width="24%">&nbsp;<?php echo $pagination->sortBy('DESCRIPTION','Description');?></td>
    <td width="18%">&nbsp;</td>
   </tr>
  <?php
  $i=0;
  foreach ($vehiclemodels as $output)
  {
  $i++;
  	  if($i%2==0)
	  	$color = "#f3f3f3";
	  else
	  $color = "#D5DFE9";
  ?>
  <tr bgcolor="<?php echo $color;?>" class="BDJLebels">
    <td>&nbsp;<?php echo $output['Vehicle_category']['vehicle_cat_name'];?></td>
    <td>&nbsp;<?php echo $output['VehicleModel']['vehicle_model_name'];?></td>
    <td>&nbsp;<?php echo $output['VehicleModel']['vehicle_year'];?></td>
    <td>&nbsp;<?php echo $output['VehicleModel']['vehicle_capacity'];?></td>
    <td>&nbsp;<?php echo $output['VehicleModel']['description'];?></td>
    <td>&nbsp;<?php echo $html->link("Edit",  "/vehicleModels/edit/{$output['VehicleModel']['id']}");?> &brvbar; <?php echo $html->link("View", "/vehicleModels/view/{$output['VehicleModel']['id']}");?> &brvbar; <?php echo $html->link("Delete", "/vehicleModels/delete/{$output['VehicleModel']['id']}", null, 'Are you sure to delete the following Vehicle Models?');?></td>
  </tr>
  <?
  }
  ?>
  </table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>