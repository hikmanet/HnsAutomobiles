<div style="width:500px; text-align:center" >
<fieldset>
<legend><?php __("Edit Vehicle Category");?></legend><br/>
<?=$form->create("VehicleCategory",array("action"=>"edit"));?>
<?
echo "<pre>";
?>
<table width="100%" border="0">
  <tr>
    <td width="37%" align="right" valign="middle" class="BDJLebels">&nbsp;Category :</td>
    <td width="63%" align="left"><?=$form->error("vehicle_cat_name");?><?=$form->input("VehicleCategory.vehicle_cat_name",array("size"=>"25","label"=>false));?>	</td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Description :</td>
    <td align="left"><?=$form->textarea("VehicleCategory.description",array("rows"=>"5","cols"=>"30","label"=>false));?>	</td>
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