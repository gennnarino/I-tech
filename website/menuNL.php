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
										<a href="riparazioni.php?rip=1">Info riparazioni</a>
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
											<input type="text" class="form-control" id="mail" name="mail" placeholder="Username">
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

							<li>
								<form action="registrazione.php" class="form-inline">
									<div class="form-group">
										<button type="submit" class="btn btn-primary" id="registrazione">Registrati</button>
									</div>
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