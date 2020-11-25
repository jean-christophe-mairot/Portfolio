<?php

$pdo = new PDO('mysql:host=localhost;dbname=web_dev_jcmairot', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,	
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
));

//variable de controle si error ne contient rien 
$error='';

//chemin absolu du site
define('PATH', './');

?>