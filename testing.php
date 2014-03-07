<?php foreach($this->cart->contents() as $items): ?>
                
  	<tr>
    	<td>
        	<?php echo $items['name']; ?>
       	</td>
                      
       	<td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'class' => 'span3', 'style' => 'margin:0;' )); ?></td>
      	<td><?php echo $this->cart->format_number($items['price']); ?></td>
       	<td>£<?php echo $this->cart->format_number($items['subtotal']); ?></td>
   	</tr>
   	
<?php endforeach; ?>