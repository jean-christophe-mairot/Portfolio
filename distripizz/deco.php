<?php
// pour la deconnexion de la session
session_start();
session_destroy();
header('location: index.php');
exit;
?>