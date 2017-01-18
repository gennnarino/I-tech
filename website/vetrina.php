<?php
	session_start();
	$log=$_SESSION['loggato'];
	$Admin=$_SESSION['admin'];	
?>
<!-- Offerte in evidenza -->
			<section id="offerte-in-evidenza">
				<div class="row">

					<!-- Prima offerta -->
					<div class="col-sm-4">
						<div class="box-offerta">
							<h3>
								<strong>Postazione pc completa</stong>
							</h3>
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
							<!--iinserire un carattere piu bello, togliere il blu-->
							<?php
								if($log && !$Admin){
										echo 	'<a href="#" class="btn btn-primary btn-large btn-block">
													<span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi al carrello
												</a>'; 
										}
							?>
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
							<?php
								if($log && !$Admin){
										echo 	'<a href="#" class="btn btn-primary btn-large btn-block">
													<span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi al carrello
												</a>'; 
										}
							?>
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
							<?php
								if($log && !$Admin){
										echo 	'<a href="#" class="btn btn-primary btn-large btn-block">
													<span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi al carrello
												</a>'; 
										}
							?>
						</div>
					</div>
					<!-- FINE Terza offerta-->

				</div>
			</section>
			<!-- FINE Offerte in evidenza -->