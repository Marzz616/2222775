<?php
    // var_dump($_POST);
    
    include('config/config.php');

    /**
     * Gebruik dubbele quotes om de connectiestring, 
     * gebruik kleine letters voor host en dbname!
     */
    $dsn = "mysql:host=$dbHost;
            dbname=$dbName;
            charset=UTF8";

    /**
     * Maak een nieuw PDO object waarmee je verbinding maakt met de 
     * MySQL-server en de database
     */
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    /**
     * 
     */
    filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    /**
     * Maak een insert-query om de ingevulde gegevens in de database 
     * op te slaan
     */
    $sql = "INSERT INTO Persoon (Voornaam
                                ,Tussenvoegsel
                                ,Achternaam
                                ,Wachtwoord)
            VALUES              (:firstname
                                ,'" . $_POST['infix'] . "'
                                ,'" . $_POST['lastname']. "'
                                ,'" . $_POST['password']. "')";

    /**
     * Prepareer de query
     */
    $statement = $pdo->prepare($sql);

    $statement->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);

    /**
     * Voer de query uit in de database
     */
    $statement->execute();

    /**
     * Geef feedback aan de gebruiker
     */
    echo "De gegevens zijn opgeslagen in de database";

    header ('refresh:3.5; url=read.php');