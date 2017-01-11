<?  
    include ("connessione.php");

    $query = "SELECT * FROM cliente WHERE email = '$mail' AND passw = '$pass' ";

    $ris =mysqli_query($connessione,$query);
    echo $query.'<br>';
    echo $mail.'<br>';
    echo $pass.'<br>';
    $quanti = mysqli_num_rows($ris);

    if ($quanti == 0)
    {
        echo "Nessun record!";
    }
    else
    {
        for($x=0; $x<$quanti; $x++)
        {
            $rs = mysqli_fetch_row($query);
            $cf = $rs[0];
            $nome = $rs[1];
            $cognome = $rs[2];
            $indirizzo = $rs[3];
            $telefono = $rs[6];
        }
    }
    mysqli_close($connessione);
?>