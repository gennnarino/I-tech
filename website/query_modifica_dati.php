<?php
	session_start();
	include ("connessione.php");
	include ("verifiche.php");
	$admin=$_SESSION['admin'];
	$to_do=strip_tags($_GET['mod']);

	if(!$admin){
		$cf=strip_tags($_POST['cf']);
	}
	else{
		$email=strip_tags($_POST['mail']);
	}
	

	//modifica indirizzo
	if($to_do==0){

		$modifica=strip_tags($_POST['nuovo_indirizzo']);
		if($modifica!=null){
			$query = "UPDATE cliente SET indirizzo='$modifica' WHERE cf='$cf'";
			$ris =mysqli_query($connessione,$query);
			mysqli_close($connessione);
			echo '<script language=javascript>alert("Indirizzo modificato correttamente")</script>';
			echo '<script language=javascript>document.location.href="utente.php"</script>';
		}
		else{
			echo '<script language=javascript>alert("Indirizzo non valido")</script>';
			echo '<script language=javascript>document.location.href="utente.php"</script>';
		}
		
	}
	//modifica telefono
	else if($to_do==1){
		$modifica=strip_tags($_POST['nuovo_telefono']);
		if($modifica!=null && is_numeric($modifica)){
			$query = "UPDATE cliente SET telefono='$modifica' WHERE cf='$cf'";
			$ris =mysqli_query($connessione,$query);
			mysqli_close($connessione);
			echo '<script language=javascript>alert("Telefono modificato correttamente")</script>';
			echo '<script language=javascript>document.location.href="utente.php"</script>';
		}
		else{
			echo '<script language=javascript>alert("Numero di telefono non valido")</script>';
			echo '<script language=javascript>document.location.href="utente.php"</script>';
		}
	}
	//modifica mail
	else if($to_do==2){
		$modifica=strip_tags($_POST['nuovo_mail']);
		if(chkEmail($modifica)){
			$query = "UPDATE cliente SET email='$modifica' WHERE cf='$cf'";
			$ris =mysqli_query($connessione,$query);
			mysqli_close($connessione);
			$_SESSION['username']=$modifica;
			echo '<script language=javascript>alert("Mail modificata correttamente")</script>';
			echo '<script language=javascript>document.location.href="utente.php"</script>';
		}
		else{
			echo '<script language=javascript>alert("Indirizzo mail non valido")</script>';
			echo '<script language=javascript>document.location.href="utente.php"</script>';
		}
		
	}
	//modifica password
	else if($to_do==3){
		$modifica=strip_tags($_POST['nuovo_pass']);
		$conteggio=strlen($modifica);
		if($conteggio>5){
			$query = "UPDATE cliente SET passw='$modifica' WHERE cf='$cf'";
			$ris =mysqli_query($connessione,$query);
			mysqli_close($connessione);
			$_SESSION['password']=$modifica;
			echo '<script language=javascript>alert("Password modificata correttamente")</script>';
			echo '<script language=javascript>document.location.href="utente.php"</script>';
		}
		else{
			echo '<script language=javascript>alert("La password inserita contiene meno di sei caratteri")</script>';
			echo '<script language=javascript>document.location.href="utente.php"</script>';
		}
	}

	//modifica mail admin
	else if($to_do==4){
		$modifica=strip_tags($_POST['nuovo_mailA']);
		if(chkEmail($modifica)){
			$query = "UPDATE admin SET email='$modifica' WHERE email='$email'";
			echo $query;
			$ris =mysqli_query($connessione,$query);
			mysqli_close($connessione);
			$_SESSION['username']=$modifica;
			echo '<script language=javascript>alert("Mail modificata correttamente")</script>';
			echo '<script language=javascript>document.location.href="admin.php"</script>';
		}
		else{
			echo '<script language=javascript>alert("Indirizzo mail non valido")</script>';
			echo '<script language=javascript>document.location.href="admin.php"</script>';
		}
	}
	//modifica pass admin
	else if($to_do==5){
		$conteggio=strlen($modifica);
		if($conteggio>5){
			$modifica=strip_tags($_POST['nuovo_passA']);
			$query = "UPDATE admin SET passw='$modifica' WHERE email='$email'";
			$ris =mysqli_query($connessione,$query);
			mysqli_close($connessione);
			$_SESSION['password']=$modifica;
			echo '<script language=javascript>alert("Password modificata correttamente")</script>';
			echo '<script language=javascript>document.location.href="admin.php"</script>';
		}
		else{
			echo '<script language=javascript>alert("La password inserita contiene meno di sei caratteri")</script>';
			echo '<script language=javascript>document.location.href="admin.php"</script>';
		}
	}
	
?>