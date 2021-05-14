<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
unset($_SESSION);
session_destroy();
?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>psito per fissati - logout - ST</title>
<link rel="stylesheet" href="stile.css" type="text/css" media="all">
</head>

<body>
<h3>
<hr />
Grazie della visita, ciao ciao
<hr />
<li><a href="login.php">torna a login</a></li>
<hr />

</body>
</html>