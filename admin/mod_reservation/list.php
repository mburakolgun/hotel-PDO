
<div class="container">
<div class="panel panel-primary">
			<div class="panel-body">
<form  method="post" action="processreservation.php?action=delete">
	<table id="example_reservation" class="table table-striped" cellspacing="0">
<thead>
<tr>
<td>No</td>	

<td width="90"><strong>Name</strong></td>
<!--<td width="10"><strong>Confirmation</strong></td>-->
<td width="80"><strong>Confirmation</strong></td>
<td width="80"><strong>Arrival</strong></td>
<td width="70"><strong>Departure</strong></td>
<td width="80"><strong>Type</strong></td>
<td width="80"><strong>Nights</strong></td>
<td width="80"><strong>Status</strong></td>
<td width="100"><strong>Action</strong></td>
</tr>
</thead>
<tbody>

  
		<div class="modal fade" id="profile" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						

						<div class="alert alert-info">Profile:</div>
					</div>

					<form action="#"  method=
					"post">
						<div class="modal-body">
					
												
								<div id="display">
									
										<p>ID : <div id="infoid"></div></p><br/>
											Name : <div id="infoname"></div><br/>
											Email Address : <div id="Email"></div><br/>
											Gender : <div id="Gender"></div><br/>
											Birthday : <div id="bday"></div>
										</p>
										
								</div>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" type=
							"button">Close</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

</table>

</form>
</div>
</div>