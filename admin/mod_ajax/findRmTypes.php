<?php 
require_once("../../includes/initialize.php");
global $mydb;

$output = array();
$query = "SELECT * FROM `roomtype` ";

if(isset($_POST["search"]["value"]))
{
$query .= " where `typename` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `Desp` LIKE '%".$_POST["search"]["value"]."%' ";
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY `typename` DESC ';
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
	
	$sub_array[] =$i;
	$sub_array[] = $result->typename;
	$sub_array[] = $result->Desp;
	$sub_array[] = '<a  href="index.php?view=edit&id='.$result->typeID.'"" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> </a> <a  href="controller.php?action=delete&id='.$result->typeID.'"" class="btn btn-danger btn-xs roomtypesdel "><span class="glyphicon glyphicon-trash"></span> </a>';
	$data[] = $sub_array;
$i = $i + 1;		
}
function get_total_all_records()
{
	global $mydb;
	$statement = "SELECT * FROM `roomtype`";
	$mydb->setQuery($statement);
	return $mydb->num_rows();
}

$output = array('data' 			   => $data, 
				"recordsTotal"	   => $filtered_rows,
				"recordsFiltered"	=>	get_total_all_records() );
echo json_encode($output);

?>