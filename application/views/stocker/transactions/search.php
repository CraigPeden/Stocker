	<div class="span10">
		<div class="row-fluid">
			 <?php if ($this->session->flashdata('success') != '') { ?>
				<div class="alert alert-success fade in" data-alert="alert">
				<a class="close" data-dismiss="alert" href="#">×</a>
				<span><?php echo $this->session->flashdata('success'); ?></span>
				</div>
    		<?php } ?>
			<div class="well">
				<form method="post" class="form-horizontal" action="<?php echo site_url('Stocker/transactions_search'); ?>">
					<legend>Add Items to Cart</legend>
					<fieldset class="control-group">
						<label for="search" class="control-label">Search</label>
						<div class="controls">
							<div class="input-prepend">
              					<span class="add-on"><i class="icon-search"></i></span>
             					<input type="text" class="span3" autocomplete="off" name="product_name" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source='<?php echo json_encode($this->Inventory_model->populate_autocomplete());?>'>
             					<button type="submit" class="btn">Search</button>
            				</div>
						</div>
					</fieldset>
				</form>
			</div>
			<table class="table table-striped table-bordered" >
   				<thead>
			          <tr>
			            <th>ID</th>
			            <th>Product Name</th>
			            <th>Product Quantity</th>
			            <th>Product Category</th>
			            <th>Product Price</th>
			            <th>Add to Cart</th>
			          </tr>
    			</thead>
    			<tbody>
		        	<?php 
			        		echo '<tr>';
			        		echo '<td>' . $inventory->id . '</td>';
			        		echo '<td>' . anchor('Stocker/inventory_profile' . '?id=' . $inventory->id, $inventory->product_name) . '</td>';
			        		echo '<td>' . $inventory->product_quantity . '</td>';
							echo '<td>' . $inventory->product_category . '</td>';
							echo '<td>' . '£' . $inventory->product_price . '</td>';
							echo '<td>';
							echo form_open('Stocker/add_to_cart', 'class="form-horizontal" style="margin:0;"');
							echo form_hidden('product_id',$inventory->id);
							echo form_hidden('product_name',$inventory->product_name);
							echo form_hidden('product_price',$inventory->product_price);
							echo form_input('qty', '1', 'class="span1"');
							echo form_submit('', 'Add Item', 'class="btn" style="margin-left:5px;"');
							echo form_close();
							echo '</td>';
			        ?>
    			</tbody>
	  		</table>
	  	</div>
	</div>
</div>