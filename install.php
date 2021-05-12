<?php
    //$db_creato = true;
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
    
    $query = "create table $tabellaProdotti ( 
        codice integer NOT NULL auto_increment PRIMARY KEY,
        nome varchar(40), 
        disponibilita integer,
        prezzo integer
     )";
    if ($resultQ = mysqli_query($connessione, $query)) {
        printf("Tabella creata ".mysqli_error($connessione));
    }
    else {
        printf("Tabella non creata\n");
    }
?>