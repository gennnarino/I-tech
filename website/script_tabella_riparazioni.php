
<section id="tabella riparazioni">
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
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
    				<th>ID</th>  	
    			  	<td>
    			  		<?php
                       echo $id;
                        
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
    				<th colspan="3" class="thdescription">Descrizione del problema</th>
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
            <div class="col-sm-2">
            </div>
        
            <div class="col-sm-9">
                <?php
                    include ("stato_richiesta.php");
                ?>
            </div>
            <div class="col-sm-1">
            
            </div>
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