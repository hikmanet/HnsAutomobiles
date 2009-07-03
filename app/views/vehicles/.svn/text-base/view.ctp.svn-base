<div style="width:500px; text-align:center" >
<h2>Vehicle Chassis Information</h2>
<?
echo "<pre>";
?>
<table width="100%" border="0">
<tr>
   <td align="center" colspan="2" height="4px" ></td>
  </tr>
  <tr>
    <td width="35%" align="right" valign="middle" class="BDJLebels">&nbsp;Model Name :</td>
    <td width="65%" align="left" class="view"><?php echo $data['VehicleModel']['vehicle_model_name']?></td>
  </tr>
  <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Vehicle Name:</td>
    <td align="left"><?=$data['Vehicle']['vehicle_name'];?></td>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Chassis Code :</td>
    <td align="left" class="view"><?php echo $data['Vehicle']['vehicle_chassis_code']?></td>
  </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Engine No :</td>
     <td align="left" class="view"><?php echo $data['Vehicle']['vehicle_engine_no']?></td>
   </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Grade :</td>
     <td align="left" class="view"><?php echo $data['Vehicle']['vehicle_grade']?></td>
   </tr>
 </table>
 <?
echo "</pre>";
?>
 <div align="center" style="background:#ecebff"><?php echo $html->link("View All","/Vehicles/index/"); ?> | <?php echo $html->link('Add More','/Vehicles/add/'); ?> | <?php echo $html->link("Edit",  "/Vehicles/edit/{$data['Vehicle']['id']}");?></div>

</div>