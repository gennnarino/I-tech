
<section id="tabella prodotti">
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
            <?php
                echo '<img class="img-responsive" src="' .$immagine. '">';
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
                                        '.$prezzo_IN.'
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
                            echo $prezzo_OUT;
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
                <form id="carrello-form" class="form-inline" method="POST" action="prodotti.php">
                    <input type="text" class="form-control" name="inputQuantita" placeholder="1">
                    <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-shopping-cart"></span>   Aggiungi al carrello
                    </button>
                </form>
            </div>
        <?php 
            }
        ?>
            
        <div class="col-sm-1"></div>
    </div>

    <?php
        if($Admin){
            echo    '<p>
                        '.$categoria.'
                    </p>';
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
