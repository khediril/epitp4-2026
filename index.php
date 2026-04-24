<?php
  $nomSite = "Ubuntu News";
  $slogan = "Le PHP en ligne de commande";
  $annee = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> <?php echo "Notre slogan est : $slogan"; ?> </header>
    <h1> <?php echo $nomSite; ?> </h1>  
    <footer> Annee : <?php echo $annee; ?></footer>
</body>
</html>