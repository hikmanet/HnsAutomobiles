<div style="width:500px; text-align:center" >
<fieldset>
<legend><?php __("Add New Supplier");?></legend><br/>
<?=$form->create("Supplier",array("action"=>"add"));?>
<?
echo "<pre>";
?>
<table width="100%" border="0">
  <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Name :</td>
    <td align="left"><?=$form->error("supplier_name");?><?=$form->input("Supplier.supplier_name",array("size"=>"30","label"=>false));?>
	</td>
  </tr>
  <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Country :</td>
    <td align="left"><?php echo $form->input("Supplier.supplier_country", array("options" => array(""=>"Select Country","Japan"=>"Japan","South Korea"=>"South Korea","China"=>"China","Hong Kong"=>"Hong Kong","Thailand"=>"Thailand","German"=>"German"),"label"=>false,"style"=>"width:160px")); ?></td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Address :</td>
    <td align="left"><?=$form->textarea("Supplier.supplier_address",array("rows"=>"3","cols"=>"24","label"=>false));?>
	</td>
  </tr>
  <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Phone :</td>
    <td align="left"><?=$form->input("Supplier.supplier_phone",array("size"=>"30","label"=>false));?>
	</td>
  </tr>
	<tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Email :</td>
    <td align="left"><?=$form->error("supplier_email");?><?=$form->input("Supplier.supplier_email",array("size"=>"30","label"=>false));?>
	</td>
  </tr>
  <tr>
   <td align="center" colspan="2" >&nbsp;<input value="Save" name="submit" type="submit" class="BDJButton" /></td>
  </tr>
</table>
<?
echo "</pre>";
?>
<div align="right" style="background:#ecebff"><?php echo $html->link("View All","/suppliers/index/"); ?>
</div>
</form>
</fieldset>
</div>