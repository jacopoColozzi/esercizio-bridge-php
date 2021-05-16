<?php
    $nomeDB = "database_esposizione";
    $tabellaProdotti = "prodotti";
    $tabellaUtenti = "utenti";
    $tabellaFrutta = "frutta";
    $tabellaFiori = "fiori";
    
    if ($db_da_creare == true) { // Questa variebile va settata prima di "require_once("connection.php");". 
                                //Di default è falso e verrà quindi creato il db
        echo "connessione no db";
        $connessione = new mysqli("localhost","phpmyadmin", "7Tonnerres", $nomeDB);
    } else {
        $connessione = new mysqli("localhost","phpmyadmin", "7Tonnerres", $nomeDB);
    }
    if (mysqli_errno($connessione)) {
        printf("Oops, abbiamo problemi con la connessione al db: %s\n", mysqli_error($connessione));
        exit();
    } 
    
?>