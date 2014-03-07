	<div class="span10">
		<div class="row-fluid">
			<table class="table table-striped table-bordered">
	   			<thead>
					<tr>
			            <th class="blue">Product Name</th>
			            <th class="red">Product Quantity</th>
			            <th class="green">Product Price</th>
			      	</tr>
	    		</thead>
	    		<tbody>
			    	<?php 
			        	foreach($inventory->result() as $row)
			        	{
			        		echo '<tr>';
			        		echo '<td>' . anchor('Stocker/inventory_profile' . '?id=' . $row->id, $row->product_name) . '</td>';
			        		echo '<td>' . $row->product_quantity . '</td>';
							echo '<td>' . '£' . $row->product_price . '</td>';
							echo '</tr>';
			        	} 
				   	?>
	    		</tbody>
	  		</table>	
	        
        	<div class="form-actions">
				<span>Sort:</span>
    			<a class="btn" href="<?php echo site_url('Stocker/quantity_max'); ?>"><i class="icon-arrow-down"></i> Quantity High > Low</a>
    			<a class="btn" href="<?php echo site_url('Stocker/quantity_min'); ?>"><i class="icon-arrow-up"></i> Quantity Low > High</a>
    			<a>|</a>
    			<a class="btn" href="<?php echo site_url('Stocker/numeric_max'); ?>"><i class="icon-arrow-down"></i> Price High > Low</a>
    			<a class="btn" href="<?php echo site_url('Stocker/numeric_min'); ?>"><i class="icon-arrow-up"></i> Price Low > High</a>
    		</div>
		</div>
	</div>
</div>