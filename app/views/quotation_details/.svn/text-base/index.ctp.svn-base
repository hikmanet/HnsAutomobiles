<div style="border:groove;background-color:#E9ECF1;"><?
$show = "";
foreach($val as $menu)
{
	$show .= $html->link("{$menu['Menu']['name']}",  "/suppliers/index/")." | ";
}
echo substr($show,0,strlen($show)-2);

?>
</div>
<br>
<div class="p-st"><?php echo $html->link('Add New','/quotations/add/'); ?></div> 
<br>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
?>
<table width="100%" >
  <tr style="background-color:#E9ECF1;">
    <td width="21%">&nbsp;<?php echo $pagination->sortBy('quotation_id','ID');?></td>
    <td width="9%">&nbsp;<?php echo $pagination->sortBy('vehicle_id','VID');?></td>
    <td width="16%">&nbsp;</td>
   </tr>
  <?php
  $i=0;
  echo '<pre>';print_r($quotationd); echo '</pre>';
  foreach ($quotationd as $output)
  {
  $i++;
  	  if($i%2==0)
	  	$color = "#f3f3f3";
	  else
	  $color = "#D5DFE9";
  ?>
  <tr bgcolor="<?php echo $color;?>" class="BDJLebels">
    <td>&nbsp;<?php echo $output['QuotationDetail']['quotation_id'];?></td>
    <td>&nbsp;<?php echo $output['QuotationDetail']['vehicle_id'];?></td>
    <td>&nbsp;<?php echo $html->link("Edit",  "/quotation_details/edit/{$output['QuotationDetail']['id']}");?> &brvbar; <?php echo $html->link("View", "/quotation_details/view/{$output['QuotationDetail']['id']}");?> &brvbar; <?php echo $html->link("Delete", "/quotation_details/delete/{$output['QuotationDetail']['id']}", null, 'Are you sure to delete the following Quotations information?');?></td>
  </tr>
  <?
  }
  ?>
  </table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
  