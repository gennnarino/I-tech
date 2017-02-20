<?php
session_start(); 
include ("connessione.php");
include ("verifiche.php");
$nome=strip_tags($_POST['nome']);
$cognome=strip_tags($_POST['cognome']);
$indirizzo=strip_tags($_POST['indirizzo']);
$cf=strip_tags(strtoupper ($_POST['cf']));
$telefono=strip_tags($_POST['telefono']);
$mail=strip_tags($_POST['mail']);
$pass=strip_tags($_POST['pass']);

$count_pass = strlen($pass);





if($nome!=null && $cognome!=null && $indirizzo!=null && $cf!=null && $telefono!=null && $mail!=null && $pass!=null){
	if(codiceFiscale($cf)){
		if(is_numeric($telefono)){
			if(chkEmail($mail)){
				if($count_pass>6){  
					$query = "SELECT email , cf  FROM cliente WHERE  email = '$mail' OR cf='$cf'"; 
                    $ris =mysqli_query($connessione,$query);
                    
                    if(mysqli_num_rows($ris) == 0){      
                 	
						$query = "INSERT INTO cliente (nome,cognome,indirizzo,cf,telefono,email,passw) VALUES ('$nome', '$cognome','$indirizzo','$cf',$telefono,'$mail','$pass')"; 

						if (mysqli_query ($connessione,$query)) {
                        	echo '<script language=javascript>alert("UTENTE REGISTRATO")</script>';
							echo '<script language=javascript>document.location.href="index.php"</script>';
						}
                    } 
                    else {
                        echo '<script language=javascript>alert("UTENTE ESISTENTE")</script>';
    					echo '<script language=javascript>document.location.href="registrazione.php"</script>';
	   				}
				}
				else{
					echo '<script language=javascript>alert("Password non corretta, deve contenere almeno 6 caratteri fino ad un massimo di 10")</script>';
					echo '<script language=javascript>document.location.href="registrazione.php"</script>';
				}
				
			}
			else{
				echo '<script language=javascript>alert("Email non corretta")</script>';
				echo '<script language=javascript>document.location.href="registrazione.php"</script>';
			}
			
		}
		else{
			echo '<script language=javascript>alert("Numero di telefono non corretto")</script>';
			echo '<script language=javascript>document.location.href="registrazione.php"</script>';
		}
	
	}
	else{
		echo '<script language=javascript>alert("Codice fiscale non corretto")</script>';
		echo '<script language=javascript>document.location.href="registrazione.php"</script>';
	}
}
else{
	echo '<script language=javascript>alert("Per la registrazione sono obbligatori tutti i dati")</script>';
	echo '<script language=javascript>document.location.href="registrazione.php"</script>';
}




?>