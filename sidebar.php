<?php
if(isset($_POST['login'])){
	$email = $_POST['log_email'];
	$pass  = $_POST['log_pword'];
	
	 if ($email == '' OR $pass == '') {

         	message("Invalid Username and Password!", "error");
			redirect("index.php");
         
    } else {
	$guest = new Guest();
	$res = $guest->guest_login($email, $pass);
		if($res == true){

			$publicuser = isset($_SESSION['
				guest_id']) ? $_SESSION['guest_id'] : '';
			
				$sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
				VALUES (".$_SESSION['guest_id'].",'".date('Y-m-d H:i:s')."','Guest','Logged in')";
				$mydb->setQuery($sql);

			redirect("index.php");
		}else{ 
			message("Username or Password Not Registered! Contact Your administrator.","error");
			redirect("index.php");
		}
	}

}
?>

<!--Side bar-->
			<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="sidebar-nav">
		   <div class="panel panel-primary">
		   
			 <div class="panel-heading">Rooms Reservation</div>
			  <div class="panel-body">	
						   <form  method="POST" action="#.php">
								<div class="col-xs-12 col-sm-12">

					            	<div class="form-group">
					            		<div class="row">
					            			<div class="col-xs-12 col-sm-12">
					            				<label class="control-label" for="from">Check In</label>
						     
							                    <input class="w8em format-y-m-d highlight-days-67 range-low-today "  value="<?php echo (isset($_SESSION['from'])) ? $_SESSION['from'] : ''; ?>" id="sd" type="text"  name="from" >
							                   
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
					            				<label class="control-label" for="to">Check Out</label>
						              			
								                    <input class="w8em format-y-m-d highlight-days-67 range-low-today" type="text" value="<?php echo (isset($_SESSION['to'])) ? $_SESSION['to'] : ''; ?>"  name="to" id="ed">
								                   
						              		</div>
						            	</div>
						            </div>
						              <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
					            				<label class="control-label" for="to">Adult</label>
						              			 <select name="ADULT" class="form-control">
						              			 	<option>Select</option>
						              			 	<?php

						              			 		$sql = "SELECT * FROM `room` GROUP BY `Adults`";
						              			 		$mydb->setQuery($sql);
					              			 			$cur = $mydb->loadResultList(); 
					              			 			foreach ($cur as $result) {
					              			 				echo '<option value='.$result->Adults.'>'.$result->Adults.'</option>';
					              			 			}
						              			 	?>
						              			 </select>
						              		</div>
						            	</div>
						            </div>
						              <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
					            				<label class="control-label" for="to">Children</label>
						              			 <select name="CHILDREN" class="form-control">
						              			 	<option>Select</option>
						              			 	<?php

						              			 		$sql = "SELECT * FROM `room` GROUP BY  `Children`";
						              			 		$mydb->setQuery($sql);
					              			 			$cur = $mydb->loadResultList(); 
					              			 			foreach ($cur as $result) {
					              			 				echo '<option value='.$result->Children.'>'.$result->Children.'</option>';
					              			 			}
						              			 	?>
						              			 </select>
						              		</div>
						            	</div>
						            </div>



						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						           				 <button type="submit" class="btn btn-primary" align="right" name="avail">Check Availability</button>
						           			 </div>
						            	</div>
						            </div>
						        </div>
					        </form>
						</div>
			
		</div>
			
				<div class="panel panel-primary">
					
					<?php if(!isset($_SESSION['guest_id'])){

				echo ' <div class="panel-heading">User Login</div>
					   <div class="panel-body">	
						   <form  method="POST" action="#.php">
								<div class="col-xs-12 col-sm-12">

					            	<div class="form-group">
					            		<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						              			<input type="email" placeholder="Email" class="form-control" name="log_email">
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						              			<input type="password" placeholder="Password" class="form-control" name="log_pword">
						              		</div>
						            	</div>
						            </div>

						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						           				 <button type="submit" class="btn btn-primary" align="right" name="login">Sign in</button>
						           			 </div>
						            	</div>
						            </div>
						        </div>
					        </form>
					       
						</div>';
					}else{

					echo'<div class="panel-heading">Guest Information</div>
							   <div class="panel-body">	
									<div class="col-xs-12 col-sm-12">
									 <span class="glyphicon glyphicon-user"> </span> Guest Name:<br/> <p><b>'.$_SESSION['name'].' '.$_SESSION['last'].'</b><br/>
									 <span class="glyphicon glyphicon-cog"> </span> Email:<br/> <b>'. $_SESSION['email'].'</b><br/>
									 		 <span class="glyphicon glyphicon-cog"> </span> Tel No.:<br/><b> '. $_SESSION['phone'].'</b><br/><br/>
									  <a href="logout.php" class="btn btn-default">Logout <span class="glyphicon glyphicon-log-out"></span></a>
									</div>					            					            		
								</div>';

					}
						?>
				</div>
				
				 <form name="clock">
			                  
					  <input  class="form-control" id="trans" type="label"  name="face" value="">
				</form>
						

		    <hr>
			

	

		
	</div>
			<!--/.well --> 
		</div>
		<!--/span-->
		<!--End of Side bar-->
