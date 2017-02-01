
<!-- Header e barra di navigazione -->
		<header>
			<!-- Barra di navigazione -->
			<nav class="navbar navbar-default navbar-fixed-top">
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
						<a class="navbar-brand" href="home.php">I-Tech</a>
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
										<?php
											if(!$Admin){
												echo"<a href=\"riparazioni.php?rip=0\">Richiesta riparazione</a>";
											}
										?>
									</li>
									<li>
										<?php
											if(!$Admin){
												echo"<a href=\"riparazioni.php?rip=1\">Info riparazioni</a>";
											}
										?>
									</li>
									<li>
										<?php
											if($Admin){
												echo"<a href=\"riparazioni.php?rip=2\">Richieste di riparazione</a>";
											}
										?>
									</li>
									<li>
										<?php
											if(!$Admin){
												echo"<a href=\"riparazioni.php?rip=3\">Le mie riparazioni</a>";
											}
										?>
									</li>
								</ul>
								<!-- FINE Item menù riparazioni -->
							</li>
							<!-- FINE Menù riparazioni -->

							<!-- Verifica se admin o cliente -->
							<li class="dropdown">
								<?php
									if(!$Admin){
										echo	'<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													Acquisti<span class="caret"></span>
												</a>
												<!-- Item menù prodotti -->
												<ul class="dropdown-menu">
													<li>
														<a href="acquisti.php?acq=1">Storico acquisti</a>
													</li>';
													if($_COOKIE["carrello"]!=null){
														echo '<li>
																<a href="acquisti.php?acq=0">Carrello</a>
															</li>';
													}
										echo	'		</ul>';
									}
									else{
										echo'<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											Magazzino<span class="caret"></span>
											</a>
											<!-- Item menù prodotti -->
											<ul class="dropdown-menu">
												<li>
													<a href="magazzino.php?mag=0">Inserisci prodotti</a>
												</li>
												<li>
													<a href="magazzino.php?mag=1">Visualizza magazzino</a>
												</li>
											</ul>';
									}
								?>
							</li>
							<!-- FINE Verifica se admin o cliente -->

							<!-- Menu utenti -->
							<?php
								if($Admin){
									echo"<li>
											<a href=\"utenti.php?\">Utenti</a>
										</li>";
								}
							?>
							<!-- FINE Menu utenti -->

							<!-- Accesso e registrazione-->
							<li>
								<?php
									if(!$Admin){
										echo"<a href=\"utente.php\">Area Utente</a>";
									}
									else{
										echo"<a href=\"admin.php\">Area Utente</a>";
									}
								?>
							</li>

							<!-- Contatti -->
							<?php
								if(!$Admin){
									echo"<li>
											<a href=\"contatti.php?rip=2\">Contatti</a>
										</li>";
								}
							?>
							<!-- FINE Contatti -->

							<!-- Logout -->
							<li>
								<a href="logout.php">Logout</a>
							</li>
							<!-- FINE Logout -->

						</ul>
						<!-- FINE Lista per il menù -->
					</div><!-- /.nav-collapse -->
					<!-- FINE Barra dei menù-->
				</div>
			</nav><!-- /.navbar -->
		</header><!-- /header -->
		<br><br>