<br>
<?php echo $html->link('Add a Post','/posts/add/'); ?></p> 
<br>
<table>
<?php
$pagination->setPaging($paging); // Initialize the pagination variables
$th = array (
            $pagination->sortBy('id'),
            $pagination->sortBy('name'),
            $pagination->sortBy('date1'),
			$pagination->sortBy('content')
); // Generate the pagination sort links
echo $html->tableHeaders($th); // Create the table headers with sort links if desired

foreach ($posts as $output)
{
    $tr = array (
        $output['Post']['id'],$html->link($output['Post']['name'], "/posts/view/{$output['Post']['id']}"),$output['Post']['date1'],$output['Post']['content']
        );
    echo $html->tableCells($tr,array('class'=>'altRow'),array('class'=>'evenRow'));
}
?>
</table>
<? echo $this->renderElement('pagination'); // Render the pagination element ?>
