
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
	</div>
</section>