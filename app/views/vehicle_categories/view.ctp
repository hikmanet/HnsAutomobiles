<div style="width:500px; text-align:center" >
<h2>Vehicle Category Information</h2>
<?
echo "<pre>";
?>
<table width="80%" border="0">
  <tr>
    <td width="36%" align="right" valign="middle" class="BDJLebels">&nbsp;Category :</td>
    <td width="64%" align="left"><?php echo $data['VehicleCategory']['vehicle_cat_name']?></td>
  </tr>
  <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Description :</td>
    <td align="left"><?php echo $data['VehicleCategory']['description']?></td>
  </tr>
  </table>
 <?
echo "</pre>";
?>
 <div align="center" style="background:#ecebff"><?php echo $html->link("View All","/VehicleCategories/index/"); ?> | <?php echo $html->link('Add More','/VehicleCategories/add/'); ?> | <?php echo $html->link("Edit",  "/VehicleCategories/edit/{$data['VehicleCategory']['id']}");?></div>

</div>