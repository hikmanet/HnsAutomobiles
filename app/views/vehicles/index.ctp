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
<div class="p-st"><?php echo $html->link('Add New','/vehicles/add/'); ?></div> 
<br>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
?>
<table width="100%" >
  <tr style="background-color:#E9ECF1;">
    <td width="15%">&nbsp;<?php echo $pagination->sortBy('vehicle_model_id','Model');?></td>
    <td width="21%">&nbsp;<?php echo $pagination->sortBy('VEHICLE_NAME','Vehicle');?></td>
    <td width="15%">&nbsp;<?php echo $pagination->sortBy('VEHICLE_CHASSIS_CODE','Chassis Code');?></td>
    <td width="24%">&nbsp;<?php echo $pagination->sortBy('VEHICLE_ENGINE_NO','Engine No');?></td>
    <td width="9%">&nbsp;<?php echo $pagination->sortBy('VEHICLE_GRADE','Grade');?></td>
    <td width="16%">&nbsp;</td>
   </tr>
  <?php
  $i=0;
  foreach ($vehicles as $output)
  {
  $i++;
  	  if($i%2==0)
	  	$color = "#f3f3f3";
	  else
	  $color = "#D5DFE9";
  ?>
  <tr bgcolor="<?php echo $color;?>" class="BDJLebels">
    <td>&nbsp;<?php echo $output['VehicleModel']['vehicle_model_name'];?></td>
	 <td>&nbsp;<?php echo $output['Vehicle']['vehicle_name'];?></td>
    <td>&nbsp;<?php echo $output['Vehicle']['vehicle_chassis_code'];?></td>
    <td>&nbsp;<?php echo $output['Vehicle']['vehicle_engine_no'];?></td>
    <td>&nbsp;<?php echo $output['Vehicle']['vehicle_grade'];?></td>
    <td>&nbsp;<?php echo $html->link("Edit",  "/vehicles/edit/{$output['Vehicle']['id']}");?> &brvbar; <?php echo $html->link("View", "/vehicles/view/{$output['Vehicle']['id']}");?> &brvbar; <?php echo $html->link("Delete", "/vehicles/delete/{$output['Vehicle']['id']}", null, 'Are you sure to delete the following Vehicles information?');?></td>
  </tr>
  <?
  }
  ?>
  </table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>