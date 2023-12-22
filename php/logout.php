<?php
session_start(); // sa démarrer la session
session_destroy(); // sa détruit toutes les données de session
header("Location: /webweek/php/adminconnexion.php"); 
exit;
?>
