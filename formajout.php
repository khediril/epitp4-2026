<?php
require_once("header.php");
echo "<br>ROLE : ".$_SESSION['role']."<br>";
if(!($_SESSION['role'] == 'ROLE_ADMIN'))
    {
    header('location:erreur.php');
    }

?>

    <h1>Ajout nouvel article</h1>
    <form action="ajout.php" method="post">
        Titre : <input type="text" name="titre" id=""><br>
        Contenu : <textarea id="feedback" name="contenu" rows="10" cols="30">
Default text can go here.
</textarea>
        <input type="submit" value="Sauvgarder">
    </form>
<?php 
require_once("header.php");
?>