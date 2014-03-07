	<div class="span10">
		<div class="row-fluid">
			<div class="span4">
				<h1><?php echo $inventory->product_name; ?></h1>
				<p><?php echo $inventory->product_category; ?></p>
			</div>
			<div class="span8">
				<table class="table table-striped table-bordered">
			        <tbody>
			        	<tr>
			            	<td>ID</td>
			            	<td><?php echo $inventory->id;?></td>
			          	</tr>
			        	<tr>
			            	<td>Name</td>
			            	<td><?php echo $inventory->product_name;?></td>
			          	</tr>
			          	<tr>
			            	<td>Category</td>
			            	<td><?php echo $inventory->product_category;?></td>
			          	</tr>
			          	<tr>
			           		<td>Quantity</td>
			            	<td><?php echo $inventory->product_quantity; ?></td>
			          	</tr>
			          	<tr>
			           		<td>Price</td>
			            	<td><?php echo $inventory->product_price;?></td>
			          	</tr>
			          	
			        </tbody>
				</table>
				
				<div class="form-actions">
					<a href="<?php echo site_url('Stocker/inventory_restock_item?id=') . $inventory->id; ?>" class="btn success">Restock Item</a>
					<?php echo anchor('Stocker/inventory_edit_item?id=' . $inventory->id, 'Edit Item', 'class="btn "'); ?>
					<?php echo anchor('Stocker/inventory', 'View Items', 'class="btn btn-info pull-right"'); ?>
					<div id="myModal" class="modal hide fade" style="display: none;">
	          
			            <div class="modal-header">
			            	<a href="#" class="close" data-dismiss="modal">×</a>
			            	<h3>Deletion Confirmation</h3>
			            </div>
			            
			            <div class="modal-body">
			              	<p>Are you sure you wish to delete <?php echo $inventory->product_name; ?>?</p>
			           	</div>
			           	
			            <div class="modal-footer">
			              	<a href="#" class="btn" data-dismiss="modal">Close</a>
			              	<?php echo anchor('Stocker/delete_inventory_item?id=' . $inventory->id, 'Delete', 'class="btn btn-danger"'); ?>	
			            </div>
		          	</div>	
	          		<a data-toggle="modal" href="#myModal" class="btn btn-danger">Delete Item</a>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
	