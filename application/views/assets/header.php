<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
    <title>Stocker</title>
    
    <meta name="description" content="Stocker App">
    <meta name="author" content="Craig Peden">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le Styles -->
    <link href="../../../css/bootstrap.css" rel="stylesheet">
    <link href="../../../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../../../css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet">
    
	<style type="text/css">

		.sidebar-nav {
			padding: 9px 0;
		}
   		.navbar {	
      		right: 0;
			left: 0;
			border-radius: 0;
			position: relative;
		}
		.navbar-inner {
			padding-left: 0;
			padding-right: 0;
			-webkit-border-radius: 0;
			-moz-border-radius: 0;
			border-radius: 0;
		}
	}
	</style>
</head>

<body>
<div class="navbar">
	<div class="navbar-inner">
    	<div class="container-fluid">
        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</a>
         	<a class="brand" href="../../">Stocker</a>
          	<div class="nav-collapse">
            	<ul class="nav">
	              	<li <?php if (uri_string() == "") {echo 'class="active"';} ?>><a href="<?php echo site_url() ?>"><i class="icon-home icon-white"></i> Home</a></li>
	  				<li <?php if (uri_string() == "Stocker/about") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/about'); ?>"><i class="icon-inbox icon-white"></i> About</a></li>
	  				<li <?php if (uri_string() == "Stocker/changelog") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/changelog'); ?>"><i class="icon-star-empty icon-white"></i> Changelog</a></li>
	  				<li <?php if (uri_string() == "Stocker/checklist") {echo 'class="active"';} ?>><a href="<?php echo site_url('Stocker/checklist'); ?>"><i class="icon-ok icon-white"></i> Checklist</a></li>
            	</ul>
            <?php if (isset($user)) { ?>
		       	<ul class="nav pull-right">
		        	<li id="fat-menu" class="dropdown">
		        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <?php echo $user->username; ?> <b class="caret"></b></a>
			            <ul class="dropdown-menu">
			             	<li><a href="<?php echo site_url() ?>">Home</a></li>
		            		<li class="divider"></li>
		            		<li><?php echo anchor('Login/logout', "Logout"); ?></li>
			            </ul>
		          	</li>
	             </ul>
            <?php } ?>
       		</div><!--/.nav-collapse -->
   		</div>
	</div>
</div>

