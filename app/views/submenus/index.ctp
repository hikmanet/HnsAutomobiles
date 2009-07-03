<?php echo $html->link('Add New Sub Menu','/submenus/add/'); ?></p> 
<br><br>
<table>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
$th = array (
			$pagination->sortBy('name'),
            $pagination->sortBy('Menu._id','Menu'),
			$pagination->sortBy('Descrp','Description'),
			$pagination->sortBy('Action'),
			'','',''
); // Generate the pagination sort links
echo $html->tableHeaders($th); // Create the table headers with sort links if desired

foreach ($submenus as $output)
{
    $tr = array (
        $output['Submenu']['name'],$output['Menu']['name'],$output['Submenu']['descrp'],$output['Submenu']['action'],$html->link("Edit",  "/submenus/edit/{$output['Submenu']['id']}"),$html->link("View", "/submenus/view/{$output['Submenu']['id']}"),$html->link("Delete", "/submenus/delete/{$output['Submenu']['id']}")
        );
    echo $html->tableCells($tr,array('class'=>'altRow'),array('class'=>'evenRow'));
}
?>
</table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
