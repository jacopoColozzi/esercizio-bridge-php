<?php
    $nomeDB = "lweb8";
    $tabellaProdotti = "prodotti";
    $tabellaUtenti = "utenti";
    $tabellaFrutta = "frutta";
    $tabellaFiori = "fiori";
    $utente = "lweb8";
    $password = "lweb8";

    if ($db_da_creare == true) { // Questa variebile va settata prima di "require_once("connection.php");". 
                                //Di default è falso e verrà quindi non creato il db
        echo "Creo il database...<br />";
        $connessione = new mysqli("localhost", $utente , $password);
    } else {
        $connessione = new mysqli("localhost", $utente , $password, $nomeDB);
    }
    if (mysqli_errno($connessione)) {
        printf("Oops, abbiamo problemi con la connessione al db: %s\n", mysqli_error($connessione));
        exit();
    } 
?>
