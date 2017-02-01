<?php
	session_start();
	$log=$_SESSION['loggato'];
	$Admin=$_SESSION['admin'];
	$mag=$_GET['mag'];
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
        <style TYPE="text/css">
  			img.img-resize {
  				width: 200px;
  				height: auto;
  			}
		</style>
        
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
			<?php
				if($mag==0){
					echo '<h2 class="pull-left">Inserisci prodotto</h2>';
				}
				else if($mag==1){
					echo '<h2 class="pull-left">Magazzino</h2>';
					}
				else{
					echo '<h2 class="pull-left">Ordini</h2>';
				}
			?>
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
				<?php
					if($mag==0){
						echo '<li class="active">Inserisci prodotto</li>';
					}
					else if($mag==1){
						echo '<li class="active">Magazzino</li>';
					}
					else{
						echo '<li class="active">Ordini</li>';
					}
				?>
				
			</ul>
		</div>
		<!-- FINE Barra testata di pagina -->

		<!-- Corpo -->
		<?php
			if($mag==0){
				include "ins_prodotto.php";
			}
			else if($mag==1){
				include "query_magazzino.php";
			}
			else{
				include "query_visualizza_ordine.php";
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