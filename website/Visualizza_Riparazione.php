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

		<!-- Header e barra di navigazione -->
		<header>
			<!-- Barra di navigazione -->
			<nav class="navbar navbar-default">
				<!-- Container barra di navigazione -->
				<div class="container">
					<!-- div contenente titolo e menù-->
					<div class="navbar-header">
						<!-- Pulsante per la visualizzazione del menù mobile-->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<!-- layout menù mobile -->
							<span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
						</button>
						<!-- Logo con reindirizzazione su home page -->
						<a class="navbar-brand" href="index.php">I-Tech</a>
					</div>
					<!-- Barra dei menù-->
					<div class="collapse navbar-collapse navbar-responsive-collapse">

						<!-- Lista per il menù -->
						<ul class="nav navbar-nav">

							<!-- Menù prodotti -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Prodotti<span class="caret"></span>
								</a>
								<!-- Item menù prodotti -->
								<ul class="dropdown-menu">
									<li>
										<a href="prodotti.php?prodotto=0">Telefonia</a>
									</li>
									<li>
										<a href="prodotti.php?prodotto=1">Computer</a>
									</li>
								</ul>
								<!-- FINE Item menù prodotti -->
							</li>
							<!-- FINE Menù prodotti-->

							<!-- Menù riparazioni -->
							<li class="dropdown">	
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Riparazioni<span class="caret"></span>
								</a>
								<!-- Item menù riparazioni -->
								<ul class="dropdown-menu">
									<li>
										<a href="riparazioni.php">Richiedi riparazione</a>
									</li>
									<li>
										<a href="inforip.html">Info riparazioni</a>
									</li>
								</ul>
								<!-- FINE Item menù riparazioni -->
							</li>
							<!-- FINE Menù riparazioni -->

							<!-- Contatti -->
							<li>
								<a href="contatti.php">Contatti</a>
							</li>
							<!-- FINE Contatti -->

							<!-- Accesso e registrazione-->
							<li>
								<form method="post" action="login.php" class="form-inline">
									<fieldset>
										<div class="form-group">
											<input type="text" class="form-control" id="username" name="username" placeholder="Username">
										</div>
										<div class="form-group">
  											<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
  										</div>
  										<div class="form-group">
  											<button type="submit" class="btn btn-primary" id="entra">Login</button>
  										</div>
									</fieldset>
								</form>
							</li>
							<!-- FINE Accesso e registrazione -->
						</ul>
						<!-- FINE Lista per il menù -->
					</div><!-- /.nav-collapse -->
					<!-- FINE Barra dei menù-->
					</div>
			</nav><!-- /.navbar -->
		</header><!-- /header -->

		<!-- Barra testata di pagina -->
		<div class="header-portfolio clearfix">
			<h2 class="pull-left">Lista Riparazioni</h2>
			<ul class="breadcrumb pull-right">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="active">Lista Riparazioni</li>
			</ul>
		</div>
		<!-- FINE Barra testata di pagina -->

		<!-- Corpo del sito -->
		<div class="conteiner">	
       

		<!-- Corpo pagina -->

		<?php include("query_visualizzariparazioni.php"); ?>

		<!-- FINE Corpo pagina -->

		<!-- Footer -->
		<footer>
			<!-- Sezione footer UP -->
			<section id="footer-navigazione">
				<div class="row">

					<!-- Newsletter -->
					<div class="col-sm-4">
						<h3>Newsletter</h3>
						<p>Iscriviti alla newsletter di I-Tech.it inserendo la tua mail per ricevere aggiornamenti su offerte vantaggiose e tecnologia</p>
						<div class="row">
							<div class="col-sm-10">
								<div class="input-group">
									<input type="text" class="form-control">
									<span class="input-group-btn">
										<button class="btn btn-success" type="button"> ISCRIVITI </button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- FINE Newsletter -->

					<!-- Link tecnologia -->
					<div class="col-sm-4">
						<h3> I-tech consiglia </h3>
						<ul class="media-list">
							<!-- Sito uno -->
							<li class="media">
								<img class="media-object pull-left" src="assets/img/siticonsigliati/consiglio1.jpg">
								<div class="media-body">
									<h5 class="media-heading">
										<a href="http://www.telefonino.net" target="_blank">Telefonino.net</a>
									</h5>
									<p>Recensioni di ottima qualità per smartphone.</p>
								</div>
							</li>
							<!-- FINE Sito uno -->

							<!-- Sito due -->
							<li class="media">
								<img class="media-object pull-left" src="assets/img/siticonsigliati/consiglio2.jpg">
								<div class="media-body">
									<h5 class="media-heading">
										<a href="http://www.pcprofessionale.it/" target="_blank">PCProfessionale.it</a>
									</h5>
									<p>Recensioni di ottima qualità per PC.</p>
								</div>
							</li>
							<!-- FINE Sito due -->

							<!-- Sito tre -->
							<li class="media">
								<img class="media-object pull-left" src="assets/img/siticonsigliati/consiglio3.png">
								<div class="media-body">
									<h5 class="media-heading">
										<a href="http://www.passionetecnologica.it/" target="_blank">Passionetecnologia.it</a>
									</h5>
									<p>Recensioni sulla tecnologia in generale.</p>
								</div>
							</li>
							<!-- FINE Sito tre -->

						</ul>
					</div>
					<!-- FINE Link tecnologia -->

					<!-- Contatti -->
					<div class="col-sm-4">
                      	<h3>Contatti</h3>
                      	<address>
                      		<strong>I-Tech, Inc.</strong><br>
                            Via Giovanni Paolo II, 100<br>
                            Fisciano, 85085, Salerno, Italy<br>
                            Telefono/fax: 089 96 0000
                        </address>
                        <address>
                            <strong>E-mail</strong><br>
                            <a href="mailto:#">info@itech.it</a>
                        </address>
                    </div>
					<!-- FINE Contatti -->
				</div>
			</section>
			<!-- FINE Sezione footer UP -->

			<!-- Section Privacy -->
			<section id="footer-copy">
				<div class="row">
					<div class="col-sm-12">
						<p class="right">&copy; 2016 I-Tech.it. &middot; <a href="#">Privacy</a></p>
					</div>
				</div>
			</section>
			<!-- FINE Section Privacy -->
		</footer>
		<!-- FINE Footer -->

		<!-- jQuery e plugin JavaScript  -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/flexslider/jquery.flexslider.js"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
        <script src="assets/js/scripts.js"></script>
	</body>

</html>