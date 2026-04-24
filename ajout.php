<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    
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
    if($nb < 1)
    { 
        echo "<br>Probleme d'ajout...<br>";
    }
    else
        {
            echo "Ajout effectuer avec succes<br>";
            echo "<a href='liste.php'>Voir la liste des articles</a>";
        }
    

    ?>
</body>

</html>