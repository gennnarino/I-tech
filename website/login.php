<?php
session_start(); 

include ("connessione.php");
include ("verifiche.php");
$user=strip_tags($_POST['mail']);
$pass=strip_tags($_POST['pass']);

if($user!=null && $pass!=null){
	if(chkEmail($user)){
		$query = "SELECT * FROM admin WHERE email = '$user' AND passw = '$pass' ";
		$ris =mysqli_query($connessione,$query);
		if(mysqli_num_rows($ris) == 1){
			$_SESSION['username'] = $user;
			$_SESSION['admin'] = true;
			$_SESSION['loggato'] = true;
			$_SESSION['password'] = $pass;
			echo '<script language=javascript>document.location.href="home.php"</script>';  
		} 
		else{
			$queryy = "SELECT * FROM cliente WHERE email = '$user' AND passw = '$pass' ";
			$riss =mysqli_query($connessione,$queryy);
			if(mysqli_num_rows($riss) == 1){
	 			$_SESSION['username'] = $user;
		 		$_SESSION['admin'] = false;
				$_SESSION['loggato'] = true;
				$_SESSION['password'] = $pass;
		        setcookie("carrello", "", time()+3600);

				echo '<script language=javascript>document.location.href="home.php"</script>';  
			}
			else{
				echo '<script language=javascript>alert("Nome utente o password errata, riprovare o contattare l\'amministratore per il recupero")</script>';
				echo '<script language=javascript>document.location.href="index.php"</script>';
			}
		}
	}
	else{
		echo '<script language=javascript>alert("La mail inserita non è valida")</script>';
		echo '<script language=javascript>document.location.href="index.php"</script>';
	}
	
	mysqli_close($connessione);
}
else{
	mysqli_close($connessione);
	echo '<script language=javascript>alert("I campi non possono essere lasciati vuoti")</script>';
	echo '<script language=javascript>document.location.href="index.php"</script>';
}

?>
