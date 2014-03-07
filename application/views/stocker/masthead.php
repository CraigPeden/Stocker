<style>
	
	body {
		background: #000;
		background-image: url(../../images/mastbkgd.png);
		background-repeat: no-repeat;
	}
	
	h2 {
		color: white;
	}
	
	p {
		color: #848688;
	}
	
	.head {
		padding-left: 0 !important;
		padding-right: 0 !important;
	}
	
	.hero-image {
		height: 360px;
	}
	
	.navbar {
		margin-bottom: 0px;
	}
	
	.navbar .nav .active > a, .navbar .nav .active > a:hover {
  		border-bottom: 2px gray double;
  		background: none !important;
	}
	
	.navbar-inner {
		background: none !important;
	}
	
</style>
	
<div class="container-fluid head">
	<div class="row-fluid hero-image"></div>
</div>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span4">
			<div class="row-fluid">
				<div class="span4">
        			<h2>Inventory</h2>
        		</div>
        		<div class="span8" style="margin-top:8px;">
        			<a class="btn pull-right" style="margin-left:5px;" href="<?php echo site_url('Stocker/inventory'); ?>"><i class="icon-tag"></i> Inventory &raquo;</a>
        			<a class="btn pull-right" href="<?php echo site_url('Stocker/transactions'); ?>"><i class="icon-tags"></i> Transactions &raquo;</a>
        		</div>
        	</div>
        	<div class="row-fluid" style="margin-top:10px;">
        		<p>Stocker can hold a large inventory of current items in stock along with their Quantity, Price and Category. It can then facilitate the transaction of stored goods.</p>
        	</div>
      	</div>
     	<div class="span4">
     		<div class="row-fluid">
				<div class="span6">
        			<h2>Sorting</h2>
        		</div>
        		<div class="span6" style="margin-top:8px;">
        			<a class="btn pull-right" href="<?php echo site_url('Stocker/sorting'); ?>"><i class="icon-list"></i> Sorting &raquo;</a>
        		</div>
        	</div>
        	<div class="row-fluid" style="margin-top:10px;">
      			<p>Stocker can sort the inputed inventory both in ascending and decending order by both price and quantity, allowing for quick comparisons between products.</p>
      		</div>
     	</div>
		<div class="span4">
			<div class="row-fluid">
				<div class="span6">
        			<h2>Loyalty</h2>
        		</div>
        		<div class="span6" style="margin-top:8px;">
        			<a class="btn pull-right" href="<?php echo site_url('Stocker/loyalty'); ?>"><i class="icon-user"></i> Loyalty &raquo;</a>
        		</div>
        	</div>
        	<div class="row-fluid" style="margin-top:10px;">
        		<p>Stocker allows for Loyalty members to be added and how many times they have shopped using Stocker to be tracked.</p>
        	</div>      	
      	</div>
	</div>
</div>