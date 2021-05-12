<?php
    require_once("connection.php");

    $queryCreazioneDatabase = "CREATE DATABASE $nomeDB";
    printf($queryCreazioneDatabase);
    if ($resultQ = mysqli_query($connessione, $queryCreazioneDatabase)) {
        printf("Database creato ...\n");
    }
    else {
        printf("Whoops! niente creazione del db! Che sara successo??.\n");
    }
    // qui vanno inserite le query per creare nuove tabelle e per popolarle
    $query = "";
    if ($resultQ = mysqli_query($connessione, $query)) {
        printf("Database creato ...\n");
    }
    else {
        printf("Whoops! niente creazione del db! Che sara successo??.\n");
    }
?>