<div style="width:500px; text-align:center" >
<h2>Suppliers Information</h2>
<?
echo "<pre>";
?>
<table width="100%" border="0">
  <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Name :</td>
    <td align="left"><?php echo $data['Supplier']['supplier_name']?></td>
  </tr>
  <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Country :</td>
    <td align="left"><?php echo $data['Supplier']['supplier_country']?></td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Address :</td>
    <td align="left"><?php echo $data['Supplier']['supplier_address']?></td>
  </tr>
  <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Phone :</td>
    <td align="left"><?php echo $data['Supplier']['supplier_phone']?>
	</td>
  </tr>
	<tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Email :</td>
    <td align="left"><?php echo $data['Supplier']['supplier_email']?></td>
  </tr>
 </table>
<?
echo "</pre>";
?>
<div align="center" style="background:#ecebff"><?php echo $html->link("View All","/suppliers/index/"); ?> | <?php echo $html->link('Add More','/suppliers/add/'); ?> | <?php echo $html->link("Edit",  "/suppliers/edit/{$data['Supplier']['id']}");?></div>

</div>