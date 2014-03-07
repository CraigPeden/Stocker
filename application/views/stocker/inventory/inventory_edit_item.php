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
				<form method="post" class="form-horizontal" action="<?php echo site_url('Stocker/update_inventory_info'); ?>">	
					<?php if ($this->session->flashdata('currencyerror') == TRUE) { ?>
						<div class="alert-message error fade in" data-alert="alert">
		    				<a class="close" data-dismiss="alert" href="#">×</a>
		    				<p>Remove Currency Sign from price</p>
						</div>
					<?php } ?>	
			
					<style>
					.appended_length {
					width: 184px !important;
					}
					</style>
				<fieldset class="control-group">
		        	<div class="controls">
			        	<input class="xlarge disabled" id="disabledInput" name="product_id" size="30" type="hidden" value="<?php echo $inventory->id; ?>" />
		            </div>
		        </fieldset>
		        <fieldset class="control-group">
		        	<label class="control-label" for="name">Name</label>
		        	<div class="controls">
		        		<div class="input-prepend">
		        			<span class="add-on"><i class="icon-comment"></i></span>
			        		<input class="large appended_length" id="name" name="product_name" size="30" type="text" value="<?php echo $inventory->product_name; ?>">
		            	</div>
		            </div>
		        </fieldset>
		        <fieldset class="control-group">
		        	<label class="control-label" for="category">Category</label>
		        	<div class="controls">
		        		<div class="input-prepend">
			        		<span class="add-on"><i class="icon-list"></i></span>
			        		<input class="large appended_length" id="category" name="product_category" size="30" type="text" value="<?php echo $inventory->product_category; ?>" />
			        	</div>
		            </div>
		        </fieldset>
		         <fieldset class="control-group">
		        	<label class="control-label" for="category">Price</label>
		        	<div class="controls">
		        		<div class="input-prepend">
			        		<span class="add-on">£</span>
		            		<input class="large appended_length" id="price" name="product_price" size="30" type="text" value="<?php echo $inventory->product_price; ?>">
			            	<span class="help-inline">Price without any currency sign.</span>
			            </div>
		            </div>
		        </fieldset>
	    			          
		        <div class="form-actions">
		        	<input type="submit" class="btn primary" value="Edit Item" />
		       	</div>			       	       
			</form>
		</div>
	</div>
</div>
		
	
	
	
		
	</div> <!-- /first column -->
</div> <!-- /containner -->