<!DOCTYPE html>
<html lang="en">
	<?php include 'stylepage.php' ?>
	<?php include 'config.php' ?>
	
<body>
	<?php include 'header.php' ?>
	<?php include 'menu.php' ?>
	<!-- slide -->
	<div id="visual">
			<div class="slide-visual">
				
				<ul class="slide-group">
					<li><img class="img-responsive" src="images/s11.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/s22.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/s33.jpg" alt="Dummy Image" /></li>
				</ul>

				
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	
	</script>

</div>
	
	<div class="product-easy">
	<div class="container">
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default',           
									width: 'auto', 
									fit: true  
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">		  	 
				<div class="resp-tabs-container">
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Latest Designs</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">	
						
						
						
						

					</div>	
				</div>	
			</div>
		</div>
	</div>
	</div>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>