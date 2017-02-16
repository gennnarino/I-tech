
<section id="tabella prodotti">
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
            <?php
                echo '<img class="img-responsive img-resize" src="' .$immagine. '">';
            ?>
			
		</div>
		<div class="col-sm-2">
		</div>
	</div>

	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="table-responsive col-sm-10">
			<table class="table">
    			<tr>		
    				<th>Marca</th>  	
    			  	<td>
    			  		<?php
                            echo $marca;
                        ?>
    			  	</td>
    			  	<td></td>
    			</tr>
    			<tr>		
    				<th>Modello</th>  	
    			  	<td>
    			  		<?php
                            echo $modello;
                        ?>
    			  	</td>
    			  	<td></td>
    			</tr>
                <?php
                    if($Admin){
                        echo    '<tr>       
                                    <th>Prezzo acquisto</th>   
                                    <td>
                                        '.$prezzo_IN.' ,00 €
                                    </td>
                                    <td>
                        
                                    </td>
                                </tr>';
                         echo    '<tr>       
                                    <th>Venduti</th>   
                                    <td>
                                        '.$venduti.'
                                    </td>
                                    <td>
                        
                                    </td>
                                </tr>';
                    }
                
                ?>
    			<tr>		
    				<th>Prezzo</th>  	
    			  	<td>
    			  		<?php
                            echo $prezzo_OUT.',00 €';
                        ?>
    			  	</td>
    			  	<td></td>
    			</tr>
    			<tr>		
    				<th>Quantità</th>  	
    			  	<td>
    			  		<?php
                            echo $quantita;
                        ?>
    			  	</td>
    			  	<td>
    			  		
    			  	</td>
    			</tr>
                
    			<tr>
                    <td></td>		
    				<th colspan="3" class="thdescription">Descrizione sintetica del prodotto</th>
    			</tr>
			</table>
        
            <p>
                <?php
                    echo $descrizione;
                ?>
            </p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        
        <?php
            if($log && !$Admin){
        ?>
            <div class="col-sm-10">
                <form id="carrello-form" class="form-inline" method="POST" action="query_carrello.php">
                    <input hidden="true" type="text" name="idP" value= <?php echo '"'.$idP.'"' ?> >
                    <input hidden="true" type="text" name="modello" value= <?php echo '"'.$modello.'"' ?> >
                    <input type="text" class="form-control" name="quantita" placeholder="1">
                    <input hidden="true" type="text" name="n_prodotti" value= <?php echo '"'.$quantita.'"' ?> >
                    <input hidden="true" type="text" name="prezzo" value= <?php echo '"'.$prezzo_OUT.'"' ?> >
                    <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi al carrello
                    </button>
                </form>
            </div>
        <?php 
            }
            else if(!$log){
                echo    '<form id="carrello-form" class="form-inline" method="POST" action="registrazione.php">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-shopping-cart"></span>   Registrati per acquistare
                            </button>
                        </form>';
            }
        ?>
            
        <div class="col-sm-1"></div>
    </div>

    <?php
        if($Admin && $magazzino==1){
    ?>
        <p>
            <?php echo ''.$categoria.'' ?>
        </p>
                    <form id="aggiungi-form" class="form-inline" method="POST" action="query_aggiorna_quantita.php">
                        <input hidden="true" type="text" name="idP" value= <?php echo '"'.$idP.'"' ?> >
                        <input hidden="true" type="text" name="n_prodotti" value= <?php echo '"'.$quantita.'"' ?> >
                        <input type="text" class="form-control" name="quantita" placeholder="1">
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi prodotti
                        </button>
                    </form>
    <?php
        }       
    ?>

    <?php
        if($Admin && $magazzino==1){
    ?>
                    <form id="aggiungi-form" class="form-inline" method="POST" action="query_aggiorna_prezzo.php">
                        <input hidden="true" type="text" name="idP" value= <?php echo '"'.$idP.'"' ?> >
                        <input type="text" class="form-control" name="prezzo_mod" placeholder="1">
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-shopping-cart"></span>   Modifica prezzo
                        </button>
                    </form>
    <?php
        }       
    ?>
            
	<div class="row">
        <div class="table-responsive col-sm-12">
            <table class="table">
                <tr>        
                    <th></th>      
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</section>
