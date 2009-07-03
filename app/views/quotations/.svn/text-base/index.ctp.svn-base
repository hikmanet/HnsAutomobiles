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
<div class="p-st"><?php echo $html->link('Add New','/quotations/add/'); ?></div> 
<br>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
?>
<table width="100%" >
  <tr style="background-color:#E9ECF1;">
    <td width="13%">&nbsp;<?php echo $pagination->sortBy('quotation_date','Date');?></td>
    <td width="15%">&nbsp;<?php echo $pagination->sortBy('supplier_name','Supplier');?></td>
    <td width="14%">&nbsp;<?php echo $pagination->sortBy('port_location','PORT');?></td>
    <td width="41%"><table width="100%" border="0" valign='bottom'>
  	<tr style="background-color:#E9ECF1;">
    <td width="39%">&nbsp;Vehicle</td>
    <td width="36%">&nbsp;Chassis Code</td>
    <td width="25%">&nbsp;Model</td>
  	</tr>
	</table>
	</td>
    <td width="17%">&nbsp;</td>
  </tr>

  <?php
  $i=0;
  //echo '<pre>';print_r($quotation); echo '</pre>';

  foreach ($quotation as $output)
  {
  	  //echo '<pre>';print_r($output['QuotationDetail']['vahicle_id']); echo '</pre>';
  $i++;
  if($i%2==0)
	$color = "#f3f3f3";
  else
  $color = "#D5DFE9";
?>
  <tr bgcolor="<?php echo $color;?>" class="BDJLebels">
  	<td>&nbsp;<?php echo date('d-m-Y',strtotime($output['Quotation']['quotation_date']));?></td>
    <td>&nbsp;<?php echo $output['Suppliers']['supplier_name'];?></td>
    <td>&nbsp;<?php echo $output['Quotation']['port_location'];?></td>
    <td>
	<table width="100%" border="0" valign="middle">
  	<?php 
	$qdt1 = Null;
	foreach($output['QuotationDetail'] as $qdt1)
	{
	echo '<pre>';print_r($qdt1); echo '</pre>';
	
		
	?>
	<tr style="background-color:#E9ECF1;" bgcolor="<?php echo $color;?>">
    <td width="39%">&nbsp;<?php echo $qdt1['vehicle_id'];?></td>
    <td width="36%">&nbsp;<?php //echo $qdt1['Vehicle']['vehicle_chassis_code'];?></td>
    <td width="25%">&nbsp;<?php //echo $qdt1['VehicleModel']['vehicle_model_name'];?></td>
  	</tr>
	<?
		//}
	
	}
	?>
	</table>
	</td>
	<td>&nbsp;<?php echo $html->link("Edit",  "/quotations/edit/{$output['Quotation']['id']}");?> &brvbar; <?php echo $html->link("View", "/quotations/view/{$output['Quotation']['id']}");?> &brvbar; <?php echo $html->link("Delete", "/quotations/delete/{$output['Quotation']['id']}", null, 'Are you sure to delete the following Quotations information?');?></td>
  </tr>
  <?
  }
  ?>
  </table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
  <script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>