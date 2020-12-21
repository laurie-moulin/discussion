<?php
require_once 'class/user.php';
    session_start();
 
    if (isset($_SESSION['id'])) { // Si tu es connecté on te déconnecte et on te redirige vers une page.
        $user = $_SESSION['user'];

        $_SESSION = array();
        session_destroy();
 
        setcookie('login', '');
        setcookie('pass_hache', '');
         
        header('Location: index.php');
 
    }else{ 
 
        header('Location: profil.php');
 
    }
 
         
 
?>