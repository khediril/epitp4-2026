<?php
   session_start();
   if(!isset($_SESSION['email']))
    {
        header("location:formlogin.php?msg=2");
    }
?>