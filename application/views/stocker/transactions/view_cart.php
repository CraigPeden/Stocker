	<div class="span10">
		<div class="row-fluid">
			<div class="alert alert-info fade in" data-alert="alert">
    			<a class="close" data-dismiss="alert" href="#">×</a>
    			Set Quantity to 0 for item deletion.
			</div>
				
			<?php echo form_open('Stocker/update_cart'); ?>

            <table class="table table-striped table-bordered">
            
            <tr>
            	<th>Item Name</th>
          		<th>Item Quantity</th>
          		<th>Item Price</th>
          		<th>Sub-Total</th>
            </tr>
            
            <?php $i = 1; ?>
            
            <?php foreach($this->cart->contents() as $items): ?>
            
                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                
                <tr>
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
                  
                  <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'class' => 'span3', 'style' => 'margin:0;' )); ?></td>
                  <td><?php echo $this->cart->format_number($items['price']); ?></td>
                  <td>£<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                </tr>
            
            <?php $i++; ?>
            
            <?php endforeach; ?>
            
            <tr>
              <td colspan="2"> </td>
              <td><strong>Total</strong></td>
              <td>£<?php echo $this->cart->format_number($this->cart->total()); ?></td>
            </tr>
            
            </table>
            
            <div class="form-actions">
            	<?php echo form_submit('', 'Update your Cart', 'class="btn success"'); ?>
            	<a class="btn btn-info" href="<?php echo site_url('Stocker/transactions');?>">Continue Shopping</a>
            	<a class="btn btn-danger" href="<?php echo site_url('Stocker/clear_cart');?>"><i class="icon-trash icon-white"></i> Clear Order</a>
            	<a class="btn btn-success pull-right" href="<?php echo site_url('Stocker/checkout');?>"><i class="icon-shopping-cart icon-white"></i> Checkout</a>
            </div>
           
      	</div>
  	</div>
</div>