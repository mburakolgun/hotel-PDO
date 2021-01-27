<?php
require_once("includes/initialize.php");
// Four steps to closing a session
// (i.e. logging out)

// 1. Find the session
// session_start();
	$sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
	VALUES (".$_SESSION['guest_id'].",'".date('Y-m-d H:i:s')."','Guest','Logged out')";
	$mydb->setQuery($sql);

// 2. Unset all the session variables
unset($_SESSION['guest_id']);	
unset($_SESSION['name']); 		
unset($_SESSION['last']);	
unset($_SESSION['country']);
unset($_SESSION['city']); 		
unset($_SESSION['address']); 	
unset($_SESSION['zip']); 		
unset($_SESSION['phone']); 	
unset($_SESSION['email']); 		
unset($_SESSION['pass']); 	
unset($_SESSION['from']); 
unset($_SESSION['to']); 	


/**
  * write_mysql_log($message, $db)
  *
  * Author(s): thanosb, ddonahue
  * Date: May 11, 2008
  * 
  * Writes the values of certain variables along with a message in a database.
  *
  * Parameters:
  *  $message: Message to be logged
  *  $db: Object that represents the connection to the MySQL Server    
  *
  * Returns array:
  *  $result[status]:   True on success, false on failure
  *  $result[message]:  Error message
  */


 	
// 4. Destroy the session
//session_destroy();
redirect(WEB_ROOT ."index.php?logout=1");
?>

