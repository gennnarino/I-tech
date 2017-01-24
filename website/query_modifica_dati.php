<?php
	include ("connessione.php");
	$to_do=$_GET['mod'];
	$cf=$_POST['cf'];
	//modifica indirizzo
	if($to_do==0){
		$modifica=$_POST['nuovo_indirizzo'];
		$query = "UPDATE cliente SET indirizzo='$modifica' WHERE cf='$cf'";
		$ris =mysqli_query($connessione,$query);
		mysqli_close($connessione);
		echo '<script language=javascript>alert("Indirizzo modificato correttamente")</script>';
		echo '<script language=javascript>document.location.href="utente.php"</script>';
	}
	//modifica telefono
	else if($to_do==1){
		$modifica=$_POST['nuovo_telefono'];
		$query = "UPDATE cliente SET telefono='$modifica' WHERE cf='$cf'";
		$ris =mysqli_query($connessione,$query);
		mysqli_close($connessione);
		echo '<script language=javascript>alert("Telefono modificato correttamente")</script>';
		echo '<script language=javascript>document.location.href="utente.php"</script>';
	}
	//modifica mail
	else if($to_do==2){
		$modifica=$_POST['nuovo_mail'];
		$query = "UPDATE cliente SET email='$modifica' WHERE cf='$cf'";
		$ris =mysqli_query($connessione,$query);
		mysqli_close($connessione);
		echo '<script language=javascript>alert("Mail modificata correttamente")</script>';
		echo '<script language=javascript>document.location.href="utente.php"</script>';
	}
	//modifica password
	else if($to_do==3){
		$modifica=$_POST['nuovo_pass'];
		$query = "UPDATE cliente SET passw='$modifica' WHERE cf='$cf'";
		$ris =mysqli_query($connessione,$query);
		mysqli_close($connessione);
		echo '<script language=javascript>alert("Password modificata correttamente")</script>';
		echo '<script language=javascript>document.location.href="utente.php"</script>';
	}
	
?>