<?  
    include ("connessione.php");

    $scelta;
    if($prod==0){
        $scelta="Smartphone";
    }
    else{
        $scelta="Computer";
    }

    $query = "SELECT * FROM prodotto WHERE categoria='$scelta'";

    $ris =mysqli_query($connessione,$query);
    $quanti = mysqli_num_rows($ris);
    if ($quanti == 0)
    {
	  echo '<script language=javascript>alert("Nessun Prodotto in questa categoria")</script>';
	echo '<script language=javascript>document.location.href="home.php"</script>';

    }
    else
    {
        while ($row = mysqli_fetch_assoc($ris)) {
            $marca=$row["marca"];
            $modello=$row["modello"];
            $prezzo_OUT=$row["prezzo_OUT"];
            $prezzo_IN=$row["prezzo_IN"];
            $temp_quantita=$row["quantita"];
            $immagine=$row["immagine"];
            $descrizione=$row["descrizione"];
            $categoria=$row["categoria"];
            if($quantita>0){
                include("script_tabella_prodotti.php");
            }
        }       
    }

    mysqli_close($connessione);
?>