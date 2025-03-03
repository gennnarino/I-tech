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

		<?php include "menuNL.php"; ?>

		<!-- Barra testata di pagina -->
		<div class="header-portfolio clearfix">
			<h2 class="pull-left">Registrazione</h2>
			<ul class="breadcrumb pull-right">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="active">Registrazione</li>
			</ul>
		</div>
		<!-- FINE Barra testata di pagina -->

		<!-- Corpo del sito -->
		<div class="conteiner">	

			<!-- Form registrazione -->
			<div class="row">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-9">
					<form method="post" action="regcontrol.php" class="col-sm-11" id="form-reg">
						<fieldset name="registrazione">

							<!-- Dati personali -->
							<legend>Dati personali</legend>

								<div class="form-group col-sm-11">
									<label for="nome" class="col-sm-2 col-lg-2 control-label">Nome</label>
									<div class="col-sm-9">
										<input type="text" class="form-control col-sm-11" id="nome" name="nome" placeholder="Inserire il nome">
									</div>
								</div>

								<div class="form-group col-sm-11">
									<label for="cognome" class="col-sm-2 col-lg-2 control-label">Cognome</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="cognome" name="cognome" placeholder="Inserire il cognome">
									</div>
								</div>

								<div class="form-group col-sm-11">
									<label for="indirizzo" class="col-sm-2 col-lg-2 control-label">Indirizzo</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="indirizzo" name="indirizzo" placeholder="Inserire l'indirizzo">
									</div>
								</div>

								<div class="form-group col-sm-11">
									<label for="cf" class="col-sm-2 col-lg-2 control-label"><a href="http://www.codicefiscale.com/" target="_blank">C.F.</a></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="cf" name="cf" placeholder="Inserire il codice fiscale">
									</div>
								</div>

								<div class="form-group col-sm-11">
									<label for="telefono" class="col-sm-2 col-lg-2 control-label">Telefono</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Inserire il numero di telefono">
									</div>
								</div>
							<!-- FINE Dati personali -->

							<!-- Dati di accesso -->
							<legend>Dati di accesso</legend>
								<div class="form-group col-sm-11">
									<label for="mail" class="col-sm-2 col-lg-2 control-label">E-mail</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="mail" name="mail" placeholder="Inserire la mail">
									</div>
								</div>
								<div class="form-group col-sm-11">
									<label for="pass" class="col-sm-2 col-lg-2 control-label">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" id="pass" name="pass" placeholder="Inserire la password">
									</div>
								</div>
								<!-- FINE Dati di accesso -->

								<!-- Button -->
								<div class="form-group col-sm-11">
									<div class="col-sm-9">
										<button type="submitclass" class="btn btn-primary" id="conferma">Conferma</button>
									</div>
								</div>
								<!-- FINE Button -->
						</fieldset>
					</form>
				</div>
			</div>
			<!-- FINE Form registrazione -->

		</div>
		<!-- FINE Corpo del sito -->

<?php
		include "footer.php";
	?>
<html>