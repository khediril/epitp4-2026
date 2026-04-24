
<?php 
require_once("header.php");
?>

    <h2>Connected user : <?=$_SESSION['firstname'] ?> </h2>
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
    <?php 
require_once("header.php");
?>
