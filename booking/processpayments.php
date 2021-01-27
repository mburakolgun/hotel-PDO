<?php
require_once("../includes/initialize.php");

$arival    = $_SESSION['from']; 
$departure = $_SESSION['to'];
$name      = $_SESSION['name']; 
$last      = $_SESSION['last'];
$country   = $_SESSION['country'];
$city      = $_SESSION['city'] ;
$address   = $_SESSION['address'];
$zip       = $_SESSION['zip'] ;
$phone     = $_SESSION['phone'];
$email     = $_SESSION['email'];
$password  = $_SESSION['pass'];
// $roomid   = $_SESSION['roomid'];
$_SESSION['pending'] = 'Confirmed';
$stat     = $_SESSION['pending']; 
 


  $message = $_POST['message'];
function createRandomPassword() {

    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }

    return $pass;

}
  $confirmation = createRandomPassword();
  $_SESSION['confirmation'] = $confirmation; 

  //check guest

  $mydb->setQuery("SELECT * 
                FROM  guest 
                WHERE  `phone` ='{$phone}' OR email='{$email}'");

  $row_count = $mydb->num_rows();
  if ($row_count >=1 ) {

    $rows = $mydb->loadSingleResultAssoc();
    @$lastguest= $rows['guest_id'];

    $mydb->setQuery("UPDATE guest SET firstname='$name',lastname='$last',
                          country='$country',city='$city',address='$address',
                          zip='$zip',phone='$phone',email='$email',password='$password' 
                      WHERE guest_id='$lastguest'");
   // $res = $mydb->executeQuery();

  }else{

    $mydb->setQuery("INSERT INTO guest (firstname,lastname,country,city,address,zip,phone,email,password)
      VALUES ('$name','$last','$country','$city','$address','$zip','$phone','$email','$password')");
   // $res = $mydb->executeQuery();
    @$lastguest=$mydb->insert_id(); 
   
   } 

 
if (!empty($_SESSION['hotelcart'])){   
  $count_cart = count($_SESSION['hotelcart']); 
    for ($i=0; $i < $count_cart  ; $i++) {  

		$mydb->setQuery("INSERT INTO reservation (roomNo,guest_id,arrival,departure,adults,child,payable,status,confirmation)
		      VALUES ('".$_SESSION['hotelcart'][$i]['pid']."','$lastguest','".$_SESSION['hotelcart'][$i]['checkin']."','".$_SESSION['hotelcart'][$i]['checkout']."','1','0','".$_SESSION['hotelcart'][$i]['subtotal']."','$stat','$confirmation')");
            
   } 


}   




  // $mydb->setQuery("INSERT INTO reservation (roomNo,guest_id,arrival,departure,adults,child,payable,status,confirmation)
  //         VALUES ('$roomid','$lastguest','$arival','$departure','1','0','$payable','$stat','$confirmation')");
 // $res = $mydb->executeQuery();
  @$lastreserv=$mydb->insert_id(); 
  $mydb->setQuery("INSERT INTO `comments` (`firstname`, `lastname`, `email`, `comment`) VALUES('$name','$last','$email','$message')");
//  $msg = $mydb->executeQuery();
  message("New [". @$name ."] created successfully!", "success");
  //  unsetSessions(); 

    redirect("index.php?view=detail"); 
?>