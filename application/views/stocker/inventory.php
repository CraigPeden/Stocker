	<div class="span10">
		<div class="row-fluid">			
 	        <table class="table table-striped table-bordered">
   				<thead>
			          <tr>
			            <th>ID</th>
			            <th class="blue">Product Name</th>
			            <th class="red">Product Quantity</th>
			            <th class="yellow">Product Category</th>
			            <th class="green">Product Price</th>
			          </tr>
    			</thead>
    			<tbody>
		        	<?php 
			        	foreach($inventory->result() as $row)
			        	{
			        		echo '<tr>';
			        		echo '<td>' . $row->id . '</td>';
			        		echo '<td>' . anchor('Stocker/inventory_profile' . '?id=' . $row->id, $row->product_name) . '</td>';
			        		echo '<td>' . $row->product_quantity . '</td>';
							echo '<td>' . $row->product_category . '</td>';
							echo '<td>' . '£' . $row->product_price . '</td>';
			        		
			        	} 
			        ?>
    			</tbody>
  			</table>	
	        
	        <div class="form-actions">
	    		<a class="btn" href="<?php echo site_url('Stocker/inventory_add_item'); ?>"><i class="icon-plus"></i> Add Item</a>
	  		</div>
		</div>
	</div>
</div>