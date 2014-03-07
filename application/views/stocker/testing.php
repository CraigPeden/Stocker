'<table>
	<tr>
	  	<th>Item Name | </th>
	  	<th>Item Quantity | </th>
	   	<th>Item Price | </th>
		<th>Sub-Total</th>
	</tr>  
	
	<?php foreach($this->cart->contents() as $items): ?>
	        
	   	<tr>
	    	<td><?php echo $items['name']; ?></td>             
	       	<td><?php echo $items['qty']; ?></td>
	      	<td><?php echo $this->cart->format_number($items['price']); ?></td>
	       	<td>£<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	   	</tr>
	   	
	<?php endforeach; ?>
	
</table>'