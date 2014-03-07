<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
	    	<div class="well sidebar-nav">
	        	<ul class="nav nav-list">
	          		<li class="nav-header">Transactions</li>
	          		<li <?php if (uri_string() == "Stocker/sorting") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/sorting'); ?>"><i class="icon-list"></i> Item Sorting</a></li>
	          		<li <?php if (uri_string() == "Stocker/transactions") {echo 'class="active"';} elseif (uri_string() == "Stocker/transactions_search") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/transactions'); ?>"><i class="icon-tags"></i> New Transaction</a></li>
	          		<li <?php if (uri_string() == "Stocker/view_cart") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/view_cart'); ?>"><i class="icon-tags"></i> Current Transaction</a></li>
	          		<li <?php if (uri_string() == "Stocker/activity") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/activity'); ?>"><i class="icon-star"></i> Employee Activity</a></li>
	          		<li class="nav-header">Inventory</li>
	          		<li <?php if (uri_string() == "Stocker/inventory") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/inventory'); ?>"><i class="icon-tag"></i> View Inventory</a></li>
	          		<li <?php if (uri_string() == "Stocker/inventory_add_item") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/inventory_add_item'); ?>"><i class="icon-plus"></i> Add Item</a></li>
	          		<li class="nav-header">Loyalty Card</li>
	          		<li <?php if (uri_string() == "Stocker/loyalty") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/loyalty'); ?>"><i class="icon-user"></i> View Members</a></li>
	          		<li <?php if (uri_string() == "Stocker/loyalty_add_member") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/loyalty_add_member'); ?>"><i class="icon-plus"></i> Add Members</a></li>	
	        	</ul>	
	    	</div>
	    </div>