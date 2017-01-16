
<?php
session_start();
	if($stato=="RICHIESTA"){
		if($admin){
			echo'
				<form method="post" action="query_Ppreventivo.php" >
					<input type="input" hidden="TRUE" name="id" value="' .$id.'">
					<input type="input" hidden="TRUE" name="stato" value="ACCETTAZIONE">
            		<input type="text" name="prezzo">
            		<input type="submit" value="Submit">
           		</form>';
		}
		else{

		}
	}
	else if($stato=="ACCETTAZIONE"){
		if($admin){

		}
		else{

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

		}
		else{

		}
	}
	else if($stato=="RIPARAZIONE_IN_CORSO"){
		if($admin){

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