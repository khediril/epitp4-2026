<?php
require_once("header");
if(!$_SESSION['role'] == 'ROLE_ADMIN')
    header('location:erreur.php');


?>

    
    <?php
    $login = "groupeg";
    $mp = "groupeg";
    $db = "blog_db";
    $host = "localhost";
    try {
        $titre = htmlspecialchars($_POST['titre']);
        $contenu = htmlspecialchars($_POST['contenu']);

        $dbconnex = new PDO("mysql:host=$host;dbname=$db", $login, $mp);
        echo "Connexion reussie";
    } catch (PDOException $ex) {
        echo "Probleme de connexion:" . $ex->getMessage();
        exit();
    }
    $requete = "insert into articles(id,titre,contenu) values(null,'$titre','$contenu')";
    //echo $requete."<br>";
    $nb = $dbconnex->exec($requete);
    if($nb < 1)if(!$_SESSION['role'] == 'ROLE_ADMIN')
    header('location:erreur.php');

    { 
        echo "<br>Probleme d'ajout...<br>";
    }
    else
        {
            echo "Ajout effectuer avec succes<br>";
            echo "<a href='liste.php'>Voir la liste des articles</a>";
        }
    

    ?>
    <?php 
require_once("header.php");
?>
