<?php
    $nomeDB = "database_esposizione";
    $tabellaProdotti = "prodotti";
    $tabellaUtenti = "utenti";
    if ($db_creato == false) { // Questa variebile va settata prima di "require_once("connection.php");". 
                                //Di default è falso e verrà quindi creato il db
        echo "connessione no db";
        $connessione = new mysqli("localhost", "root", "");
    } else {
        $connessione = new mysqli("localhost", "root", "", $nomeDB);
    }
    if (mysqli_errno($connessione)) {
        printf("Oops, abbiamo problemi con la connessione al db: %s\n", mysqli_error($connessione));
        exit();
    } 
    
?>