<?php
    $db_creato = false;
    require("connection.php");

    $queryCreazioneDatabase = "CREATE DATABASE $nomeDB";
    printf($queryCreazioneDatabase);
    if ($resultQ = mysqli_query($connessione, $queryCreazioneDatabase)) {
        printf("Database creato ...\n");
    }
    else {
        printf("Whoops! niente creazione del db! Che sara successo??.\n");
    }
    
    $db_creato = true;
    require("connection.php");
    
    $query = "create table $tabellaProdotti ( 
        codice integer NOT NULL auto_increment PRIMARY KEY,
        nome varchar(40), 
        disponibilita integer,
        prezzo integer
     )";
    if ($resultQ = mysqli_query($connessione, $query)) {
        printf("Tabella creata ");
    }
    else {
        printf("Tabella non creata\n".mysqli_error($connessione));
    }

    $query = "create table $tabellaUtenti ( 
        IdUtente integer NOT NULL auto_increment PRIMARY KEY,
        nome varchar(40) NOT NULL,
        cognome varchar(40) NOT NULL,
        usarname varchar(40) NOT NULL,
        password varchar (32) NOT NULL, 
        TotaleAquisti float
     )";
    if ($resultQ = mysqli_query($connessione, $query)) {
        printf("Tabella creata ");
    }
    else {
        printf("Tabella non creata\n".mysqli_error($connessione));
    }
    $query = "INSERT INTO $tabellaUtenti
	(IdUtente,nome,cognome, usarname, password, TotaleAquisti)
	VALUES
	('0', 'salomon', 'atangana', 'atangana95', 'password', '0')
	";

    eseguiQuery($connessione, $query);

?>

<?php
    function eseguiQuery($conn, $q) {
        if ($resultQ = mysqli_query($conn, $q)) {
            printf("Query eseguita");
        }
        else {
            printf("Query non eseguita\n".mysqli_error($conn));
        }
        return $resultQ;
    }
?>