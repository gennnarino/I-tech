<?php
	session_start();
?>
<!DOCTYPE html>
	<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
	<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<?php
	$Admin=$_SESSION["admin"];
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

			<!-- Offerte in evidenza -->
			<section id="offerte-in-evidenza">
				<div class="row">

					<!-- Prima offerta -->
					<div class="col-sm-4">
						<div class="box-offerta">
							<h3>Postazione pc completa</h3>
							<p class="text-center">
								<img src="assets/img/offerta1.png" class="img-thumbnail img-responsive">
							</p>
							<p>
								Ottima postazione pc completa per ufficio:<br>
								- Monitor 19"<br>
								- Processore Intel i3<br>
								- HDD 1 TB<br>
								- RAM 8 GB<br>
								- Mouse e tastiera<br>
								- Casse Logitech<br>
								Prezzo 399,00€
							</p>
							<a href="#" class="btn btn-primary btn-large btn-block">
								<span class="glyphicon glyphicon-hand-up"></span>   Scopri di più
							</a>
						</div>
					</div>
					<!-- FINE Prima offerta-->

					<!-- Seconda offerta -->
					<div class="col-sm-4">
						<div class="box-offerta">
							<h3>Postazione gaming</h3>
							<p class="text-center">
								<img src="assets/img/offerta2.png" class="img-thumbnail img-responsive">
							</p>
							<p>
								Ottima postazione pc completa per gamer:<br>
								- Monitor 24"<br>
								- Processore Intel i7<br>
								- SSD 256 GB<br>
								- HDD 1 TB<br>
								- RAM 16 GB<br>
								- Mouse e tastiera ProGame<br>
								Prezzo 1199,00€
							</p>
							<a href="#" class="btn btn-primary btn-large btn-block">
								<span class="glyphicon glyphicon-hand-up"></span>   Scopri di più
							</a>
						</div>
					</div>
					<!-- FINE Seconda offerta-->

					<!-- Terza offerta -->
					<div class="col-sm-4">
						<div class="box-offerta">
							<h3>Tablet Samsung</h3>
							<p class="text-center">
								<img src="assets/img/offerta3.jpeg" class="img-thumbnail img-responsive">
							</p>
							<p>
								Ottima tablet Samsung Tab 3:<br>
								- Display 7"<br>
								- WiFi<br>
								- GPS<br>
								- ROM 8 GB<br>
								- RAM 2 GB<br>
								- Cover protettiva in silicone<br>
								Prezzo 199,00€
							</p>
							<a href="#" class="btn btn-primary btn-large btn-block">
								<span class="glyphicon glyphicon-hand-up"></span>   Scopri di più
							</a>
						</div>
					</div>
					<!-- FINE Terza offerta-->

				</div>
			</section>
			<!-- FINE Offerte in evidenza -->
		</div>
		<!-- FINE corpo del sito -->

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
<html>