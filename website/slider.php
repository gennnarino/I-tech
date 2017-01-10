<?php
	session_start();
	$log=$_SESSION['loggato'];
	$Admin=$_SESSION['admin'];	
?>

<!-- Sezione slider con Flexslider -->
<div class="row">
	<div class="col-sm-12">
		<div id="main-slider" class="flexslider">
			<ul class="slides">
   				<li>
   					<a href="prodotti.php?prodotto=1">
   						<img src="assets/img/flexslider/slide_uno.jpg">
   					</a>
   				</li>
   				<li>
   					<a href="prodotti.php?prodotto=1">
   						<img src="assets/img/flexslider/slide_due.jpg">
   					</a>
   				</li>
   				<li>
   					<a href="prodotti.php?prodotto=0">
   						<img src="assets/img/flexslider/slide_tre.jpg">
   					</a>
   				</li>
  			</ul>
 		</div><!-- /.flexslider -->
	</div><!-- /.col-sm-12 -->
</div><!-- /.row -->
<!-- FINE Sezione slider con Flexslider -->

