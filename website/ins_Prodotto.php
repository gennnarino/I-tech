<!DOCTYPE html>
	<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
	<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<?php
	session_start();
	$log=$_SESSION['loggato'];
	$Admin=$_SESSION['admin'];
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

		<!-- Corpo del sito -->
		<div class="conteiner">	

			<!-- Form registrazione -->
			<div class="row">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-9">
					<form method="post" action="q_InsPr.php" class="col-sm-11" enctype="multipart/form-data" >
						<fieldset name="inserimento">

							<!-- Dati personali -->
							<legend>Dati prodotto</legend>

                            <div class="form-group col-sm-11">
									<label for="categoria" class="col-sm-2 col-lg-2 control-label">Categoria</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="categoria" name="categoria" placeholder="Inserire la categoria">
									</div>
								</div>
                            
								<div class="form-group col-sm-11">
									<label for="nome" class="col-sm-2 col-lg-2 control-label">Modello</label>
									<div class="col-sm-9">
										<input type="text" class="form-control col-sm-11" id="modello" name="modello" placeholder="Inserire il modello">
									</div>
								</div>

								<div class="form-group col-sm-11">
									<label for="marca" class="col-sm-2 col-lg-2 control-label">Marca</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="marca" name="marca" placeholder="Inserire la marca">
									</div>
								</div>

                            	<div class="form-group col-sm-11">
									<label for="descrizione" class="col-sm-2 col-lg-2 control-label">Descrizione</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="descrizione" name="descrizione" placeholder="Inserire la descrizione">
									</div>
                            </div>
                                    
								<div class="form-group col-sm-11">
									<label for="prezzo_IN" class="col-sm-2 col-lg-2 control-label">Prezzo Acquisto</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="prezzo_IN" name="prezzo_IN" placeholder="Inserire il prezzo di acquisto">
									</div>
								</div>

                            
                            
                            
                            
								<div class="form-group col-sm-11">
									<label for="prezzo_OUT" class="col-sm-2 col-lg-2 control-label">Prezzo Vendita</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="prezzo_OUT" name="prezzo_OUT" placeholder="Inserire il prezzo di vendita">
									</div>
								</div>
                            <div class="form-group col-sm-11">
									<label for="quantita" class="col-sm-2 col-lg-2 control-label">Quantita</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="quantita" name="quantita" placeholder="Inserire la quantita">
									</div>
								</div>
                            
						
                            
                        
                                    <div class="form-group col-sm-11">
									
  										<label for="userfile" class="col-sm-2 col-lg-2 control-label">Invia questo file: </label>
  										
  										<div class="col-sm-9">
  											<input name="fileToUpload" type="file">
                                            
                                        </div>
									</form>
								</div>
                            

								<!-- Button -->
								<div class="form-group col-sm-11">
									<div class="col-sm-9">
				                  	<button type="submit" class="btn btn-primary" id="conferma">Conferma</button>
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