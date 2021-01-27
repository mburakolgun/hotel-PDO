<div class="container">
	<?php
		check_message();
			
		?>
		<div class="panel panel-primary">
			<div class="panel-body">
			<h3 align="left">List of Amenities</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example_amenities" class="table table-hover">
					
				  <thead>
				  	<tr  >
				  		<th>No.</th>
				  		<th>Amenity Name</th>
				  		<th align="center"  width="200">Image</th>
				  		<th align="center" width="120">Description</th>
				  		<th align="center" width="100">Action</th>

				  	</tr>	
				  </thead>
				  <tbody>
				  </tbody>
				
				</table>

				
				<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
					</div>
				</form>
	  		</div><!--End of Panel Body-->
	  	</div><!--End of Main Panel-->

</div><!--End of container-->

