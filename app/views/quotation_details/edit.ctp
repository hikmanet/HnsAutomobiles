<div style="width:500px; text-align:center" >
<fieldset>
<legend><?php __("Edit Vehicle Model");?></legend><br/>
<?=$form->create("Vehicle",array("action"=>"edit"));?>
<?
echo "<pre>";
?>
<table width="100%" border="0">
<tr>
   <td align="center" colspan="2" height="4px" ></td>
  </tr>
  <tr>
    <td width="28%" align="right" valign="middle" class="BDJLebels">&nbsp;Model Name :</td>
    <td width="72%" align="left"><select name="data[Vehicle][vehicle_model_id]" id="VehicleVehicleModelId" style="width:180px" >
	<option value="-1">Select Model</option>
	<?php foreach($model as $model):?>
	<option value="<?=$model['VehicleModel']['id']?>"><?=$model['VehicleModel']['vehicle_model_name']?></option>
	<? endforeach; ?>
	<script language="javascript">
	document.getElementById('VehicleVehicleModelId').value = '<?php echo $sdata;?>';	
	</script>
	</select></td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Chassis Code :</td>
    <td align="left"><?=$form->error("vehicle_chassis_code");?><?=$form->input("Vehicle.vehicle_chassis_code",array("size"=>"25","label"=>false));?>	<?php echo $form->hidden('Vehicle.id'); ?></td>
  </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Engine No :</td>
     <td align="left"><?=$form->input("Vehicle.vehicle_engine_no",array("size"=>"25","label"=>false));?></td>
   </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Grade :</td>
     <td align="left"><?=$form->input("Vehicle.vehicle_grade",array("size"=>"15","label"=>false));?></td>

   </tr>
  <tr>
   <td align="center" colspan="2" >&nbsp;<input value="Edit" name="submit" type="submit" class="BDJButton" /></td>
  </tr>
</table>
<?php
echo "</pre>";
?>
</form>
</fieldset>
</div>
