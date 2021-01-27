<?php
	//before we store information of our member, we need to start first the session
	
	session_start();
	
	//create a new function to check if the session variable member_id is on set
	function logged_in() {
		return isset($_SESSION['ACCOUNT_ID']);
        
	}
	//this function if session member is not set then it will be redirected to index.php
	function confirm_logged_in() {
		if (!logged_in()) {?>
			<script type="text/javascript">
				window.location = "index.php";
			</script>

		<?php
		}
	}
	function admin_logged_in() {
		return isset($_SESSION['justadmin_ID']);
        
	}
	//this function if session member is not set then it will be redirected to index.php
	function admin_confirm_logged_in() {
		if (!admin_logged_in()) {?>
			<script type="text/javascript">
				window.location = "index.php";
			</script>

		<?php
		}
	}
	
	function message($msg="", $msgtype="") {
	  if(!empty($msg)) {
	    // then this is "set message"
	    // make sure you understand why $this->message=$msg wouldn't work
	    $_SESSION['message'] = $msg;
	    $_SESSION['msgtype'] = $msgtype;
	  } else {
	    // then this is "get message"
			return $message;
	  }
	}
	function check_message(){
	
		if(isset($_SESSION['message'])){
			if(isset($_SESSION['msgtype'])){
				if ($_SESSION['msgtype']=="info"){
	 				echo  '<div class="alert alert-info">'. $_SESSION['message'] . '</div>';
	 				 
				}elseif($_SESSION['msgtype']=="error"){
					echo  '<div class="alert alert-danger">' . $_SESSION['message'] . '</div>';
									
				}elseif($_SESSION['msgtype']=="success"){
					echo  '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
				}	
				unset($_SESSION['message']);
	 			unset($_SESSION['msgtype']);
	   		}
  
		}	

	}

 
 function addtocart($pid,$roomtype,$price,$checkin,$checkout,$nights,$subtotal,$roomno){
    if($pid<1 or $nights<1) return;
    if($nights<1) return;
    if (!empty($_SESSION['hotelcart'])){
 
    if(is_array($_SESSION['hotelcart'])){
      if(productexist($pid,$checkin,$checkout,$nights)) return;
		$max=count($_SESSION['hotelcart']);
		$_SESSION['hotelcart'][$max]['pid']=$pid;
		$_SESSION['hotelcart'][$max]['roomtype']=$roomtype;
		$_SESSION['hotelcart'][$max]['checkin']=$checkin;
		$_SESSION['hotelcart'][$max]['checkout']=$checkout;
		$_SESSION['hotelcart'][$max]['nights']=$nights;
		$_SESSION['hotelcart'][$max]['price']=$price;
		$_SESSION['hotelcart'][$max]['subtotal']=$subtotal;
		$_SESSION['hotelcart'][$max]['roomno']=$roomno;
    }
    else{
		$_SESSION['hotelcart']=array();
		$_SESSION['hotelcart'][0]['pid']=$pid;
		$_SESSION['hotelcart'][0]['roomtype']=$roomtype;
		$_SESSION['hotelcart'][0]['checkin']=$checkin;
		$_SESSION['hotelcart'][0]['checkout']=$checkout;
		$_SESSION['hotelcart'][0]['nights']=$nights;
		$_SESSION['hotelcart'][0]['price']=$price;
		$_SESSION['hotelcart'][0]['subtotal']=$subtotal;
		$_SESSION['hotelcart'][0]['roomno']=$roomno;
    }
}else{
		$_SESSION['hotelcart']=array();
		$_SESSION['hotelcart'][0]['pid']=$pid;
		$_SESSION['hotelcart'][0]['roomtype']=$roomtype;
		$_SESSION['hotelcart'][0]['checkin']=$checkin;
		$_SESSION['hotelcart'][0]['checkout']=$checkout;
		$_SESSION['hotelcart'][0]['nights']=$nights;
		$_SESSION['hotelcart'][0]['price']=$price;
		$_SESSION['hotelcart'][0]['subtotal']=$subtotal;
		$_SESSION['hotelcart'][0]['roomno']=$roomno;
}
  
     // message("{$nights} Item added in the cart.","success");
}
function removetocart($pid){
  // $pid=intval($pid);
  $max=count($_SESSION['hotelcart']);
  for($i=0;$i<$max;$i++){
    if($pid==$_SESSION['hotelcart'][$i]['pid']){
      unset($_SESSION['hotelcart'][$i]);
      break;
    }
  }
  $_SESSION['hotelcart']=array_values($_SESSION['hotelcart']);
}


 function productexist($pid,$checkin,$checkout,$nights){
    $pid=intval($pid); 
  if($nights<1) return;
    if (!empty($_SESSION['hotelcart'])){
       if(is_array($_SESSION['hotelcart'])){
          $max=count($_SESSION['hotelcart']);
          $flag=0;
          for($i=0;$i<$max;$i++){
            if($pid==$_SESSION['hotelcart'][$i]['pid']){
                if($nights>0  && $nights<=999){
                  # code...
                  	$flag=1;
					$_SESSION['hotelcart'][$i]['checkin']=$checkin;
					$_SESSION['hotelcart'][$i]['checkout']=$checkout;
					$_SESSION['hotelcart'][$i]['nights']= $nights;
					$_SESSION['hotelcart'][$i]['subtotal']= $_SESSION['hotelcart'][$i]['price'] * $_SESSION['hotelcart'][$i]['nights'];
                    break;
                } 
            }
          }
          return $flag;
        }
      }
    }

?>

