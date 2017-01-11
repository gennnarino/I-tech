<?  
    include ("connessione.php");

    $query = "SELECT * FROM cliente WHERE email = '$mail' AND passw = '$pass' ";

    $ris =mysqli_query($connessione,$query);
    echo $query.'<br>';
    echo $mail.'<br>';
    echo $pass.'<br>';
    $quanti = mysqli_num_rows($ris);
    echo $quanti;
    if ($quanti == 0)
    {
        echo "Nessun record!";
    }
    else   {
            $rs = mysqli_fetch_assoc($query);
            $cf = $rs["cf"];
        echo $cf;
            $nome = $rs['nome'];
            $cognome = $rs['cognome'];
            $indirizzo = $rs['indirizzo'];
            $telefono = $rs['telefono'];
        
    }
    mysqli_close($connessione);
?>