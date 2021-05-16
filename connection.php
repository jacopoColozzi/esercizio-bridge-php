<?php
    $nomeDB = "database_esposizione";
    $tabellaProdotti = "prodotti";
    $tabellaUtenti = "utenti";
    $tabellaFrutta = "frutta";
    $tabellaFiori = "fiori";
    
    if ($db_da_creare == true) { // Questa variebile va settata prima di "require_once("connection.php");". 
                                //Di default è falso e verrà quindi non creato il db
        echo "Creo il database...<br />";
        $connessione = new mysqli("localhost","root", "");
    } else {
        $connessione = new mysqli("localhost","root", "", $nomeDB);
    }
    if (mysqli_errno($connessione)) {
        printf("Oops, abbiamo problemi con la connessione al db: %s\n", mysqli_error($connessione));
        exit();
    } 
    
?>