<?php
//var_dump($_GET);
$email = $_GET['email'];
$password = $_GET['password'];

require('connecte.php');
$dbconnex = connect();
$requete = "select * from users where email='$email' and password='$password'";
$resultat = $dbconnex->query($requete);
$user = $resultat->fetch(PDO::FETCH_ASSOC);
var_dump($user);
if ($user) {
    session_start();
    // Creation de variables de session
    $_SESSION['email'] = $user['email']; 
    $_SESSION['firstname'] = $user['firstname'];
    $_SESSION['lastname'] = $user['lastname'];
    $_SESSION['role']= $user['roles'];
    header("location:index.php");



} 
else {
    header("location:formlogin.php?msg=1");
}
