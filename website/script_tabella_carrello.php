<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th colspan="4">
							Prodotto
						</th>
						<th>
							Prezzo
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							
							<?php
                				echo '<img class="img-rounded" src="'.$img_prodotto.'">';
            				?>
            				
						</td>
					
						<td colspan="3">
							Nome: <?php echo $nome_prodotto; ?><br>
							Prezzo: <?php echo $prezzo_prodotto; ?><br>
							Quantità: <?php echo $quantita_prodotto; ?>
						</td>
					
						<td>
							<br>
							<br>
							Totale: <?php $tot=$prezzo_prodotto*$quantita_prodotto; echo $tot ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-sm-1">
	</div>
</div>