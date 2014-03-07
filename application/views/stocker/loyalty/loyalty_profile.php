	<div class="span10">
		<div class="row-fluid">
			<div class="span4">
				<h1><?php echo $loyalty->loyalty_first_name; echo ' ' . $loyalty->loyalty_second_name; ?></h1>
				<p>Joined <?php echo $loyalty->loyalty_begun; ?></p>
			</div>
			<div class="span8">
				<table class="table table-striped table-bordered">
			        <tbody>
			        	<tr>
			            	<td>No.</td>
			            	<td><?php echo $loyalty->id;?></td>
			          	</tr>
			        	<tr>
			            	<td>First Name</td>
			            	<td><?php echo $loyalty->loyalty_first_name;?></td>
			          	</tr>
			          	<tr>
			            	<td>Second Name</td>
			            	<td><?php echo $loyalty->loyalty_second_name;?></td>
			          	</tr>
			          	<tr>
			           		<td>Age</td>
			            	<td><?php echo $loyalty->loyalty_age;?></td>
			          	</tr>
			          	<tr>
			           		<td>Balance</td>
			            	<td><?php echo $loyalty->loyalty_balance . ' Visits' ?></td>
			          	</tr>
			        </tbody>
				</table>
				
				<div class="form-actions">
					<?php echo anchor('Stocker/loyalty_edit_member?id=' . $loyalty->id, 'Edit Member', 'class="btn"'); ?>
					<?php echo anchor('Stocker/loyalty', 'View Members', 'class="btn btn-info pull-right"'); ?>
					<div id="myModal" class="modal hide fade" style="display: none;">
	          
			            <div class="modal-header">
			            	<a href="#" class="close" data-dismiss="modal">×</a>
			            	<h3>Deletion Confirmation</h3>
			            </div>
			            
			            <div class="modal-body">
			              	<p>Are you sure you wish to delete <?php echo $loyalty->loyalty_first_name . " " . $loyalty->loyalty_second_name; ?>?</p>
			           	</div>
			           	
			            <div class="modal-footer">
			              	<a href="#" class="btn" data-dismiss="modal">Close</a>
			              	<?php echo anchor('Stocker/delete_loyalty_member?id=' . $loyalty->id, 'Delete', 'class="btn btn-danger"'); ?>	
			            </div>
		          	</div>	
	          		<a data-toggle="modal" href="#myModal" class="btn btn-danger">Delete Member</a>

			</div>
		</div>
	</div>
</div>
	
	
	