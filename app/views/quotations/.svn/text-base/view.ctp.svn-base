<div style="width:500px; text-align:center" >
<h2>Quotation Information</h2>
<?
echo "<pre>";
?>
<table width="100%" border="0">
<tr>
   <td align="center" colspan="2" height="4px" ></td>
  </tr>
  <tr>
    <td width="35%" align="right" valign="middle" class="BDJLebels">&nbsp;Quotation No :</td>
    <td width="65%" align="left" class="view"><?php echo $data['Quotation']['id']?></td>
  </tr>
   <tr>
    <td valign="middle" align="right" class="BDJLebels">&nbsp;Date :</td>
    <td align="left" class="view"><?php echo date('d-m-Y', strtotime($data['Quotation']['quotation_date'])); ?></td>

  </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Supplier Name :</td>
     <td align="left" class="view"><?php echo $data['suppliers']['supplier_name']?></td>
   </tr>
   <tr>
     <td valign="middle" align="right" class="BDJLebels">&nbsp;Port Location :</td>
     <td align="left" class="view"><?php echo $data['Quotation']['port_location']?></td>
   </tr>
 </table>
 <?
echo "</pre>";
?>
 <div align="center" style="background:#ecebff"><?php echo $html->link("View All","/Quotations/index/"); ?> | <?php echo $html->link('Add More','/Quotations/add/'); ?> | <?php echo $html->link("Edit",  "/Quotations/edit/{$data['Quotation']['id']}");?></div>

</div>