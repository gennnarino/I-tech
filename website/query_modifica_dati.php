<?php
	session_start();
	include ("connessione.php");
	$admin=$_SESSION['admin'];
	$to_do=$_GET['mod'];

	if(!$admin){
		$cf=$_POST['cf'];
	}
	else{
		$email=$_POST['mail'];
	}
	

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
		$_SESSION['username']=$modifica;
		echo '<script language=javascript>alert("Mail modificata correttamente")</script>';
		echo '<script language=javascript>document.location.href="utente.php"</script>';
	}
	//modifica password
	else if($to_do==3){
		$modifica=$_POST['nuovo_pass'];
		$query = "UPDATE cliente SET passw='$modifica' WHERE cf='$cf'";
		$ris =mysqli_query($connessione,$query);
		mysqli_close($connessione);
		$_SESSION['password']=$modifica;
		echo '<script language=javascript>alert("Password modificata correttamente")</script>';
		echo '<script language=javascript>document.location.href="utente.php"</script>';
	}

	//modifica mail admin
	else if($to_do==4){
		$modifica=$_POST['nuovo_mailA'];
		$query = "UPDATE admin SET email='$modifica' WHERE email='$email'";
		echo $query;
		$ris =mysqli_query($connessione,$query);
		mysqli_close($connessione);
		$_SESSION['username']=$modifica;
		echo '<script language=javascript>alert("Mail modificata correttamente")</script>';
		echo '<script language=javascript>document.location.href="admin.php"</script>';
	}
	//modifica pass admin
	else if($to_do==5){
		$modifica=$_POST['nuovo_passA'];
		$query = "UPDATE admin SET passw='$modifica' WHERE email='$email'";
		$ris =mysqli_query($connessione,$query);
		mysqli_close($connessione);
		$_SESSION['password']=$modifica;
		echo '<script language=javascript>alert("Password modificata correttamente")</script>';
		echo '<script language=javascript>document.location.href="admin.php"</script>';
	}
	
?>