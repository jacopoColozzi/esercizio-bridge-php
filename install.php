<?php
    $nomeDB = "database_esposizione";
    $connessione = new mysqli("localhost", "root", "");

    if (mysqli_errno($connessione)) {
        printf("Oops, abbiamo problemi con la connessione al db: %s\n", mysqli_error($connessione));
        exit();
    }

    $queryCreazioneDatabase = "CREATE DATABASE $nomeDB";
    if ($connessione->mysqli_query($queryCreazioneDatabase)) {
        printf("Database creato ...\n");
    }
    else {
        printf("Whoops! niente creazione del db! Che sara successo??.\n");
    }
?>