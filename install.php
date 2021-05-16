<?php
    $db_da_creare = true;
    require("connection.php");

    $queryCreazioneDatabase = "CREATE DATABASE $nomeDB";
    printf($queryCreazioneDatabase);
    if ($resultQ = mysqli_query($connessione, $queryCreazioneDatabase)) {
        printf("Database creato ...\n");
    }
    else {
        printf("Whoops! niente creazione del db! Che sara successo??.\n");
    }
    
    $db_da_creare = false;
    require("connection.php");
    
    $query = "create table $tabellaProdotti ( 
        codice integer NOT NULL auto_increment PRIMARY KEY,
        nome varchar(40), 
        disponibilita integer,
        prezzo integer
     )";
    if ($resultQ = mysqli_query($connessione, $query)) {
        printf("Tabella Prodotti creata ");
    }
    else {
        printf("Tabella non creata\n".mysqli_error($connessione));
    }

    $query = "create table $tabellaUtenti ( 
        IdUtente integer NOT NULL auto_increment PRIMARY KEY,
        username varchar(40) NOT NULL,
        password varchar (32) NOT NULL, 
        TotaleAquisti float
     )";
    if ($resultQ = mysqli_query($connessione, $query)) {
        printf("Tabella Utenti creata ");
    }
    else {
        printf("Tabella non creata\n".mysqli_error($connessione));
    }
    $queryfiori = "create table $tabellaFiori ( 
        nome varchar(40) NOT NULL PRIMARY KEY,
        descrizione varchar(100) ,
        percorso varchar(200) NOT NULL,
        prezzo float NOT NULL, 
        disponibilita integer NOT NULL
        )";
    if ($resultQ = mysqli_query($connessione, $queryfiori)) {
        printf("Tabella fiori creata ".mysqli_error($connessione));
    }
    else {
        printf("Tabella fiori non creata\n");
    }
    $queryfrutta = "create table $tabellaFrutta ( 
        nome varchar(40) NOT NULL PRIMARY KEY,
        descrizione varchar(100) ,
        percorso varchar(200) NOT NULL,
        prezzo float NOT NULL, 
        disponibilita integer NOT NULL
        )";
    if ($resultQ = mysqli_query($connessione, $queryfrutta)) {
        printf("Tabella frutta creata ".mysqli_error($connessione));
    }
    else {
        printf("Tabella frutta non creata\n");
    }

    $query = "INSERT INTO $tabellaUtenti
	(IdUtente, username, password, TotaleAquisti)
	VALUES
	('0', 'atangana95', '12345', '0')
	";

    eseguiQuery($connessione, $query);
    eseguiQuery($connessione,$queryfiori);
    eseguiQuery($connessione,$queryfrutta);
    eseguiQuery($connessione, "insert into $tabellaUtenti VALUES ('1', 'Jacopo', 'pass1', '0')");


    $insfiori = "insert into $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"fiore\",\"\", \"esercizio-bridge-php-main/img/fiore.gif\",\"10\", \"7\")";
    eseguiQuery($connessione, $insfiori);

    $insfiori = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"fiore_bianco\",\"\", \"esercizio-bridge-php-main/img/fiori/fiore_bianco.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $query);
    
    $insfiori = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"fiori_colorati\",\"\", \"esercizio-bridge-php-main/img/fiori/fiori_colorati.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $query);
    
    $insfiori = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"fiori_di_vaso\",\"\", \"esercizio-bridge-php-main/img/fiori/fiori_di_vaso.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $query);
    
    $insfiori = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"fiori_misti\",\"\", \"esercizio-bridge-php-main/img/fiori/fiori_misti.gif\",\"10\", \"7\")";
    eseguiQuery($connessione, $query);
    
    $insfiori = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"fiori\",\"\", \"esercizio-bridge-php-main/img/fiori/fiori.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $query);
    
    $insfiori = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"margherita\",\"\", \"esercizio-bridge-php-main/img/fiori/margherita.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $query);
    
    $insfiori = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"rosa_di_vaso\",\"\", \"esercizio-bridge-php-main/img/fiori/rosa_di_vaso.gif\",\"10\", \"7\")";
    eseguiQuery($connessione, $query);
    
    $insfiori = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"rosa\",\"\", \"esercizio-bridge-php-main/img/fiori/rosa.gif\",\"10\", \"7\")";
    eseguiQuery($connessione, $query);

    $insfrutta = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"banana-fragola\",\"\", \"esercizio-bridge-php-main/img/frutta/banana-fragola.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $insfrutta);
    
    $insfrutta = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"frullata\",\"\", \"esercizio-bridge-php-main/img/frutta/frullata.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $insfrutta);    
    
    $insfrutta = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"noce_di_cocco\",\"\", \"esercizio-bridge-php-main/img/frutta/noce_di_cocco.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $insfrutta);    
    
    $insfrutta = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"pomodoro\",\"\", \"esercizio-bridge-php-main/img/frutta/pomodoro.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $insfrutta);    
    
    $insfrutta = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES (\"zucca\",\"\", \"esercizio-bridge-php-main/img/frutta/zucca.jpg\",\"10\", \"7\")";
    eseguiQuery($connessione, $insfrutta);


function eseguiQuery($conn, $q) {
        if ($resultQ = mysqli_query($conn, $q)) {
            printf("Query eseguita<br />");
        }
        else {
            printf("Query non eseguita\n".mysqli_error($conn));
        }
        return $resultQ;
    }
?>