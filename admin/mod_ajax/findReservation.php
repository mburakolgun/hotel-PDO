<?php 
require_once("../../includes/initialize.php");
global $mydb;

$output = array();
$query = "SELECT * FROM `listofreservation` ";

if(isset($_POST["search"]["value"]))
{
$query .= " where `firstname` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `lastname` LIKE '%".$_POST["search"]["value"]."%' ";
$query .= "OR `roomName` LIKE '%".$_POST["search"]["value"]."%' ";
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


	$sub_array[] = $result->firstname." ".$result->lastname;
	$sub_array[] = $result->confirmation;
	$sub_array[] = $result->arrival;
	$sub_array[] = $result->departure;
	$sub_array[] = $result->roomName;
	$sub_array[] = dateDiff($result->arrival,$result->departure);
	$sub_array[] = $result->status;

if($result->status == 'Confirmed'){
$resulta = '<a class="cls_btn" id='.$result->reservation_id.' data-toggle="modal" href="#profile" title="Click here to Change Image." ><i class="icon-edit">test</a>
			<a href="index.php?view=view&id='.$result->reservation_id.'" class="btn btn-primary btn-xs" ><i class="icon-edit">View</a>
			<a href="controller.php?action=checkin&id='.$result->reservation_id.'" class="btn btn-success btn-xs" ><i class="icon-edit">Check in</a>';
}elseif($result->status == 'Checkedin'){
$resulta = '<a href="index.php?view=view&id='.$result->reservation_id.'" class="btn btn-primary btn-xs" ><i class="icon-edit">View</a>
			<a href="controller.php?action=checkout&id='.$result->reservation_id.'" class="btn btn-danger btn-xs" ><i class="icon-edit">Check out</a>';

}else{
$resulta = '<a href="index.php?view=view&id='.$result->reservation_id.'" class="btn btn-primary btn-xs" ><i class="icon-edit">View</a>
			<a href="index.php?view=view&id='.$result->reservation_id.'" class="btn btn-success btn-xs" disabled="disabled"><i class="icon-edit">Check in</a>';
}
$sub_array[] = $resulta;


	
	$data[] = $sub_array;
$i = $i + 1;		
}
function get_total_all_records()
{
	global $mydb;
	$statement = "SELECT * FROM `listofreservation`";
	$mydb->setQuery($statement);
	return $mydb->num_rows();
}

$output = array('data' 			   => $data, 
				"recordsTotal"	   => $filtered_rows,
				"recordsFiltered"	=>	get_total_all_records() );
echo json_encode($output);

?>
