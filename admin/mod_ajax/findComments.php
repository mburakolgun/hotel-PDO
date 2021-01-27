<?php 
require_once("../../includes/initialize.php");
global $mydb;

$output = array();
$query = "SELECT * FROM `comments` ";

if(isset($_POST["search"]["value"]))
{
$query .= " where `firstname` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `lastname` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `email` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `comment` LIKE '%".$_POST["search"]["value"]."%' ";
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY `comment_id` DESC ';
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

	$sub_array[] = $result->firstname.' ' .$result->lastname;
	$sub_array[] = $result->email;
	$sub_array[] = $result->comment;
	$sub_array[] = '<a  href="index.php?view=view&id='.$result->comment_id.'"class="btn btn-primary btn-bg"><span class="glyphicon glyphicon-pencil">View</a>';
	$data[] = $sub_array;
$i = $i + 1;		
}
function get_total_all_records()
{
	global $mydb;
	$statement = "SELECT * FROM `comments`";
	$mydb->setQuery($statement);
	return $mydb->num_rows();
}

$output = array('data' 			   => $data, 
				"recordsTotal"	   => $filtered_rows,
				"recordsFiltered"	=>	get_total_all_records() );
echo json_encode($output);

?>