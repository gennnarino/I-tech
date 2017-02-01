
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
		<div class="col-sm-2">
		</div>
		<div class="table-responsive col-sm-7">
			<table class="table">
    			<tr>		
    				<th>Numero ordine</th>  	
    			  	<td>
    			  		<?php
                       echo $idO;
                        
                        ?>
    			  	</td>
    			</tr>
    			<tr>		
    				<th>Data ordine</th>  	
    			  	<td>
    			  		<?php
                            echo $data;
                        ?>
    			  	</td>
    			</tr>
    			<tr>		
    				<th>Stato ordine</th>  	
    			  	<td>
    			  		<?php
                            echo $stato;
                        ?>
    			  	</td>
    			</tr>
    			<tr>		
    				<th>Prezzo totale</th>  	
    			  	<td>
    			  		<?php
                            echo $prezzo_tot;
                        ?>
    			  	</td>
    			</tr>
			</table>
		</div>
		<div class="col-sm-3"></div>
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