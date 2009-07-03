<table>
<tr style="background-color:#E9ECF1;">
		<td width="29%">
		<select name="data[QuotationDetails][vehicle_id]" id="QuotationDetailsVehicleId" style="width:180px" >
		<option value="-1">Select Vehicle - Grade</option>
		<?php foreach($vehicle as $model):?>
		<option value="<?=$model['Vehicle']['id']?>"><?=$model['Vehicle']['vehicle_name']." - ".$model['Vehicle']['vehicle_grade']?></option>
		<? endforeach; ?>
		</select>		</td>
		<td width="30%">
		<select name="data[QuotationDetails][chassis_id]" id="QuotationDetailsChassisId" style="width:180px" >
		<option value="-1">Select Chassis Code</option>
		<?php foreach($vehicle as $model):?>
		<option value="<?=$model['Vehicle']['id']?>"><?=$model['Vehicle']['vehicle_chassis_code']?></option>
		<? endforeach; ?>
		</select>
		</td>
		<td width="25%"><select name="data[QuotationDetails][vehicle_model_id]" id="QuotationDetailsVehicleModelId" style="width:180px" >
		<option value="-1">Select Model - Year</option>
		<?php foreach($vehicleModel as $model):?>
		<option value="<?=$model['VehicleModel']['id']?>"><?=$model['VehicleModel']['vehicle_model_name']." - ".$model['VehicleModel']['vehicle_year']?></option>
		<? endforeach; ?>
		</select></td>
		<td width="16%">&nbsp;</td>
		</tr>
</table>