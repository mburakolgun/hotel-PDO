<div class="container">
	<?php
		check_message();
			
		?>
		<div class="panel panel-primary">
			<div class="panel-body">
				<h3 align="left">List of Comments</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example_comment" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr >
				  		<th>No.</th>
				  		<th>
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Guest Name</th>
				  		<th>Email</th>
				  		<th>Comment</th>
				<th>Action</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	
				  </tbody>
				
				</table>
				<div class="btn-group">
				
				</div>
				</form>
	  		</div><!--End of Panel Body-->
	  	</div><!--End of Main Panel-->

</div><!--End of container-->


