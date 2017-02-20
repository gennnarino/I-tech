<?php
	session_start();
	$acq=strip_tags($_GET['acq']);
	$log=$_SESSION['loggato'];
	$admin=$_SESSION['admin'];
	
?>
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
		<?php
			if($log){
				include "menuL.php";
			}
			else{
				include "menuNL.php";
			}
		?>
		<!-- FINE Menu -->

		<!-- Barra testata di pagina -->
		<div class="header-portfolio clearfix">
			<ul class="breadcrumb pull-right">
				<li>
					<?php
						if($log){
							echo "<a href=\"home.php\">Home</a>";
						}
						else{
							echo "<a href=\"index.php\">Home</a>";
						}
					?>
				</li>
				<li class="active">
					<?php
						if($acq==0){
							echo 'Carrello';
						}
						else{
							echo'Storico acquisti';
						}	
					?>
				</li> 
			</ul>
		</div>
		<section id="presentazione">
			<div class="row">
				<div class="col-sm-12">
					<!-- Titolo messaggio -->
					<h2 class="text-center">
						<?php
							if($acq==0){
								echo 'Carrello';
							}
							else{
								echo'Storico acquisti';
							}
						?>
					</h2> 
				</div>
			</div>
		</section>
		<!-- FINE Barra testata di pagina -->

		<!-- Corpo -->
		<?php
			if($acq==0){
				echo '<section id="tabella prodotti">';
				include"visualizza_carrello.php";
				echo '</section>';
				echo '<section>
						<div class="row">
							<div class="col-sm-1">
							</div>
							<div class="col-sm-10">
								<form id="acquista-form" class="form-inline" method="POST" action="query_ordine.php">
                    				<input hidden="true" type="text" name="totale_ordine" value="'.$totale_ordine.'">
                    				<p>Totale ordine '.$totale_ordine.' ,00 €</p>
                    				<button type="submit" class="btn btn-success">
                        				<span class="glyphicon glyphicon-shopping-cart"></span>   Finalizza acquisto
                    				</button>
                				</form>
							</div>
							<div class="col-sm-1">
							</div>
						</div>
					  </section>';
			}
			else{
				include"query_visualizza_ordine.php";
			}
		?>
		<!-- FINE Corpo -->

		<div>
			<p>
			</p>
		</div>
	<?php
		include "footer.php";
	?>
</html>