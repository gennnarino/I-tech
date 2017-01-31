
<?php
session_start();
	if($stato=="RICHIESTA"){
		if($admin){
			echo'
				<form method="post" action="query_Ppreventivo.php" >
					<input type="input" hidden="TRUE" name="id" value="' .$id.'">
					<input type="input" hidden="TRUE" name="stato" value="ACCETTAZIONE">
            		<input type="text" name="prezzo">
            		<input type="submit" value="Invia preventivo">
           		</form>';
		}
		else{

		}
	}
	else if($stato=="ACCETTAZIONE"){
		if($admin){

		}
		else{
			echo'
				<form method="post" action="query_Ppreventivo.php" >
					<input type="input" hidden="TRUE" name="id" value="' .$id.'">
					<input type="input" hidden="TRUE" name="prezzo" value="' .$prezzo.'">
					<label class="radio-inline"><input type="radio" name="stato" value="ACCETTATO">Accetta</label>
						<label class="radio-inline"><input type="radio" name="stato" value="RIFIUTATO">Rifiuta</label>
            		
            		<input type="submit" value="OK">
           		</form>';
		}
	}
	else if($stato=="RIFIUTATO"){
		if($admin){

		}
		else{

		}
	}
	else if($stato=="ACCETTATO"){
		if($admin){
			echo'
				<form method="post" action="query_Ppreventivo.php" >
					<input type="input" hidden="TRUE" name="id" value="' .$id.'">
					<input type="input" hidden="TRUE" name="prezzo" value="' .$prezzo.'">
					<input type="input" hidden="TRUE" name="stato" value="RIPARAZIONE_IN_CORSO">
            		<input type="submit" value="Conferma riparazione in corso">
           		</form>';
		}
		else{

		}
	}
	else if($stato=="RIPARAZIONE_IN_CORSO"){
		if($admin){
			echo'
				<form method="post" action="query_Ppreventivo.php" >
					<input type="input" hidden="TRUE" name="id" value="' .$id.'">
					<input type="input" hidden="TRUE" name="prezzo" value="' .$prezzo.'">
					<input type="input" hidden="TRUE" name="stato" value="RIPARATO">
            		<input type="submit" value="Conferma riparazione effettuata">
           		</form>';
		}
		else{

		}
	}
	else if($stato=="RIPARATO"){
		if($admin){

		}
		else{

		}
	}
?>