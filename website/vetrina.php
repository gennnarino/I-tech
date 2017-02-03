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
										echo 	'<form id="carrello-form" class="form-inline" method="POST" action="query_carrello.php">
													<input hidden="true" type="text" name="n_prodotti" value="2" >
                    								<input hidden="true" type="text" name="idP" value="30" >
                    								<input hidden="true" type="text" name="modello" value="Ricondizionato">
                    								<input hidden="true" type="number" name="quantita" value="1">
                    								<input hidden="true" type="text" name="prezzo" value="399">
                    								<button type="submit" class="btn btn-success">
                        								<span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi al carrello
                    								</button>
                								</form>'; 
										}
										else{
											echo 	'<form id="carrello-form" class="form-inline" method="POST" action="registrazione.php">
														<button type="submit" class="btn btn-success">
                        									<span class="glyphicon glyphicon-shopping-cart"></span>   Registrati per acquistare
                    									</button>
                									</form>';
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
										echo 	'<form id="carrello-form" class="form-inline" method="POST" action="query_carrello.php">
                    								<input hidden="true" type="text" name="n_prodotti" value="2" >
                    								<input hidden="true" type="text" name="idP" value="29" >
                    								<input hidden="true" type="text" name="modello" value="Game Extreme On">
                    								<input hidden="true" type="number" name="quantita" value="1">
                    								<input hidden="true" type="text" name="prezzo" value="1199">
                    								<button type="submit" class="btn btn-success">
                        								<span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi al carrello
                    								</button>
                								</form>'; 
										}
										else{
											echo 	'<form id="carrello-form" class="form-inline" method="POST" action="registrazione.php">
														<button type="submit" class="btn btn-success">
                        									<span class="glyphicon glyphicon-shopping-cart"></span>   Registrati per acquistare
                    									</button>
                									</form>';
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
								Ottimo tablet Samsung Tab 3:<br>
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
										echo 	'<form id="carrello-form" class="form-inline" method="POST" action="query_carrello.php">
                    								<input hidden="true" type="text" name="n_prodotti" value="2">
                    								<input hidden="true" type="text" name="idP" value="28" >
                    								<input hidden="true" type="text" name="modello" value="Tab 3">
                    								<input hidden="true" type="number" name="quantita" value="1">
                    								<input hidden="true" type="text" name="prezzo" value="199">
                    								<button type="submit" class="btn btn-success">
                        								<span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi al carrello
                    								</button>
                								</form>'; 
										}
										else{
											echo 	'<form id="carrello-form" class="form-inline" method="POST" action="registrazione.php">
														<button type="submit" class="btn btn-success">
                        									<span class="glyphicon glyphicon-shopping-cart"></span>   Registrati per acquistare
                    									</button>
                									</form>';
										}
							?>
						</div>
					</div>
					<!-- FINE Terza offerta-->

				</div>
			</section>
			<!-- FINE Offerte in evidenza -->