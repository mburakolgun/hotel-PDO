<?php 
require_once("../../includes/initialize.php");
global $mydb;

$output = array();
$query = "SELECT * FROM `amenities` ";

if(isset($_POST["search"]["value"]))
{
$query .= " where `amen_name` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `amen_desp` LIKE '%".$_POST["search"]["value"]."%' ";
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY `amen_name` DESC ';
}
if($_POST["length"] != -1)
{
	$query .= " LIMIT " . $_POST['start'] . ", " . $_POST['length'] . "";
}
$mydb->setQuery($query);
$cur = $mydb->loadResultList();
$data = array();
$filtered_rows = $mydb->num_rows();
$i = 1;	
foreach ($cur as $result) {
			 
$sub_array = array();
	
	$image = '<a href="index.php?view=editpic&id='.$result->amen_id.'"" title="Click here to Change Image."><img src="'. $result->amen_image.'" width="60" height="60" class="img-thumbnail" title="'.$result->amen_name.'"/></a>';

	$sub_array[] =$i;

	$sub_array[] = $result->amen_name;
	$sub_array[] = $image;
	$sub_array[] = $result->amen_desp;

	$sub_array[] = '<a  href="index.php?view=edit&id='.$result->amen_id.'"" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> </a> <a  href="controller.php?action=delete&id='.$result->amen_id.'"" class="btn btn-danger btn-xs amendel"><span class="glyphicon glyphicon-trash"></span> </a>';
	$data[] = $sub_array;
$i = $i + 1;		
}
function get_total_all_records()
{
	global $mydb;
	$statement = "SELECT * FROM `amenities`";
	$mydb->setQuery($statement);
	return $mydb->num_rows();
}

$output = array('data' 			   => $data, 
				"recordsTotal"	   => $filtered_rows,
				"recordsFiltered"	=>	get_total_all_records() );
echo json_encode($output);

?>