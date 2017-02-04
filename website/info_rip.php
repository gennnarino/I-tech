<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<img class="img-responsive" src="assets/img/inforip/rip1.png">
		</div>
		<div class="col-sm-6">
			<p class="text-info text-center">
				<br><br><br>
				Hai rotto il tuo Smartphone o Tablet? Noi lo ripariamo.<br>
				Riparazione in tutta Italia con ritiro e consegna a soli € 8,90<br>
				Riparazioni Garantite 6 mesi.
			</p>
			<div class="col-sm-2"></div>
			<div class="col-sm-7">
			<?php
				if(!$log){
                	echo    '<form id="carrello-form" class="form-inline" method="POST" action="registrazione.php">
                    	        <button type="submit" class="btn btn-success">
                        	        <span class="glyphicon glyphicon-shopping-cart"></span>   Registrati per richiedere un preventivo gratuito
                            	</button>
                        	</form>';
           		}
           	?>
           	</div>
           	<div class="col-sm-3"></div>
		</div>
		<div class="col-sm-3">
			<img class="img-responsive" src="assets/img/inforip/rip2.jpg">
		</div>
	</div>
</div>