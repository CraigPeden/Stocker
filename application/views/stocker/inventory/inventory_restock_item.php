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
				
				<form method="post" class="form-horizontal" action="<?php echo site_url('Stocker/restock_inventory_item'); ?>">	
				
	    			<?php if ($this->session->flashdata('error') != "") { ?>
						<div class="alert alert-success fade in" data-alert="alert">
	        				<a class="close" href="#">×</a>
	        				<p><?php echo $this->session->flashdata('error'); ?></p>
	    				</div>
					<?php } ?>
				
					<fieldset class="control-group">
			        	<div class="controls">
				        	<input class="xlarge disabled" id="disabledInput" name="product_id" size="30" type="hidden" value="<?php echo $this->input->get('id'); ?>" />
			            </div>
			        </fieldset>
			        <fieldset class="control-group">
			        	<label class="control-label" for="name">Restock Amount</label>
			        	<div class="controls">
				        	<input class="xlarge" id="name" name="restock_quantity" size="30" type="text" placeholder="Quantity">
			            </div>
			        </fieldset>
			    			          
			        <div class="form-actions">
			        	<input type="submit" class="btn success" value="Restock Item" />
			       	</div>			       	       
				</form>
			</div>
		</div>
	</div>
</div>