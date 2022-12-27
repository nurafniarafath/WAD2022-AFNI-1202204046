<?php 

session_start();

if ( isset($_COOKIE['login'])) {
    if ( $_COOKIE['login'] == 'true') {
        $_SESSION['login'] == true;
    }
}

if ( !isset($_SESSION['login'])) {
    header("Location: pages/Home-NoLogin-Afni.php");
}

require 'pages/Home-SetelahLogin-Afni.php'; 

?>