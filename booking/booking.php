<?php
$arrival = $_SESSION['from']; 
$departure = $_SESSION['to'];


 /*if(!isset($_POST['adults'])){
    message("Choose from Adults!", "error");  
    redirect(".WEB_ROOT. 'booking/");
    //exit;
 }*/
 /* if(isset($_POST['adults'])&&isset($_POST['child'])){
    $_SESSION['roomid']=$_POST['roomid'];
  $_SESSION['adults'] = $_POST['adults'];
  $_SESSION['child']  = $_POST['child'];
   */
 //  if (!isset($_SESSION['roomid'])){
    
 // redirect(WEB_ROOT);
 //  }
 if (isset($_POST['clear'])){
  unset($_SESSION['roomid']);
  redirect(WEB_ROOT);

 }
 
?>


<!--End of Header-->
<div class="container">
 

    <div class="col-xs-12 col-sm-9">
      <!--<div class="jumbotron">-->
    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Step 1: Select Dates</a></li>
            <li class="breadcrumb-item" ><a href="#">Step 2: Select Rooms</a></li>
            <li class="breadcrumb-item" active aria-current="page" >Step 3: Booking Cart</li>
            
          </ol>
        </nav>

        <div class="">
          <div class="panel panel-default">
            <div class="panel-body">  
             <form action="" method="POST"> 
                  <h3 align="center">Your Booking Cart</h3>
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
              <th align="center" width="90">Action</th> 
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
                                                    <td align="center"><a class="btn btn-xs btn-danger delcart" style="text-decoration:none;" href="cart.php?action=delete&roomid='.$_SESSION['hotelcart'][$i]['pid'].'"><i class="fa fa-trash"></i> Remove</a></td>
                                                  </tr>'; 
                                                  $total += $_SESSION['hotelcart'][$i]['subtotal'];
                                                
                                       } 

 
                                  }  
                                 
            ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4"><h5><b>Order Total: Php  <?php echo $total; ?></b></h5></td><td colspan="5"> 
                            <div class="col-xs-12 col-sm-12" align="right">
                               <!-- <button type="submit" class="btn btn-primary" align="right"name="clear">Clear Cart</button> -->
                               <?php
                               if(isset($_SESSION['hotelcart'])){

                                if (isset($_SESSION['guest_id'])){
                                  ?>
                                  <a href="<?php echo WEB_ROOT; ?>booking/index.php?view=payment" class="btn btn-primary" align="right"name="continue">Continue Booking</a>
                                 <?php 
                                }else{ ?>
                                   <a href="<?php echo WEB_ROOT; ?>booking/index.php?view=info"class="btn btn-primary" align="right"name="continue">Continue Booking</a>
                               <?php
                                }
                                
                               }

                               ?>
                                 
                            </div>
                   
            </td>
            </tr>
          </tfoot>  
        </table>
      </form>
            </div>
          </div>  
          
        </div>
    <!--  </div>-->
    </div>
    <!--/span--> 
    <!--Sidebar-->
 <?php include'../sidebar.php';?>
  </div>
  <!--/row-->
</div>