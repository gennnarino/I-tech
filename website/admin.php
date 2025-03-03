<?php
	session_start();
	$log=$_SESSION['loggato'];
	$admin=$_SESSION['admin'];
	$pass=strip_tags($_SESSION['password']);
	$mail=strip_tags($_SESSION['username']);
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
			<h2 class="pull-left">Area utente</h2>
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
				<li class="active">Area utente</li>
			</ul>
		</div>
		<!-- FINE Barra testata di pagina -->

		<!-- Corpo del sito -->
		<div class="table-responsive">
			<table class="table">
    			<tr>		
    				<th>Mail</th>  	
    			  	<td>
    			  		<?php
    			  			echo $mail;
    			  		?>
    			  	</td>
    			  	<td>
    			  		<form method="post" action="query_modifica_dati.php?mod=4">
                            <input hidden="true" type="text" name="mail" value= <?php echo '"'.$mail.'"' ?> >
                            <input type="text" name="nuovo_mailA" id="nuovo_mailA">
                            <button class="btn btn-primary" id="modmailA">Modifica mail</button>
                        </form>
    			  	</td>
    			</tr>
    			<tr>		
    				<th>Password</th>  	
    			  	<td>
    			  		<?php
    			  			echo $pass;
    			  		?>
    			  	</td>
    			  	<td>
    			  		<form method="post" action="query_modifica_dati.php?mod=5">
                            <input hidden="true" type="text" name="mail" value= <?php echo '"'.$mail.'"' ?> >
                            <input type="text" name="nuovo_passA" id="nuovo_passA">
                            <button class="btn btn-primary" id="modpassA">Modifica password</button>
                        </form>
    			  	</td>
    			</tr>
			</table>
		</div>
		<!-- FINE Corpo del sito -->

		<?php
		include "footer.php";
	?>
<html>