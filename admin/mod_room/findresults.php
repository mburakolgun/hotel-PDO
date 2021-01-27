<?php 
// require_once("../../includes/initialize.php");
// global $mydb;

// $output = array();
// $query = "SELECT * FROM `listofrooms` ";

// if(isset($_POST["search"]["value"]))
// {
// $query .= " where `roomName` LIKE '%".$_POST["search"]["value"]."%' ";
// $query .= "OR `typeName` LIKE '%".$_POST["search"]["value"]."%' ";
// $query .= "OR `Desp` LIKE '%".$_POST["search"]["value"]."%'";

// }
// if(isset($_POST["order"]))
// {
// 	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
// }
// else
// {
// 	$query .= 'ORDER BY `roomName` DESC ';
// }
// if($_POST["length"] != -1)
// {
// 	$query .= " LIMIT " . $_POST['start'] . ", " . $_POST['length'] . "";
// }
// //$statement = $connection->prepare($query);
// //$statement->execute();
// $mydb->setQuery($query);
// $cur = $mydb->loadResultList();
// $data = array();
// $filtered_rows = $mydb->num_rows();
// $i = 1;	
// //$cur = $mydb->loadResultList();
// foreach ($cur as $result) {
			 
// $sub_array = array();
	
// 	$image = '';
// 	if($result->typeName != ''){
// 		$image ='<a href="index.php?view=editpic&id='.$result->roomNo.'"" title="Click here to Change Image."><img src="'. $result->roomImage.'" width="60" height="60" class="img-thumbnail" title=="'. $result->roomName.'"/></a>';
// 	}
// 	else
// 	{
// 		$image = '';
// 	}

// 	$sub_array[] =$i;
// 	$sub_array[] = $result->roomName;
// 	$sub_array[] = $image;
// 	$sub_array[] = $result->typeName;
// 	$sub_array[] = $result->price;
// 	$sub_array[] = $result->Adults;
// 	$sub_array[] = $result->Desp;
// 	$sub_array[] = '<a  href="index.php?view=edit&id='.$result->roomNo.'"" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> </a> <a  href="controller.php?action=delete&id='.$result->roomNo.'"" class="btn btn-danger btn-xs "><span class="glyphicon glyphicon-trash"></span> </a>';
// 	$data[] = $sub_array;
// $i = $i + 1;		
// }
// function get_total_all_records()
// {
// 	global $mydb;
// 	$statement = "SELECT * FROM `listofrooms`";
// 	$mydb->setQuery($statement);
// 	return $mydb->num_rows();
// }

// $output = array('data' 			   => $data, 
// 				"recordsTotal"	   => $filtered_rows,
// 				"recordsFiltered"	=>	get_total_all_records() );
// echo json_encode($output);

?>