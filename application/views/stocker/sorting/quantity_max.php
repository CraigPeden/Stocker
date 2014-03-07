	<div class="span10">
		<div class="row-fluid">
			<div class="alert alert-info">
				<a href="#" class="close" data-dismiss="alert">×</a>
					Inventory sorted by quantity, highest to lowest.
			</div>
			<table class="table table-striped table-bordered">
				<thead>
		    		<tr>
		            	<th class="blue">Product Name</th>
		            	<th class="green">Product Quantity</th>
		          	</tr>
				</thead>
				<tbody>
					<?php 
						foreach($this->db->get('inventory')->result() as $row)
						{
							$sort_array[] = array($row->id, $row->product_quantity);
						}
												
						for($outer = 0; $outer < count($sort_array); $outer++)
						{
							for($inner = 0; $inner < count($sort_array); $inner++)
							{
								if($sort_array[$outer][1] > $sort_array[$inner][1])
								{
									$temp1 = $sort_array[$inner][0];
									$temp2 = $sort_array[$inner][1];
									$sort_array[$inner][0] = $sort_array[$outer][0];
									$sort_array[$inner][1] = $sort_array[$outer][1];
									$sort_array[$outer][0] = $temp1;
									$sort_array[$outer][1] = $temp2;
								}
							}
						}
						
						$counter=0;
						
						for($counter = 0; $counter < count($sort_array); $counter++)
						{
							$product_id = $sort_array[$counter][0];
							echo '<tr>';
							echo '<td>' . $this->Inventory_model->get_full_name_by_id($product_id) . '</td>';
							echo '<td>' . $sort_array[$counter][1] . '</td>';
							echo '</tr>';
						}
			        ?>
		      	</tbody>
			</table>
		</div>
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