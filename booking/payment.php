 <div class="container">
  <?php
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
$_SESSION['pending'] = 'pending';
$stat     = $_SESSION['pending'];
$days     = dateDiff($arival,$departure);

   
   ?>

    <div class="col-xs-12 col-sm-9">
      <!--<div class="jumbotron">-->
 <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Step 1: Select Dates</a></li>
            <li class="breadcrumb-item" ><a href="#">Step 2: Select Rooms</a></li>
            <li class="breadcrumb-item" ><a href="#">Step 3: Booking Cart</a></li>
             <li class="breadcrumb-item"><a href="#">Step 4: Personal Information</a></li>
              <li class="breadcrumb-item" active aria-current="page" >Step 5: Payment Details</li>
            
          </ol>
        </nav>

        <div class="">
          <div class="panel panel-default">
            <div class="panel-body">  
             
                 <?php // include'navigator.php';?>


          <td valign="top" class="body" style="padding-bottom:10px;"> 
           <fieldset >
           <legend><h2>Billing Details</h2></legend>
           <p>

            <strong>FIRST NAME:</strong> <?php echo $name;?> <br/>
            <strong>LAST NAME:</strong> <?php echo $last;?><br/>
            <strong>COUNTRY:</strong> <?php echo $country;?><br/>
            <strong>CITY:</strong> <?php  echo $city;?><br/>
            <strong>ADDRESS:</strong> <?php echo $address;?><br/>
            <strong>ZIP CODE:</strong> <?php echo $zip; ?><br/>
            <strong>PHONE:</strong> <?php echo $phone;?><br/>
            <strong>E-MAIL:</strong> <?php echo $email;?><br/>
          </p>

       <table class="table table-hover">
              <thead>
              <tr  bgcolor="#999999"> 
              <th align="center" width="120">Room Type</th>
              <th align="center" width="120">Check In</th>
              <th align="center" width="120">Check Out</th>
              <th align="center" width="120">Nights</th>
              <th  width="120">Price</th>
              <th align="center" width="120">Room</th>
              <th align="center" width="90">Amount</th> 
            </tr> 
          </thead>
          <tbody>
              
            <?php
            $total = 0;
                if (!empty($_SESSION['hotelcart'])){   
                                      $count_cart = count($_SESSION['hotelcart']); 
                                        for ($i=0; $i < $count_cart  ; $i++) { 
                                            echo  '<tr> 
                                                    <td>'.$_SESSION['hotelcart'][$i]['roomtype'].'</td>  
                                                     <td>'.$_SESSION['hotelcart'][$i]['checkin'].'</td> 
                                                    <td>'.$_SESSION['hotelcart'][$i]['checkout'].'</td> 
                                                    <td>  '.$_SESSION['hotelcart'][$i]['nights'].'</td>
                                                   <td>'.$_SESSION['hotelcart'][$i]['price'].'</td>
                                                   <td>'.$_SESSION['hotelcart'][$i]['roomno'].'</td>
                                                  <td>'.$_SESSION['hotelcart'][$i]['subtotal'].'</td> 
                                                  
                                                  </tr>'; 
                                                  $total += $_SESSION['hotelcart'][$i]['subtotal'];
                                                
                                       } 

 
                                  }  
                                 
            ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4"><h5><b>Order Total: Php  <?php echo $total; ?></b></h5></td><td colspan="5">  
            </td>
            </tr>
          </tfoot>  
        </table>
              <div class="form-group">
              <!--    <div class="col-md-12">
                    

                    <div class="col-md-10">
                      <b>Special Request</b>
                 <textarea class="form-control input-sm" name="message" placeholder="What's on your mind?"></textarea>
                Some request might have corresponding charges and subject to availability. <br/>
                <br/>
                    </div>
                  </div>
                  -->

                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading">Select Payment Method</div>
                  <div class="panel-body">

               


                   <div class="form-group">
                    <div class="col-md-12 pull-right" >
                      

                    <div class="col-md-10">
                     <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                         <!-- <input type="hidden" value="business@greenvalley.com" name="business"> -->
                          <input type="hidden" value="onlinehotelreservation@business.com" name="business">
                        <!-- Specify a Buy Now button. -->
                        <input type="hidden" value="_xclick" name="cmd">
                        <input type="hidden" value="Partial Payments" name="item_name">
                        <!-- <input type="hidden" value="22.16" name="amount"> -->
                        <input type="hidden" id="partial" value="<?php echo $total; ?>" name="amount">
                        <!-- <input type="hidden" name="currency_code" value="USD"> -->
                        <input type="hidden" name="currency_code" value="PHP">
                        <!-- <input type="hidden" value="item_number" name="item_number"> -->
                        <input type="hidden" name="return" value="http://localhost/hotel/booking/processpayments.php">
                        <input type="hidden" name="cancel_return" value="http://localhost/hotel/booking/">
                        <!-- Display the payment button. -->
                         <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Bank Deposit</a>
                        <input type="image" name="submit" id="btnpay" border="0" class="btn btn-default btn-bg active" src="../img/BTNPAYNOW.png" alt="PayPal - The safer, easier way to pay online">
                        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                        </form> 
                      </div>
                    </div>
                  </div>
                  </div>
               </div>


            </div>
          </div>  
          
        </div>
    <!--  </div>-->
    </div>
    <!--/span--> 
    <!--Sidebar-->
<?php include'../sidebar.php'; ?>
  </div>
  <!--/row-->



