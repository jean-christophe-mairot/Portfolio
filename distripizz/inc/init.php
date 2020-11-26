<!-- ref des appels dans toutes les pages  -->
<?php
// ouverture de la session
session_start();

// CONNEXION A LA BDD 
//
$pdo = new PDO('mysql:host=localhost;dbname=distripizz', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,	
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
));

// varible pour les erreurs 
$error = ''; 

//inclusion du fichier des fonctions future
include('fonctions.php')
?>