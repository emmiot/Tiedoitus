<?php

$yhteys = "host=localhost port=5432 dbname=testi user=postgres password=dbpass";

$yht = pg_connect($yhteys);
if (!$yht) {
    die("Yhteysvirhe: " . pg_last_error());
}

$tunnus = pg_escape_string($_POST["tunnus"]);
$salasana = pg_escape_string($_POST["salasana"]);

$kysely = "SELECT * FROM users WHERE username='$tunnus' and password='$salasana'";
$tulokset = pg_query($yht, $kysely);

if (!$tulokset) {
    die("SQL-virhe: " . pg_last_error());
}

if(pg_num_rows($tulokset) != 1) {
    header("Location: index.php");
    exit;
} else {
    header("Location: kirjauduttu.php");
    exit;
}

//pg_free_result($tulokset);
//pg_close($yht);
?>