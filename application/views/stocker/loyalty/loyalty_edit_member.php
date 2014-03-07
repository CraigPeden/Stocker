	
	
	<style>
		.appended_length {
		width: 184px !important;
		}
	</style>
	
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
				
				<div class="row-fluid">
					<form method="post" class="form-horizontal" action="<?php echo site_url('Stocker/update_loyalty_info'); ?>">
						<fieldset class="control-group">			
							<div class="controls">
								<input class="xlarge disabled" id="disabledInput" name="product_id" size="30" type="hidden" value="<?php echo $loyalty->id; ?>" />
							</div>
						</fieldsets>
						<fieldset class="control-group">
				          	<label class="control-label" for="xlInput">First Name</label>	
			          		<div class="controls">
			          			<div class="input-prepend">
			          				<span class="add-on"><i class="icon-user">1</i></span>
			            			<input class="large appended_length" id="xlInput" name="loyalty_first_name" size="30" type="text" value="<?php echo $loyalty->loyalty_first_name; ?>" />
			            		</div>
			            	</div>
			            </fieldset>
			            <fieldset class="control-group">
				            <label class="control-label" for="xlInput">Second Name</label>	
				            <div class="controls">
				            	<div class="input-prepend">
			          				<span class="add-on"><i class="icon-user">2</i></span>
				            		<input class="large appended_length" id="xlInput" name="loyalty_second_name" size="30" type="text" value="<?php echo $loyalty->loyalty_second_name; ?>" />
				            	</div>
			   				</div>
			   				
						   	<div class="form-actions">
								<input type="submit" class="btn primary" value="Edit Member">&nbsp;</button>
								<?php echo anchor('Stocker/loyalty', 'View Members', 'class="btn btn-info pull-right"'); ?>
								<a href="#" class="btn btn-danger" data-controls-modal="delete-modal" data-backdrop="true">Delete Member</a>
							</div>			       	
					  	</fieldset>       
					</form>
				</div>
				
				
				
				<div id="delete-modal" class="modal hide fade" style="display: block; ">
	            
		            <div class="modal-header">
		              	<a href="#" class="close">×</a>
		              	<h3>Confirm</h3>
		            </div>
		            
		            <div class="modal-body">
		              	<p>Are you sure you wish to delete <?php echo $loyalty->loyalty_first_name; echo ' ' . $loyalty->loyalty_second_name; ?> ?</p>
		            </div>
		            
		            <div class="modal-footer">
		            	<a href="<?php echo site_url("Stocker/delete_loyalty_member?id=" . $loyalty->id);?>" class="btn btn-danger">Delete</a>
		            	<a href="#" class="btn" data-show="false">Cancel</a>
		            </div>	            
	            </div>
			</div>
		</div>
	</div>
</div>
	