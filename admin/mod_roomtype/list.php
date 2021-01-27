<div class="container">
	<?php
		check_message();
			
		?>
		<div class="panel panel-primary">
			<div class="panel-body">
			<h3 align="left">List of Room Types</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example_rmtypes" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr >
				  		<th align="left"  width="40">No.</th>
				  		<th align="left"  width="100"> Roomt Type</th>
				  		<th>Description</th>
						<th align="left"  width="100">Action</th>
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

