<?php
/*$guestid =$_GET['guestid'];
$guest = new Guest();
$result=$guest->single_guest($guestid);*/

  $name = $_SESSION['name']; 
  $last = $_SESSION['last'];
  $country =$_SESSION['country'];
  $city = $_SESSION['city'] ;
  $address = $_SESSION['address'];
  $zip =  $_SESSION['zip'] ;
  $phone = $_SESSION['phone'];
  $email = $_SESSION['email'];
  $password =$_SESSION['pass'];
  $stat = $_SESSION['pending'];

?>

<div class="container">
  <?php include'../sidebar.php';?>

    <div class="col-xs-12 col-sm-9">
      <!--<div class="jumbotron">-->
        <div class="">
          <div class="panel panel-default">
            <div class="panel-body">  
             
                 <?php // include'navigator.php';?>


          <td valign="top" class="body" style="padding-bottom:10px;">

           <form action="index.php?view=payment" method="post"  name="" >
            <span id="printout">
           <fieldset >
           <legend><h2>Reservation Details</h2></legend>
           <p>
            <? print(Date("l F d, Y")); ?>
            <br/><br/>
           Sir/Madam <?php echo $name.' '.$last;?> <br/>
           <?php echo $address;?><br/>
           <?php echo $phone;?> <br/>
           <?php echo $email;?><br/><br/>
           Dear Sir/Madam. <?php echo $last;?>,<br/><br/>
           Greetings from Justines Guest House!<br/><br/>
           Please check the details of your reservation:<br/><br/>
           <strong>GUEST NAME(S):</strong> <?php echo $name.' '.$last;?>


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

       
<p>We are eagerly anticipating your arrival and would like to advise you of the following in order to help you with your trip planning.Your reservation number is <b><?php echo $_SESSION['confirmation']?>:</b><br/><br/>Should there be a concern with your reservation, a customer service representative will contact you. Otherwise, consider your reservation confirmed.</p>
<ul>
 <li>Function Room rate is Php 500.00 for first four hours and Php 100.00 for each succeeding hours.</li>
 <li>No pets allowed.</li>
 <li>Outside foods are allowed inside the guest house.</li>
 <li>Check in time is 1pm and Check out time is 12 noon.</li>
 <li>Guest arriving before 1 pm shall be accommodated if rooms are vacant and ready.</li>
 <li>Free WIFI access.</li>
 <li>Room rates inclusive of government tax and service charge.</li>
 <li>Rates are subject to change without prior notice.</li>
 <li>Cancellation notification must be made at least 10 days prior to arrival for refund of deposits. Cancellation received within the 10 days period will result to forfeiture of full deposits.</li>
 <li>We serve Breakfast, Lunch and Dinner upon request with 2 hours notice.</li><br>
<strong>I have agreed that I will present the following documents upon check in:</strong><br/>
 <li>Copy of BDO Payment.</li>
 <li>Authorization letter issued by BDO payer for guest/s whose transactions were paid for in his/ her behalf.</li>
 </ul>
If you have any questions, please email at justinesguesthouse.com or call (034) 4713 – 135
<br/><br/>
Thank you for choosing Justine’s Guest House
<br/><br/>
Respectfully your,<br/><br/>
Justine’s Guest House
<br/><br/><br/>
</span>
<div id="divButtons" name="divButtons">
<input type="button" value="Print" onclick="tablePrint();" class="btn btn-primary">
</div>
              </form>

            </div>
          </div>  
          
        </div>
    <!--  </div>-->
    </div>
    <!--/span--> 
    <!--Sidebar-->

  </div>
  <!--/row-->
  <script>
function tablePrint(){ 
 document.all.divButtons.style.visibility = 'hidden';  
    var display_setting="toolbar=no,location=no,directories=no,menubar=no,";  
    display_setting+="scrollbars=no,width=500, height=500, left=100, top=25";  
    var content_innerhtml = document.getElementById("printout").innerHTML;  
    var document_print=window.open("","",display_setting);  
    document_print.document.open();  
    document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');  
    document_print.document.write(content_innerhtml);  
    document_print.document.write('</body></html>');  
    document_print.print();  
    document_print.document.close(); 
   
    return false;  
    } 
  $(document).ready(function() {
    oTable = jQuery('#list').dataTable({
    "bJQueryUI": true,
    "sPaginationType": "full_numbers"
    } );
  });   
</script>
<?php 

unset($_SESSION['hotelcart']);
unset($_SESSION['name']); 
unset($_SESSION['last']);
unset($_SESSION['country']);
unset($_SESSION['city']) ;
unset($_SESSION['address']);
unset($_SESSION['zip']) ;
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['pass']);
unset($_SESSION['pending']);

?>