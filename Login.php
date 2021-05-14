<?php
require_once("connection.php"); 
  if (empty($_POST['nome']) || empty($_POST['cognome']) || 
  empty($_POST['password']))
    echo "<p>Inserisci tutti i campi!!!</p>";
  else {                             
    $qselect = "SELECT *
            FROM $STuser_table_name
    WHERE nome = \"{$_POST['nome']}\" AND cognome = \"{$_POST['cognome']}\"
     AND password =\"{$_POST['password']}\" ";
    if (!$resultQ = mysqli_query($connessione, $qselect)) {
        printf("Oops, la query non ha risultato !!\n");
    exit();
    }

    $row = mysqli_fetch_array($resultQ);

    if ($row) {  
      session_start();
      $_SESSION['nome']=$_POST['nome'];
      $_SESSION['cognome']=$_POST['cognome'];
      $_SESSION['dataLogin']=time();
      $_SESSION['numeroUtente']=$row['IdUtente'];
      $_SESSION['spesaFinora']=$row['TotaleAquisti'];
      $_SESSION['accessoPermesso']=10;
      header('Location: index.php');  
      exit();
    }
    else
    echo "<p>accesso negato!!!</p>";
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <link rel="stylesheet" href="stile.css" type="text/css" media="all">
        <title>Registrazione</title>
    </head>

    <body>
        <h3>Accesso mediante username e password</h3>
        <hr />
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        nome: <input type="text" name="nome" size="30" />
        <br />
        cognome: <input type="text" name="cognome" size="30" />
        <br />
        password: <input type="text" name="password" size="30" />

        <input type="submit" name="invio" value="accedi">
        <input type="reset" name="reset" value="reset">
        </form>

        <hr />
    </body>
</html>