	<div class="span10">
		<div class="row-fluid">
			<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
		   			<div class="item active">
						<img src="../images/presentation2.png" alt="">
						<div class="carousel-caption">
			  				<h4><?php echo $contents[1]["product_name"] . ' - £' . $contents[1]["product_price"]; ?></h4>
			  				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			  			</div>
			  		</div>
			  			
			  		<?php for($counter=2; $counter < 6; $counter++) {
			   			echo '<div class="item">';
							echo '<img src="../images/presentation.png" alt="">';
							echo '<div class="carousel-caption">';
			  					echo '<h4>' . $contents[$counter]["product_name"] . ' - £' . $contents[$counter]["product_price"] . '</h4>';
			  					echo '<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div>';
			  			}
			  		?>
				</div>
			
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			</div>
		</div>
	</div>
</div>