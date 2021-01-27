<?php 
require_once("../../includes/initialize.php");
global $mydb;

$output = array();
$query = "SELECT * FROM `useraccounts` ";

if(isset($_POST["search"]["value"]))
{
$query .= " where `ACCOUNT_NAME` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `ACCOUNT_USERNAME` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `ACCOUNT_TYPE` LIKE '%".$_POST["search"]["value"]."%' ";
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY `ACCOUNT_NAME` DESC ';
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
	$sub_array[] = $result->ACCOUNT_NAME;
	$sub_array[] = $result->ACCOUNT_USERNAME;
	$sub_array[] = $result->ACCOUNT_TYPE;
	$sub_array[] = '<a  href="index.php?view=edit&id='.$result->ACCOUNT_ID.'"" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> </a> <a  href="controller.php?action=delete&id='.$result->ACCOUNT_ID.'"" class="btn btn-danger btn-xs userdel "><span class="glyphicon glyphicon-trash"></span> </a>';
	$data[] = $sub_array;
$i = $i + 1;		
}
function get_total_all_records()
{
	global $mydb;
	$statement = "SELECT * FROM `useraccounts`";
	$mydb->setQuery($statement);
	return $mydb->num_rows();
}

$output = array('data' 			   => $data, 
				"recordsTotal"	   => $filtered_rows,
				"recordsFiltered"	=>	get_total_all_records() );
echo json_encode($output);

?>