<script language="javascript">
var proId=0;
function createQt(table,id)
{
	var m;
	var func;
	var tstr = "";
	
	if(id=='proId')
	{
		proId++;
		i=proId;
		m=i;
		tstr +="<span><tr style='background-color:#E9ECF1;'><td width='29%'><select name='data[QuotationDetail]["+m+"][vehicle_id]' id='QuotationDetailsVehicleId' style='width:180px' ><option value='-1'>Select Vehicle - Grade</option><?php foreach($vehicle as $model):?><option value='<?=$model['Vehicle']['id']?>'><?=$model['Vehicle']['vehicle_name'].' - '.$model['Vehicle']['vehicle_grade']?></option><? endforeach; ?></select></td><td width='30%'><select name='data[QuotationDetail]["+m+"][chassis_id]' id='QuotationDetailsChassisId' style='width:180px' ><option value='-1'>Select Chassis Code</option><?php foreach($vehicle as $model):?><option value='<?=$model['Vehicle']['id']?>'><?=$model['Vehicle']['vehicle_chassis_code']?></option><? endforeach; ?></select></td><td width='25%'><select name='data[QuotationDetail]["+m+"][vehicle_model_id]' id='QuotationDetailsVehicleModelId' style='width:180px'><option value='-1'>Select Model - Year</option><?php foreach($vehicleModel as $model):?><option value='<?=$model['VehicleModel']['id']?>'><?=$model['VehicleModel']['vehicle_model_name'].' - '.$model['VehicleModel']['vehicle_year']?></option><? endforeach; ?></select></td><td width='16%'></td></tr></span>";
		var tmp = document.getElementById(table).innerHTML;
		tmp = tmp.replace('</TABLE>','');
		document.getElementById(table).innerHTML = tmp+tstr+'</table>';
	
}

}
function removeQt(table,id)
{
	var i =0;
	if(id=='proId')
	{			
		i=proId;
		if(i<=0)
			return;
		else
			proId--;
	}
			
	var str = document.getElementById(table).innerHTML;	
	str = str.substring(0,str.lastIndexOf('<SPAN>'));		
	document.getElementById(table).innerHTML=str+" </table>";	
}

</script>

<div style="width:800px; text-align:center" >
<fieldset>
<legend><?php __("Add Quotation Information");?></legend><br/>
<?=$form->create("Quotation",array("action"=>"add"));?>
<?
//echo "<pre>";print_r($vehicle); echo "</pre>";
echo "<pre>";
?>

<table width="100%" border="0">
<tr>
   <td colspan="2" align="left" class="BDJLebels">Quotation Information</td>
  </tr>
  <tr>
     <td valign="middle"  bgcolor="#CCCCCC" colspan="2" height="3px"></td>
   </tr>
  <tr>
    <td width="28%" align="right" valign="middle" class="BDJLebels">&nbsp;Suppliers :</td>
    <td width="72%" align="left"><select name="data[Quotation][suppliers_id]" id="QuotationSuppliersId" style="width:180px" >
	<option value="-1">Select Suppliers</option>
	<?php foreach($supplier as $model):?>
		<option value="<?=$model['Supplier']['id']?>"><?=$model['Supplier']['supplier_name']?></option>
	<? endforeach; ?>
	</select></td>
  </tr>
  <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Qutation Date :</td>
     <td align="left"><input type="text" name='data[Quotation][quotation_date]' size='15' readonly="true" class="w8em format-d-m-y divider-dash highlight-days-12 no-transparency"/></td>
   </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">Port Location :</td>
    <td align="left"><?=$form->input("Quotation.port_location",array("size"=>"25","label"=>false));?></td>
  </tr>
     <tr>
     <td valign="middle" align="left" class="BDJLebels" colspan="2">Vehicle Information</td>
   </tr>
   <tr>
     <td valign="middle" align="left" height="3px" colspan="2" bgcolor="#CCCCCC"></td>
   </tr>
    <tr>
     <td valign="middle" align="right" class="BDJLebels" colspan="2"><table width="100%" border="0">
		<tr style="background-color:#E9ECF1;" class="BDJLebels">
		  <td>Vehicle - Grade</td>
		  <td>Chassis Code </td>
		  <td>Model Name - Year </td>
	      <td>&nbsp;</td>
	  </tr>
		<tr style="background-color:#E9ECF1;">
		<td width="29%"><select name="data[QuotationDetail][0][vehicle_id]" id="QuotationDetailVehicleId" style="width:180px" >
		<option value="-1">Select Vehicle - Grade</option>
		<?php foreach($vehicle as $model):?>
		<option value="<?=$model['Vehicle']['id']?>"><?=$model['Vehicle']['vehicle_name']." - ".$model['Vehicle']['vehicle_grade']?></option>
		<? endforeach; ?>
		</select></td>
		<td width="30%"><select name="data[QuotationDetail][0][chassis_id]" id="QuotationDetailChassisId" style="width:180px" >
		<option value="-1">Select Chassis Code</option>
		<?php foreach($vehicle as $model):?>
		<option value="<?=$model['Vehicle']['id']?>"><?=$model['Vehicle']['vehicle_chassis_code']?></option>
		<? endforeach; ?>
		</select>
		</td>
		<td width="25%"><select name="data[QuotationDetail][0][vehicle_model_id]" id="QuotationDetailVehicleModelId" style="width:180px" >
		<option value="-1">Select Model - Year</option>
		<?php foreach($vehicleModel as $model):?>
		<option value="<?=$model['VehicleModel']['id']?>"><?=$model['VehicleModel']['vehicle_model_name']." - ".$model['VehicleModel']['vehicle_year']?></option>
		<? endforeach; ?>
		</select></td>
		<td width="16%"><input name="Button" type="button" class="BDJButton3" value="More" onClick="createQt('moreData','proId');"/><input name="Button" type="button" class="BDJButton3" value="Remove" onClick="removeQt('moreData','proId');"/> </td>
		</tr>
		<tr style="background-color:#E9ECF1;" class="BDJLebels">
		  <td colspan="4"><div id="moreData">
			<TABLE width="100%" align="center" bgcolor="#F3F3F3">
				
			</TABLE>
		</div>
		</td>
	  </tr>
	</table>
	 </td>
   </tr>
   <tr>
     <td valign="middle" align="left" bgcolor="#CCCCCC" colspan="2" height="3px"></td>
   </tr>
   <tr>
   <td align="center" colspan="2" ><input value="Save" name="submit" type="submit" class="BDJButton" /></td>
  </tr>
</table>
<?php
echo "</pre>";
?>
<div align="right" style="background:#ecebff"><?php echo $html->link("View All","/vehicles/index/"); ?>
</div>
</form>
</fieldset>
</div>
