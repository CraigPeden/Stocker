	<style>
		.carousel-caption {
		padding-left: 50px !important;
		height:30px;
		margin:0;
		padding-top: 0 !important;
		padding-bottom: 0 !important;
		}
		
		.item {
		height: 30px;
		}
		
		p {
		color: #000 !important;
		font-size: 20px;
		margin: 0;
		line-height: 30px;
		}
		
		.carousel-control {
			height: 30px;
			width: 30px;
			position: absolute;
			top: 0px;
			left: 15px;
			margin-top: -3px;
			font-size: 40px;
			font-weight: 100;
			line-height: 30px;
			color: black;
			text-align: center;
		}
		
		.carousel-caption {
			padding: 10px 15px 5px;
  			background: #fff;
  		}
  		
  		.carousel-control:hover {
 			color: #08C;
 			height: 30px;
  			text-decoration: none;
  		}
	</style>
	
	<div class="span10">
		<div class="row-fluid">
			<?php if ($this->session->flashdata('success') != '') { ?>
				<div class="alert alert-success fade in" data-alert="alert">
				<a class="close" data-dismiss="alert" href="#">×</a>
				<span><?php echo $this->session->flashdata('success'); ?></span>
				</div>
    		<?php } ?>
    		<?php if ($this->session->flashdata('error') != '') { ?>
				<div class="alert alert-error fade in" data-alert="alert">
				<a class="close" data-dismiss="alert" href="#">×</a>
				<span><?php echo $this->session->flashdata('error'); ?></span>
				</div>
    		<?php } ?>
			
			<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
		   			<div class="item active">
						<img src="../images/slide.png" alt="">
						<div class="carousel-caption">
			  				<p><?php echo $contents[1]["product_name"] . ' - £' . $contents[1]["product_price"]; ?></p>
			  			</div>
			  		</div>
			  			
			  		<?php for($counter=2; $counter < 6; $counter++) {
			   				echo '<div class="item">';
							echo '<img src="../images/slide.png" alt="">';
							echo '<div class="carousel-caption">';
			  				echo '<p>' . $contents[$counter]["product_name"] . ' - £' . $contents[$counter]["product_price"] . '</p></div></div>';
			  			}
			  		?>
				</div>
			
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			</div>
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
			        	foreach($inventory->result() as $row)
			        	{
			        		echo '<tr>';
			        		echo '<td>' . $row->id . '</td>';
			        		echo '<td>' . anchor('Stocker/inventory_profile' . '?id=' . $row->id, $row->product_name) . '</td>';
			        		echo '<td>' . $row->product_quantity . '</td>';
							echo '<td>' . $row->product_category . '</td>';
							echo '<td>' . '£' . $row->product_price . '</td>';
							echo '<td>';
							echo form_open('Stocker/add_to_cart', 'class="form-horizontal" style="margin:0;"');
							echo form_hidden('product_id',$row->id);
							echo form_hidden('product_name',$row->product_name);
							echo form_hidden('product_price',$row->product_price);
							echo form_input('qty', '1', 'class="span1"');
							echo form_submit('', 'Add Item', 'class="btn" style="margin-left:5px;"');
							echo form_close();
							echo '</td>';
						}
			        ?>
    			</tbody>
	  		</table>
	  	</div>
	</div>
</div>