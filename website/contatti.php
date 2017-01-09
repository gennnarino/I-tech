<!DOCTYPE html>
	<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
	<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<?php
	session_start();
	$log=$_POST['loggato'];
	$Admin=$_POST['admin'];
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
			<h2 class="pull-left">Contatti</h2>
			<ul class="breadcrumb pull-right">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="active">Contatti</li>
			</ul>
		</div>
		<!-- FINE Barra testata di pagina -->

		<!-- Corpo -->
		<div class="container">
			<div class="row">

				<!-- Dx -->
				<div class="col-sm-6 col-sm-push-6">
					<section id="info-contatto" class="margine-bottom">

						<!-- Mappa -->
						<h3 class="contatti-titoli">Dove siamo</h3>
						<a href="https://www.google.it/maps/place/Via+Giovanni+Paolo+II,+100,+84084+Pizzolano+SA/@40.7784746,14.7801074,14.43z/data=!4m5!3m4!1s0x133bc5b963b7ad89:0xbf914924f12a6db1!8m2!3d40.778325!4d14.781048?hl=it" target="_blank">
							<img class="thumbnail img-responsive" src="assets/img/mappa.png">
						</a>
						<!-- FINE Mappa -->

						<!-- Recapiti -->
						<h3 class="contatti-titoli">Recapiti</h3>
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
                        <!-- FINE Recapiti -->

					</section>
				</div><!-- /col-lg-6 -->

				<!-- Sx -->
				<div class="col-sm-6 col-sm-pull-6">

					<!-- Sezione messaggio -->
					<section id="modulo-di-contatto" class="margine-bottom">
						<h3 class="contatti-titoli">Modulo di contatto</h3>

						<!-- Form contatti -->
						<form id="contatti-form" class="form-horizontal">

							<!-- Nome -->
							<div class="form-group">
								<label for="inputNome" class="control-label">Nome</label>
								<input class="form-control" type="text" id="inputNome" name="inputNome" placeholder="Nome e cognome" class="input-with-feedback">
							</div>
							<!-- FINE Nome -->

							<!-- Mail -->
							<div class="form-group">
								<label for="inputEmail" class="control-label">Email</label>
								<input class="form-control" type="text" id="inputEmail" name="inputEmail" placeholder="mail@example.it" class="input-with-feedback">
							</div>
							<!-- FINE Mail -->

							<!-- Messaggio -->
							<div class="form-group">
								<label for="textMessaggio" class="control-label">Messaggio</label>
								<textarea class="form-control" id="textMessaggio" name="textMessaggio" rows="6" placeholder="Inserisci qui il tuo messaggio..." class="input-with-feedback"></textarea>
								<br>
								<button type="submit" class="btn btn-success btn-block">Invia</button>
							</div>
							<!-- FINE Messaggio -->

						</form>
						<!-- FINE Form contatti -->

					</section>
					<!-- FINE Sezione messaggio -->

					<!-- Section faq -->
					<section id="faq" class="margine-bottom">
						<h3 class="contatti-titoli">Domande frequenti</h3>
						<div class="panel-group" id="accordion-faq">

							<!-- Prima faq -->
							<div class="panel panel-default">

								<!-- Prima domanda -->
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-faq" href="#faq-pannello-1">
											Come posso pagare se acquisto un prodotto?
										</a>
									</h4>
								</div>
								<!-- FINE Prima domanda -->

								<!-- Prima risposta -->
								<div id="faq-pannello-1" class="panel-collapse collapse in">
									<div class="panel-body">
										<p>
											I metodi di pagamento accettati da I-tech.it sono i seguenti:<br>
											- PayPal<br>
											- Bonifico bancario<br>
											- Contrassegno
										</p>
									</div>
								</div>
								<!-- FINE Prima risposta -->

							</div>
							<!-- FINE Prima faq -->

							<!-- Seconda faq -->
							<div class="panel panel-default">

								<!-- Seconda domanda -->
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-faq" href="#faq-pannello-1">
											Si può restituire un prodotto acquistato?
										</a>
									</h4>
								</div>
								<!-- FINE Seconda domanda -->

								<!-- Seconda risposta -->
								<div id="faq-pannello-1" class="panel-collapse collapse in">
									<div class="panel-body">
										<p>
											Si, a patto che il prodotto sia stato acquistato fino a 30 giorni prima dalla data di restituzione e che sia conservato nella confezione originali senza aver subito danni. Verranno poi accreditati, sul conto corrente indicato dal cliente i soldi pari al prezzo di acquisto escluso le tasse e le spese di spedizione.
										</p>
									</div>
								</div>
								<!-- FINE Seconda risposta -->

							</div>
							<!-- FINE Seconda faq -->

							<!-- Terza faq -->
							<div class="panel panel-default">

								<!-- Terza domanda -->
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-faq" href="#faq-pannello-1">
											Quale corriere viene usato per le spedizioni?
										</a>
									</h4>
								</div>
								<!-- FINE Terza domanda -->

								<!-- Terza risposta -->
								<div id="faq-pannello-1" class="panel-collapse collapse in">
									<div class="panel-body">
										<p>
											I-Tech.it si appoggia a più società di distribuzione ed è il cliente a decidere con quale corriere ricevere l'oggetto acquistato. Le società a cui I-tech.it si appoggia sono le seguenti:<br>
											- Bartolini<br>
											- DHL<br>
											- TNT
										</p>
									</div>
								</div>
								<!-- FINE Terza risposta -->

							</div>
							<!-- FINE Terza faq -->

						</div>
					</section>
					<!-- FINE Section faq -->

				</div>
			</div>
		</div>
		<!-- FINE Corpo -->
		<div>
			<p>
			</p>
		</div>
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