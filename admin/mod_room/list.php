
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="panel panel-primary">
			<div class="panel-body">
			<h3 align="left">List of Rooms</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example_data" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr  >
						<th align="left"  width="40">No.</th>
				  		<th align="left"  width="100">Name</th>
				  		<th align="left"  width="150">Image</th>
				  		<th align="left" width="120">Type</th>
				  		<th align="left" width="120">Price</th>
				  		<th align="left" width="90">Guests</th>
				  		<th align="left"  width="200">Description</th>
				  		<th align="left"  width="100">Action</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				 
				  </tbody>
				 
				</table>
					 <a href="index.php?view=add" class="btn btn-default">New</a>
				</form>
	  		</div><!--End of Panel Body-->
	  	</div><!--End of Main Panel-->

</div><!--End of container-->
 