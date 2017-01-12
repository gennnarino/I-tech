
			<!-- Form prodotto -->
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
			<!-- FINE Form prodotto -->
