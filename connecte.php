 <?php

    function connect()
    {
     require('config.php');   
    try {
            $dbconnex = new PDO("mysql:host=$host;dbname=$db", $login, $mp);
            echo "Connexion reussie";
            return $dbconnex;
        } catch (PDOException $ex) {
            echo "Probleme de connexion:" . $ex->getMessage();
            exit();
        }
    }
