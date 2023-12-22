<?php
session_start(); 
session_destroy(); 
header("Location: adminconnexion.html"); 
exit;
?>
