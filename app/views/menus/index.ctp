<br>
<?php echo $html->link('Add New Item','/menus/add/'); ?></p> 
<br><br>
<table>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
$th = array (
			$pagination->sortBy('name'),
            $pagination->sortBy('POSITION'),
			$pagination->sortBy('active'),
			'','',''
); // Generate the pagination sort links
echo $html->tableHeaders($th); // Create the table headers with sort links if desired

foreach ($menus as $output)
{
    $tr = array (
        $output['Menu']['name'],$output['Menu']['position'],$output['Menu']['active'],$html->link("Edit",  "/menus/edit/{$output['Menu']['id']}"),$html->link("View", "/Menus/view/{$output['Menu']['id']}"),$html->link("Delete", "/Menus/delete/{$output['Menu']['id']}", null, 'Are you sure to delete the following Item?')
        );
    echo $html->tableCells($tr,array('class'=>'altRow'),array('class'=>'evenRow'));
}
?>
</table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
