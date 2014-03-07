	<div class="span10">		
	   	<form method="post" class="form-horizontal" action="<?php echo site_url('Stocker/add_inventory_item'); ?>">	
			<?php if ($this->session->flashdata('currencyerror') == TRUE) { ?>
				<div class="alert alert-error fade in" data-alert="alert">
    				<a class="close" href="#">×</a>
    				<p>Remove Currency Sign from price</p>
				</div> 
			<?php } ?>
			<?php if ($this->session->flashdata('success') != "") { ?>
				<div class="alert alert-success fade in" data-alert="alert">
    				<a class="close" href="#">×</a>
    				<p><?php echo $this->session->flashdata('success'); ?> Added</p>
				</div>
			<?php } ?>
			
			<style>
			.appended_length {
			width: 184px !important;
			}
			</style>
			
			<legend>Add Item</legend>	
			
			<fieldset class="control-group">
	        	<label class="control-label" for="xlInput">Name</label>
	        	<div class="controls">
	        		<div class="input-prepend">
	        			<span class="add-on"><i class="icon-comment"></i></span>
	        			<input class="large appended_length" id="xlInput" name="product_name" size="30" type="text" placeholder="Carrots">
	        		</div>
	            </div>
	       	</fieldset>
	       	<fieldset class="control-group">
	          	<label class="control-label" for="xlInput">Quantity</label>
	          	<div class="controls">
	          		<div class="input-prepend">
	          			<span class="add-on"><i class="icon-shopping-cart"></i></span>
			            <input class="large appended_length" id="xlInput" name="product_quantity" size="30" type="text" placeholder="Number or Weight in Kg">
			            <span class="help-inline">Number of items, or weight in kg. (1000g = 1kg)</span>
			      	</div>
	            </div>
			</fieldset>
			<fieldset class="control-group">
	          	<label class="control-label" for="xlInput">Category</label>
	          	<div class="controls">
	          		<div class="input-prepend">
	        			<span class="add-on"><i class="icon-list"></i></span>
	        			<input class="large appended_length" id="xlInput" name="product_category" size="30" type="text" placeholder="Vegetable">
	          	</div>
	       	</fieldset>
	       	<fieldset class="control-group">
	          	<label class="control-label" for="xlInput">Price</label>
	          	<div class="controls">
	          		<div class="input-prepend">
	          			<span class="add-on">£</span>
	            		<input class="large appended_length" id="xlInput" name="product_price" size="30" type="text" placeholder="1.20">
		            	<span class="help-inline">Price without any currency sign.</span>
		            </div>
	          	</div><!-- /clearfix -->
	      	</fieldset>
	        
	        <fieldset class="form-actions">
	        	<input type="submit" class="btn primary" value="Add Item">&nbsp;</button>
	        	<input type="reset" class="btn" value="Clear">&nbsp;</button>
	        	<a class="btn btn-info pull-right" href="<?php echo site_url('Stocker/inventory');?>">View Items</a>
	       	</fieldset>       
		</form>	
	</div>
</div>