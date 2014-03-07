	<style>
		.appended_length {
		width: 184px !important;
		}
	</style>
	<div class="span10">
		<div class="row-fluid">	
		   	<form method="post" class="form-horizontal" action="<?php echo site_url('Stocker/add_loyalty_member'); ?>">
		   		<?php if ($this->session->flashdata('success') != "") { ?>
						<div class="alert alert-success fade in" data-alert="alert">
	        				<a class="close" href="#">×</a>
	        				<p><?php echo $this->session->flashdata('success'); ?></p>
	    				</div>
				<?php } ?>
				<?php if ($this->session->flashdata('error') != "") { ?>
					<div class="alert alert-success fade in" data-alert="alert">
	    				<a class="close" href="#">×</a>
	    				<p><?php echo $this->session->flashdata('error'); ?></p>
					</div>
				<?php } ?>
	
				<legend>Add Loyalty Member</legend>
				<fieldset class="control-group">			        			  				        
			        <label class="control-label" for="xlInput">First Name</label>
			        <div class="controls">
			        	<div class="input-prepend">
			        		<span class="add-on"><i class="icon-user">1</i></span>
		            		<input class="large appended_length" id="xlInput" name="loyalty_first_name" size="30" type="text" placeholder="John">
		            	</div>
		            </div>
		      	</fieldset>
		      	<fieldset class="control-group">          	
	            	<label class="control-label" for="xlInput">Last Name</label>
	            	<div class="controls">
	            		<div class="input-prepend">
			        		<span class="add-on"><i class="icon-user">2</i></span>
							<input class="large appended_length" id="xlInput" name="loyalty_second_name" size="30" type="text" placeholder="Appleseed">
						</div>
	            	</div>
	            </fieldset>
	            <fieldset class="control-group">
	            	<label class="control-label" for="xlInput">Age</label>
	            	<div class="controls">
	            		<div class="input-prepend">
			        		<span class="add-on"><i class="icon-calendar"></i></span>
		            		<input class="large appended_length" id="xlInput" name="loyalty_age" size="30" type="text" placeholder=">9000">
		            	</div>
	            	</div>
	          	</fieldset>
	   			
	   			<fieldset class="form-actions">
		        	<input type="submit" class="btn primary" value="Add Member">&nbsp;</button>
		        	<input type="reset" class="btn" value="Clear">&nbsp;</button>
		        	<a class="btn btn-info pull-right" href="<?php echo site_url('Stocker/loyalty');?>">View Members</a>	        	
		       	</div>       
			</form>
		</div>
	</div>
</div>