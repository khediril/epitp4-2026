<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1>Liste des articles</h1>
    <a href="formajout.php" class="btn btn-success">Nouvel Article</a>
    <?php
   // require('config.php');
    require('connecte.php');
    $dbconnex = connect();
    $requete = "select * from articles";
    $resultat = $dbconnex->query($requete);
    $articles = $resultat->fetchAll(PDO::FETCH_ASSOC);
    /*echo "<pre>";
    var_dump($articles);
    echo "</pre>"*/
    echo '<div class="container">';
    echo '<table class="table table-striped">';
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>TITRE</th>";
    echo "</tr>";
    foreach ($articles as $article) {
        echo "<tr>";
        echo "<td>" . $article['id'] . "</td>";
        echo "<td>" . $article['titre'] . "</td>";
        echo "</tr>";
    }
    echo '</table>';

    /* echo '<table border="1">';
    while($article = $resultat->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            echo "<td>".$article['id']."</td>";
            echo "<td>".$article['titre']."</td>";
            echo "</tr>";
        }
    echo '</table>';*/
    echo "</div>";

    ?>
</body>

</html>