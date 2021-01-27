<?php 
require_once("../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
  
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
global $mydb;
   
	$arival   = $_SESSION['from']; 
	$departure = $_SESSION['to']; 
	$days = dateDiff($arival,$departure);
	$mydb->setQuery("SELECT *,typeName FROM room ro, roomtype rt WHERE ro.typeID = rt.typeID and roomNo =".  $_POST['roomid']);
	$cur = $mydb->loadSingleResult();  	

	$pid =  $_POST['roomid'];
	$roomtype = $cur->typeName;	
	$price = $cur->price;
	$checkin = $arival;
	$checkout = $departure;
	$nights = $days;
	$subtotal = $price * $nights;
	$roomno = $cur->roomNo;

	 addtocart($pid,$roomtype,$price,$checkin,$checkout,$nights,$subtotal,$roomno);

	 // unset($_SESSION['hotelcart']);



	redirect('index.php');
    
	 
} 
 

function doDelete(){ 
 
  removetocart($_GET['roomid']);
  $countcart =isset($_SESSION['hotelcart'])? count($_SESSION['hotelcart']) : "0";
  if($countcart==0){
     
    unset($_SESSION['hotelcart']); 
  } 

	redirect('index.php');
 	
 }
 

?>
