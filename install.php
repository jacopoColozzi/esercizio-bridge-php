<?php
    $db_da_creare = true;
    require("connection.php");

    $queryCreazioneDatabase = "CREATE DATABASE $nomeDB";
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
    
    $queryfrutta = "create table $tabellaFrutta ( 
        nome varchar(40) NOT NULL PRIMARY KEY,
        descrizione varchar(100) ,
        percorso varchar(200) NOT NULL,
        prezzo float NOT NULL, 
        disponibilita integer NOT NULL
        )";
    

    $query = "INSERT INTO $tabellaUtenti
	(IdUtente, username, password, TotaleAquisti)
	VALUES
	('0', 'atangana95', '12345', '0')
	";

    eseguiQuery($connessione, $query);
    eseguiQuery($connessione,$queryfiori);
    eseguiQuery($connessione,$queryfrutta);
    eseguiQuery($connessione, "insert into $tabellaUtenti VALUES ('90', 'Jacopo', 'pass1', '0')");


    $query = "insert into $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('fiore','', 'img/fiori/fiore.gif','10', '7')";
    eseguiQuery($connessione, $query);

    $query = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('fiore_bianco','', 'img/fiori/fiore_bianco.jpg','10', '7')";
    eseguiQuery($connessione, $query);
    
    $query = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('fiori_colorati','', 'img/fiori/fiori_colorati.jpg','10', '7')";
    eseguiQuery($connessione, $query);
    
    $query = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('fiori_di_vaso','', 'img/fiori/fiori_di_vaso.jpg','10', '7')";
    eseguiQuery($connessione, $query);
    
    $query = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('fiori_misti','', 'img/fiori/fiori_misti.gif','10', '7')";
    eseguiQuery($connessione, $query);
    
    
    $query = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('margherita','', 'img/fiori/margherita.jpg','10', '7')";
    eseguiQuery($connessione, $query);
    
    $query = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('rosa_di_vaso','', 'img/fiori/rosa_di_vaso.gif','10', '7')";
    eseguiQuery($connessione, $query);
    
    $query = "INSERT INTO $tabellaFiori (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('rosa','', 'img/fiori/rosa.gif','10', '7')";
    eseguiQuery($connessione, $query);

    $query = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('banana-fragola','', 'img/frutta/banana-fragola.jpg','10', '7')";
    eseguiQuery($connessione, $query);
    
    $query = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('frullata','', 'img/frutta/frullata.jpg','10', '7')";
    eseguiQuery($connessione, $query);    
    
    $query = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('noce_di_cocco','', 'img/frutta/noce_di_cocco.jpg','10', '7')";
    eseguiQuery($connessione, $query);    
    
    $query = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('pomodoro','', 'img/frutta/pomodoro.jpg','10', '7')";
    eseguiQuery($connessione, $query);    
    
    $query = "INSERT INTO $tabellaFrutta (nome,descrizione,percorso,prezzo,disponibilita)
    VALUES ('zucca','', 'img/frutta/zucca.jpg','10', '7')";
    eseguiQuery($connessione, $query);


function eseguiQuery($conn, $q) {
        if ($resultQ = mysqli_query($conn, $q)) {
            printf("Query eseguita<br />");
        }
        else {
            printf($q);
            printf(" Query non eseguita\n".mysqli_error($conn)."<br />");
        }
        return $resultQ;
    }
?>