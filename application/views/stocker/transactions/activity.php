	<div class="span10">
		<div class="row-fluid">			
 	        <table class="table table-striped table-bordered">
   				<thead>
			          <tr>
			            <th>ID</th>
			            <th class="blue">Username</th>
			            <th class="red">Visits</th>
			            <th class="yellow">Last Visit</th>
			          </tr>
    			</thead>
    			<tbody>
		        	<?php 
			        	foreach($user_info->result() as $row)
			        	{
			        		echo '<tr>';
			        		echo '<td>' . $row->id . '</td>';
			        		echo '<td>' . $row->username . '</td>';
			        		echo '<td>' . $row->visit_number . '</td>';
							echo '<td>' . $row->last_visit . '</td>';
			        		
			        	} 
			        ?>
    			</tbody>
  			</table>	
		</div>
	</div>
</div>