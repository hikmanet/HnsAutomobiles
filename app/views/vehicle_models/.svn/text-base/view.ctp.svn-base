<div style="width:500px; text-align:center" >
<h2>Vehicle Models Information</h2>
<?
echo "<pre>";
?>

<table width="100%" border="0">
<tr>
   <td align="center" colspan="2" height="4px" ></td>
  </tr>
  <tr>
    <td width="35%" align="right" valign="middle" class="BDJLebels">&nbsp;Category :</td>
    <td width="65%" align="left" class="view"><?php echo $data['Vehicle_category']['vehicle_cat_name']?></td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Model :</td>
    <td align="left" class="view"><?php echo $data['VehicleModel']['vehicle_model_name']?></td>
  </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Year :</td>
     <td align="left" class="view"><?php echo $data['VehicleModel']['vehicle_year']?></td>
   </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Capacity(C.C) :</td>
     <td align="left" class="view"><?php echo $data['VehicleModel']['vehicle_capacity']?></td>

   </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Description :</td>
     <td align="left" class="view"><?php echo $data['VehicleModel']['description']?></td>
   </tr>
  </table>
  <?
echo "</pre>";
?>

 <div align="center" style="background:#ecebff"><?php echo $html->link("View All","/VehicleModels/index/"); ?> | <?php echo $html->link('Add More','/VehicleModels/add/'); ?> | <?php echo $html->link("Edit",  "/VehicleModels/edit/{$data['VehicleModel']['id']}");?></div>
</div>