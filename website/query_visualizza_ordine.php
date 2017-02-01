<?  
include ("connessione.php");
$utente=$_SESSION['username'];

$query = "SELECT cf FROM cliente WHERE email = '$utente' ";
$ris= mysqli_query ($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$cf = $rs['cf'];

  $queryyy = mysqli_query($connessione,"SELECT * FROM ordine where cf = '$cf' ");
            while($ciclo=mysqli_fetch_assoc($queryyy)){
            
                  $idO = $ciclo[idO];
                  $data = $ciclo[data];
                  $stato = $ciclo[stato];
                  $prezzo_tot = $ciclo[prezzo_tot];
                  include("script_tabella_storico.php");
                  }
             } 
  mysqli_close($connessione);      

?>