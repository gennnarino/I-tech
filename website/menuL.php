<?php
	session_start();
	$log=$_SESSION['loggato'];
	$Admin=$_SESSION['admin'];
?>
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
							<li>
								<?php
									if(!$Admin){
										echo"<a href=\"acquisti.php\">Acquisti</a>";
									}
									else{
										echo"<a href=\"magazzino.php\">Magazzino</a>";
									}
								?>
							</li>
							<!-- FINE Verifica se admin o cliente -->

							<!-- Menu utenti -->
							<?php
								if($Admin){
									echo"<li>
											<a href=\"utenti.php?rip=2\">Utenti</a>
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