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
        printf("Tabella creata ");
    }
    else {
        printf("Tabella non creata\n".mysqli_error($connessione));
    }

    $query = "create table $tabellaUtenti ( 
        IdUtente integer NOT NULL auto_increment PRIMARY KEY,
        nome varchar(40) NOT NULL,
        cognome varchar(40) NOT NULL,
        username varchar(40) NOT NULL,
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
	(IdUtente,nome,cognome, username, password, TotaleAquisti)
	VALUES
	('0', 'Salomon', 'Atangana', 'atangana95', 'password', '0')
	";

    eseguiQuery($connessione, $query);
    eseguiQuery($connessione, "insert into $tabellaUtenti VALUES ('0', 'Jacopo', 'Colozzi', 'jacopo99', 'pass1', '0')");

?>

<?php
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