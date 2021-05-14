<?php
    $db_creato = true;
    require_once("connection.php");

   /* $queryCreazioneDatabase = "CREATE DATABASE $nomeDB";
    printf($queryCreazioneDatabase);
    if ($resultQ = mysqli_query($connessione, $queryCreazioneDatabase)) {
        printf("Database creato ...\n");
    }
    else {
        printf("Whoops! niente creazione del db! Che sara successo??.\n");
    }*/
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

    $query1 = "create table $tabellaUtenti ( 
        IdUtente integer NOT NULL auto_increment PRIMARY KEY,
        nome varchar(40) NOT NULL,
        cognome varchar(40) NOT NULL,
        password varchar (32) NOT NULL, 
        TotaleAquisti float
     )";
    if ($resultQ = mysqli_query($connessione, $query)) {
        printf("Tabella creata ".mysqli_error($connessione));
    }
    else {
        printf("Tabella non creata\n");
    }
    $sql = "INSERT INTO $STuser_table_name
	(IdUtente,nome,cognome, password, sommeSpese,TotaleAquisti)
	VALUES
	(\"1\", \"salomon\", \"atangana\",\"12345\",\"0\")
	";


?>