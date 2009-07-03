<div style="width:500px; text-align:center" >
<fieldset>
<legend><?php __("Add Vehicle Type");?></legend><br/>
<?=$form->create("VehicleType",array("action"=>"add"));?>
<?
echo "<pre>";
?>
<table width="100%" border="0">
  <tr>
    <td width="37%" align="right" valign="middle" class="BDJLebels">&nbsp;Type :</td>
    <td width="63%" align="left"><?=$form->error("vehicle_type_name");?><?=$form->input("VehicleType.vehicle_type_name",array("size"=>"25","label"=>false));?>	</td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Address :</td>
    <td align="left"><?=$form->textarea("VehicleType.description",array("row"=>"3","col"=>"30","label"=>false));?>	</td>
  </tr>
  <tr>
   <td align="center" colspan="2" >&nbsp;<input value="Save" name="submit" type="submit" class="BDJButton" /></td>
  </tr>
</table>
<?
echo "</pre>";
?>
<div align="right" style="background:#ecebff"><?php echo $html->link("View All","/vehicle_types/index/"); ?>
</div>
</form>
</fieldset>
</div>