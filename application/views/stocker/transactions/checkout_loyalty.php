	<div class="span10">
		<div class="row-fluid">			
 	        <table class="table table-condensed">
   				<thead>
			          <tr>
			            <th>Card Code</th>
			            <th class="red">First Name</th>
			            <th class="blue">Age</th>
			            <th class="green">Loyalty Balance</th>
			            <th>Select</th>
			          </tr>
    			</thead>
    			<tbody>
    				<?php 
			        	foreach($loyalty->result() as $row)
			        	{
			        		echo '<tr>';
			        		echo '<td>' . $row->id . '</td>';
			        		echo '<td>';
			        		echo anchor('Stocker/loyalty_profile' . '?id=' . $row->id, $row->loyalty_first_name . ' ' . $row->loyalty_second_name);
			        		echo '</td>';
			        		echo '<td>' . $row->loyalty_age . '</td>';
							echo '<td>' . $row->loyalty_balance . ' Visits' . '</td>';
							echo '<td>';
							echo anchor('Stocker/checkout_loyalty_final' . '?id=' . $row->id, 'Select', 'class="btn btn-success"');
							echo '</td>';
			        		
			        	} 
			        ?>
			  	</tbody>
			</table>
  			
  			<div class="form-actions">
  				<a class="btn btn-danger" href="<?php echo site_url('Stocker/clear_cart'); ?>">Delete Order</a>
  			</div>
		</div>
	</div>
</div>