<!DOCTYPE html>
	<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
	<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<?php
	session_start();
	$prod=$_GET['prodotto'];
	$log=$_SESSION['loggato'];
	$Admin=$_SESSION['admin'];
	$carrello=$_SESSION['carrello'];
		echo count($carrello);
		array_push($carrello, $_POST['idP'],$_POST['inputQuantita'],$_POST['prezzo']);
		echo count($carrello);
	
?>

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
						if($prod==0){
							echo 'Telefonia';
						}
						else{
							echo'Computer';
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
							if($prod==0){
								echo 'Telefonia';
							}
							else{
								echo'Computer';
							}
						?>
					</h2> 
				</div>
			</div>
		</section>
		<!-- FINE Barra testata di pagina -->

		<!-- Corpo pagina -->

		<?php include("query_vis_prod.php"); ?>

		<!-- FINE Corpo pagina -->

<?php
		include "footer.php";
	?>
</html>