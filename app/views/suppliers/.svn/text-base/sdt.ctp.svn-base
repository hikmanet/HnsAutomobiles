<?php 
foreach($sdata as $data)
{
if($data['Submenu']['name']=="Supplier")
{
	$controller = "suppliers";
}
else if($data['Submenu']['name']=="Category")
{
	$controller = "vehicle_categories";
}
else if($data['Submenu']['name']=="Description")
{
	$controller = "vehicle_descs";
}
else if($data['Submenu']['name']=="Type")
{
	$controller = "vehicle_types";
}
else if($data['Submenu']['name']=="Models")
{
	$controller = "vehicle_models";
}
else if($data['Submenu']['name']=="Chassis")
{
	$controller = "vehicles";
}
else if($data['Submenu']['name']=="Quotation")
{
	$controller = "quotations";
}
else if($data['Submenu']['name']=="Purchase Order")
{
	$controller = "purchase_orders";
}
else
{

}
?>
<?php echo $show = $html->link("{$data['Submenu']['name']}",  "/{$controller}/index");?>
<?
}
?>
