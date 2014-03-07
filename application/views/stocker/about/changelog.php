<style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #000;
        background-image: url(../../images/bkgd.png);
        background-repeat: no-repeat;
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span3 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }
      
        .navbar {
			margin-bottom: 18px;
		}
		
		.navbar .nav .active > a, .navbar .nav .active > a:hover {
	  		border-bottom: 2px gray double;
	  		background: none !important;
		}
		
		.navbar-inner {
			background: none !important;
		}

</style>

<div class="container">
	<div class="content">
		<div class="page-header">
			<h1>Stocker <small>Development History</small></h1>
		</div>
		<div class="row-fluid">
	  		<div class="span7">
	  			<h4>Version 1.0.2</h4>
	    		<dl>
			        <dt>1.0.2 Stable <small>- 2/03/12</small></dt>
			        <dd>Non-E-Commerce pages now dark designs creating a clear difference between the two pages. Styling tweaks.</dd>
			        <dt>1.0.1 Stable <small>- 1/03/12</small></dt>
			        <dd>Icons added to common tasks to add user experience continuity.</dd>
			        <dt>1.0 Stable <small>- 1/03/12</small></dt>
			        <dd>Loyalty Implemented, First Stable Release</dd>
			        <dt>0.4b <small>- 29/02/12</small></dt>
			        <dd>UX Unification Complete, new masthead.</dd>
			        <dt>0.3a <small>- 23/02/12</small></dt>
			        <dd>Ported to new bootstrap release. Transactions and sorting fully implemented. UX unification begun.</dd>
			        <dt>0.2.1a <small>- 18/01/12</small></dt>
			        <dd>Fixed bugs in porting, fixed menu, added restocking. Ready to begin transactions</dd>
			        <dt>0.2.0a <small>- 18/01/12</small></dt>
			        <dd>Ported to Bootstrap V2, finalised the profile system. Nearly ready to start transactions</dd>
			        <dt>0.1.2a <small>- 15/12/11</small></dt>
			        <dd>Added Profiles</dd>
			        <dt>0.1.1a <small>- 15/12/11</small></dt>
			        <dd>Added Loyalty Card system, Adding and Deleting members</dd>
			        <dt>0.1.0a <small>- 7/12/11</small></dt>
			        <dd>Edit inventory items finished</dd>
			        <dt>0.0.4</dt>
			        <dd>Delete inventory items, added changelog page, started JSON autocomplete</dd>
			        <dt>0.0.3</dt>
			        <dd>Add inventory, Display current inventory</dd>
			        <dt>0.0.2</dd>
			        <dd>Logout, About Page</dd>
			        <dt>0.0.1</dd>
			        <dd>Initial Build, Mainpage + Initial Login</dt>
			    </dl>
	  		</div>
	  		<div class="span3">
	  			<h4>Dev Info</h4>
	    		<ul class="unstyled">
			        <li>Languages
			        	<ul>
			        		<li>HTML 5</li>
			        		<li>CSS 3</li>
			        		<li>PHP 5</li>
			        		<li>MySQL 5.5.9</li>
			        	</ul>
			        </li>
			            <li>Development Environment
			        	<ul>
			        		<li>Mac OS X 10.7 (Lion)</li>
			        	</ul>
			        </li>
			        <li>Development Tools
			        	<ul>
			        		<li>MAMP - Apache/PHP</li>
			        		<li>Coda - PHP/HTML/CSS</li>
			        		<li>Sequel Pro - MySQL</li>
			        		<li>Google Chrome</li>
			        		<li>GIMP</li>
			        	</ul>
			        </li>			        
			        <li>Frameworks				        
			        	<ul>
				            <li><a href="http://codeigniter.com/">Codeigniter (PHP)</li>
				            <li><a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap (HTML/CSS)</a></li>
				        </ul>
			        </li>
		      </ul>
	  		</div>
		</div>
	</div>
</div> <!-- /container -->
