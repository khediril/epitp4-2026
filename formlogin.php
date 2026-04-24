
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     if(isset($_GET["msg"]))
        {
            if($_GET["msg"]==1)
                {
                    echo "Login ou mot de passe incorrecte<br>";
                }
                if($_GET["msg"]==2)
                {
                    echo "Vous n'etes pas connecter il faut se connecter d'abord<br>";
                }
                
        }

?>
    <form action="login.php" method="GET">
        Login : <input type="email" name="email" id=""><br>
        Mot de passe : <input type="password" name="password" id="">
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>