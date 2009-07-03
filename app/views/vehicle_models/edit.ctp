<div style="width:500px; text-align:center" >
<fieldset>
<legend><?php __("Edit Vehicle Model");?></legend><br/>
<?=$form->create("VehicleModel",array("action"=>"edit"));?>
<?
echo "<pre>";
?>
<table width="100%" border="0">
<tr>
   <td align="center" colspan="2" height="4px" ></td>
  </tr>
  <tr>
    <td width="28%" align="right" valign="middle" class="BDJLebels">&nbsp;Category :</td>
    <td width="72%" align="left"><select name="data[VehicleModel][vehicle_category_id]" id="VehicleModelVehicleCategoryId" style="width:180px" >
	<option value="-1">Select Category</option>
	<?php foreach($category as $category):?>
	<option value="<?=$category['VehicleCategory']['id']?>"><?=$category['VehicleCategory']['vehicle_cat_name']?></option>
	<? endforeach; ?>
	<script language="javascript">
	document.getElementById('VehicleModelVehicleCategoryId').value = '<?php echo $sdata;?>';	
	</script>
	</select></td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Model :</td>
    <td align="left"><?php echo $form->hidden('VehicleModel.id'); ?> <?=$form->error("vehicle_model_name");?><?=$form->input("VehicleModel.vehicle_model_name",array("size"=>"25","label"=>false));?>				  </td>
  </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Year :</td>
     <td align="left"><?php echo $form->input('VehicleModel.vehicle_year', array('options' => array('1998'=>"1998",'1999'=>"1999",'2000'=>"2000",'2001'=>"2001",'2002'=>"2002",'2003'=>"2003",'2004'=>"2004",'2005'=>"2005",'2006'=>"2006",'2007'=>"2007",'2008'=>"2008",'2009'=>"2009",'2010'=>"2010"),"label"=>false,"width"=>"100px")); ?></td>
   </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Capacity(C.C) :</td>
     <td align="left"><?=$form->input("VehicleModel.vehicle_capacity",array("size"=>"15","label"=>false,"onKeyUp"=>"removeChar(this)"));?></td>

   </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Description :</td>
     <td align="left"><?=$form->textarea("VehicleModel.description",array("rows"=>"3","cols"=>"30","label"=>false));?>	</td>
   </tr>
  <tr>
   <td align="center" colspan="2" >&nbsp;<input value="Edit" name="submit" type="submit" class="BDJButton" /></td>
  </tr>
</table>
<?
echo "</pre>";
?>
</form>
</fieldset>
</div>