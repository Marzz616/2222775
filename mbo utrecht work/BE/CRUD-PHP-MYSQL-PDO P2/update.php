<?php

    /**
     * we maken verbinding met de database. Dus we includen de databasegegevens
     */
    include('config/config.php');


    /**
     * We maken een datasourcename string om een connectie te maken met de mysql server
     */
$dsn = "mysql:host=$dbHost; 
        dbname=$deName;
        charset=UTF8";
/**
 * We maken een nieuw PDO object en hebben nu een verbinding met de
 * MySQL  database.
 */
$pdo = new PDO($dsn, $dbuser, $dbpass);

if($_SERVER['REQUEST_MEDTHOD']=="POST")

$sql = "SELECT Id
               ,Voornaam
               ,Tussenvoegsel
               ,achternaa
               ,watchwoord
        FROM    Persoon
        WHERE Id = :id";

    exit();
/**
 * We prepareren de query zodat hij geschikt is voor de PDO=library
 */
$statement = $pdo->prepare($sql);
/**
 * sda
 */

$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT)

/**
 * 
 */
$statement->execute();

/**
 * Haal het result op en maakt het beschiktbaar
 */
$result = $statement->fetch (PDO::FETCH_OBJ)
echo $_GET [id];
?>
<a href="read.php">terug</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>persoonsgegevens wijzigen</h3>
<form method="post" action="create.php">
        <label for="firstname">Voornaam: </label>
        <input type="text" name="firstname" id="firstname"><br><br>

        <label for="infix">Tussenvoegsel: </label>
        <input type="text" name="infix" id="infix"><br><br>

        <label for="lastname">Achternaam: </label>
        <input type="text" name="lastname" id="lastname"><br><br>

        <label for="password">Wachtwoord: </label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Verzend">
    </form>
</body>
</html>