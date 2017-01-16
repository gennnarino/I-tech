
<section id="tabella prodotti">
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<img class="img-responsive" src=""><!-- Inserire variabile con percorso img-->
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1">
		</div>
        <form method="post" action="query_Ppreventivo.php" >
		<div class="table-responsive col-sm-10">
			<table class="table">
    			<tr>		
    				<th>ID</th>  	
    			  	<td>
    			  		<?php
                       echo $id;
                        echo '<input type="input" hidden="TRUE" name="id" value="' .$id.'">';
                        ?>
    			  	</td>
    			  	<td></td>
    			</tr>
    			<tr>		
    				<th>Prezzo</th>  	
    			  	<td>
    			  		<?php
                            echo $prezzo;
                        ?>
    			  	</td>
    			  	<td></td>
    			</tr>
    			<tr>		
    				<th>Stato</th>  	
    			  	<td>
    			  		<?php
                            echo $stato;
                        ?>
    			  	</td>
    			  	<td></td>
    			</tr>
    			<tr>		
    				<th>Cliente</th>  	
    			  	<td>
    			  		<?php
                            echo $cliente;
                        ?>
    			  	</td>
    			  	<td>
    			  		
    			  	</td>
    			</tr>
    			<tr>
                    <td></td>		
    				<th colspan="3" class="thdescription">Descrizione  del Problema</th>
    			</tr>
			</table>

            <p>
                <?php
                    echo $descrizione;
                ?>
                
            </p>
            
                    
		</div>
            <?php
            if ($admin==true and $stato=="RICHIESTA"){
            echo '<input type="text" name="prezzo" >';
            echo '<input type="submit" value="Submit">';
            }
           ?>
		<div class="col-sm-1">
            
		</div>
          
       
        </form>
        
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