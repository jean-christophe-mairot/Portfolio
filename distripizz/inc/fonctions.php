<?php

// Fonction pour tester si user est connecté en fonction de la table collaborateurs
function userConnecte(){
	if(isset($_SESSION['collaborateurs'])){
		return true;
	}
	else{
		return false; 
	}
}
