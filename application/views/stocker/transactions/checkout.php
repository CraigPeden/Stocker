	<div class="span10">
		<div class="row-fluid">			
 	        <table class="table table-condensed">
   				<thead>
		        	<tr>
		            	<th>Qty</th>
		            	<th>Item</th>
		            	<th>Price</th>
		          	</tr>
    			</thead>
	    		<tbody>
	    		
	    			<?php $i = 1; ?>
	    			<?php foreach($this->cart->contents() as $items): ?>
	            
	                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
	                
	                <tr>
	                	<td><?php echo $items['qty']; ?></td>
	                  	<td>
	                    <?php echo $items['name']; ?>
	                                
	                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
	                                
	                            <p>
	                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
	                                    
	                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
	                                                    
	                                <?php endforeach; ?>
	                            </p>
	                            
	                        <?php endif; ?>
	                            
	                  </td>
	                  
	                  
	                  <td>£<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	                </tr>
	            
	            	<?php $i++; ?>
	            
	            	<?php endforeach; ?>	
	            	<tr>
              			<td colspan="1"> </td>
              			<td><strong>Total</strong></td>
              			<td>£<?php echo $this->cart->format_number($this->cart->total()); ?></td>
           		 	</tr>
    			</tbody>
  			</table>	
  			<div class="form-actions">
  				<a class="btn btn-success" href="<?php echo site_url('Stocker/final_checkout'); ?>"><i class="icon-shopping-cart icon-white"></i> Finalise Order</a>
  				<a class="btn btn-success" href="<?php echo site_url('Stocker/checkout_loyalty'); ?>"><i class="icon-shopping-cart icon-white"></i> Finalise Order with Loyalty Member</a>
  				<a class="btn btn-danger pull-right" href="<?php echo site_url('Stocker/clear_cart'); ?>"><i class="icon-trash icon-white"></i> Delete Order</a>
  			</div>
		</div>
	</div>
</div>