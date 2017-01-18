
<!DOCTYPE html>
	<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
	<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
        
        
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Il meta tag "viewport" gestisce la visualizzazione in scala del sito-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="description" name="Il portale italiano dedicato alla tecnologia">
		<title>I-Tech.it</title>

		<!-- Fogli di stile -->

		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
		<link rel='stylesheet' href="assets/css/generale.css">
		<!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js"></script>
        <!-- respond.js per IE8 -->
        <!--[if lt IE 9]>   
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->


	</head>

	<body>

		<!-- Menu -->
		<?php include "menuL.php" ?>
		<!-- FINE Menu -->

		<!-- Corpo del sito -->
		<div class="container">
			<!-- Messaggio di benvenuto -->
			<section id="presentazione">
				
				<div class="row">
					<div class="col-sm-12">
						<!-- Titolo messaggio -->
						<h1 class="text-center">
							<small>Benvenuto in I-Tech.it</small>
						</h1>
						<!-- FINE Titolo messaggio-->

						<!-- Sottotitolo messaggio -->
						<p class="lead text-center" style="color: #d3d3d3">Il portale italiano dedicato alla tecnologia</p>
						<!-- FINE Sottotitolo messaggio -->
					</div>
				</div>
			</section>
			<!-- FINE Messaggio di benvenuto -->

			<!-- Slider -->
			<?php include "slider.php" ?>
			<!-- FINE Slider -->
			
			<!-- Vetrina -->
			<?php include "vetrina.php" ?>
			<!-- FINE Vetrina -->

		</div>
		<!-- FINE corpo del sito -->
<?php
		include "footer.php";
	?>
<html>