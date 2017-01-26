<?php
session_start(); 
include ("connessione.php");

$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$indirizzo=$_POST['indirizzo'];
$cf=$_POST['cf'];
$telefono=$_POST['telefono'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];

$count_cf = strlen($cf);

function chkEmail($email)
{
	// elimino spazi, "a capo" e altro alle estremità della stringa
	$email = trim($email);

	// se la stringa è vuota sicuramente non è una mail
	if(!$email) {
		return false;
	}

	// controllo che ci sia una sola @ nella stringa
	$num_at = count(explode( '@', $email )) - 1;
	if($num_at != 1) {
		return false;
	}

	// controllo la presenza di ulteriori caratteri "pericolosi":
	if(strpos($email,';') || strpos($email,',') || strpos($email,' ')) {
		return false;
	}

	// la stringa rispetta il formato classico di una mail?
	if(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) {
		return false;
	}

	return true;
}

if($nome!=null && $cognome!=null && $indirizzo!=null && $cf!=null && $telefono!=null && $mail!=null && $pass!=null){
	if($count_cf==16){
		if(is_numeric($telefono)){
			if(chkEmail($mail)){
				if($count_pass>6 && $count_pass<11){
					$query = "INSERT INTO cliente (nome,cognome,indirizzo,cf,telefono,email,passw)
					VALUES ('$nome', '$cognome','$indirizzo','$cf',$telefono,'$mail','$pass')"; 

					if (mysqli_query ($connessione,$query)) {
						echo '<script language=javascript>document.location.href="index.php"</script>';
					}
					else {
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