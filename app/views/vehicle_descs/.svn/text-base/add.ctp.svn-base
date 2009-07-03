<div style="width:500px; text-align:center" >
<fieldset>
<legend><?php __("Add Description");?></legend><br/>
<?=$form->create("VehicleDesc",array("action"=>"add"));?>
<?
echo "<pre>";
?>
<table width="100%" border="0">
  <tr>
    <td width="27%" align="right" valign="middle" class="BDJLebels">&nbsp;Title :</td>
    <td colspan="3" align="left"><?=$form->error("vehicle_desc_title");?><?=$form->input("VehicleDesc.vehicle_desc_title",array("size"=>"25","label"=>false));?>	</td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Type :</td>
    <td width="25%" align="left"><?php echo $form->input("VehicleDesc.vehicle_desc_type", array("options" => array(""=>"Select Type","select"=>"select","textbox"=>"textbox"),"onChange"=>"show(this.value);","label"=>false,"style"=>"width:130px")); ?></td>
    <td width="48%" align="left"><div id="divtextbox" style="display:none;">Enter Text:<?=$form->input("VehicleDesc.desc_type_value_t",array("size"=>"25","label"=>false));?></div>
	<div id="divselect" style="display:none;">Select Option:<?php echo $form->input("VehicleDesc.desc_type_value_s", array("options" => array(""=>"","Yes"=>"Yes","No"=>"No"),"label"=>false,"style"=>"width:80px")); ?></div></td>
   </tr>
  <tr>
   <td align="center" colspan="4" >&nbsp;<input value="Save" name="submit" type="submit" class="BDJButton" /></td>
  </tr>
</table>
<?
echo "</pre>";
?>
<div align="right" style="background:#ecebff"><?php echo $html->link("View All","/vehicle_descs/index/"); ?>
</div>
</form>
</fieldset>
</div>