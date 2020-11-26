<?php
//fait appel à init.php dans dossier inc (inclusion)
require_once('inc/init.php');
require_once('inc/fonctions.php');
//code php

if($_POST){
    // vérification du nom
    if(empty($_POST['name'])){
        $error .= '<div class="alert alert-danger">Veuillez renseigner un Nom</div>';
    }
    else{
        //Expressions régulières ou REGEX
        $verif = preg_match('#^[a-zA-Z]{3,30}$#', $_POST['name'] ); // true / False
        if(!$verif){
            // le pseudo ne correspond à ce que j'attend
            $error .= '<div class="alert alert-danger">Veuillez renseigner un Nom de famille de 2 à 30 caractères, composé de lettre, en minuscules ou majuscules</div>';
        }
    }

    // vérification du prenom
    if(empty($_POST['firstname'])){
        $error .= '<div class="alert alert-danger">Veuillez renseigner un Prénom</div>';
    }
    else{
        //Expressions régulières ou REGEX
        $verif = preg_match('#^[a-zA-Z]{2,50}$#', $_POST['firstname'] ); // true / False
        if(!$verif){
            // le pseudo ne correspond à ce que j'attend
            $error .= '<div class="alert alert-danger">Veuillez renseigner un prénom de 2 à 50 caractères, composé de lettre, en minuscules ou majuscules</div>';
        }
    }

    // vérification du email
    if(empty($_POST['email'])){
        $error .= '<div class="alert alert-danger">Veuillez renseigner un email</div>';
    }
    else{
        if(  !  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $error .= '<div class="alert alert-danger">Veuillez renseigner un email valide</div>';
        }
    }

    // vérification du password
    if(empty($_POST['password'])){
        $error .= '<div class="alert alert-danger">Veuillez renseigner un mot de passe</div>';
    }
    else{
        $verif = preg_match('#^(?=.*[0-9])(?=.*[A-Z]).{8,20}$#', $_POST['password'] );
        if(!$verif){
            // le pseudo ne correspond à ce que j'attend
            $error .= '<div class="alert alert-danger">Veuillez renseigner un mot de passe avec un chiffre et une lettre en majuscule et mininuscule de 8 caracteres minimum</div>';
        }
    }


// tout est ok pour la saisie dans le formulaire d'inscription
    if(empty($error)){

        $resultatEmail = $pdo -> prepare("SELECT * FROM collaborateurs where email = :email");
        $resultatEmail -> bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $resultatEmail -> execute();

        $resultatName = $pdo -> prepare("SELECT * FROM collaborateurs where name = :name");
        $resultatName -> bindParam(':name', $_POST['name'], PDO::PARAM_STR);
        $resultatName -> execute();

        $resultatFistName = $pdo -> prepare("SELECT * FROM collaborateurs where firstname = :firstname");
        $resultatFistName -> bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
        $resultatFistName -> execute();
        
        
       if($resultatEmail -> rowCount() > 0){
            // Cela signifie que le email existe déjà en BDD...
            $error .= '<div class="alert alert-danger">Cet email est déjà utilisé.</div>';
        }
        else{
            // Ok on insert le collaboratuer en BDD : 
            
            $resultat = $pdo -> prepare("INSERT INTO collaborateurs (name, firstname, email, password) VALUES (:name, :firstname, :email, :password)");
            
            
            $resultat -> bindParam(':name', $_POST['name'], PDO::PARAM_STR);
            $resultat -> bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
            $resultat -> bindParam(':email',$_POST['email'] , PDO::PARAM_STR);
            //encryptage password
            $password_crypte = md5($_POST['password']);
            $resultat -> bindParam(':password', $password_crypte, PDO::PARAM_STR);
            
            if($resultat -> execute()){	
                echo ('Collaborateur(trice) : '. $_POST['name'] .' '. $_POST['firstname'] .' enregistré(e)');
                //$_SESSION['validation'][] = 'Félicitations vous êtes inscris... veuillez vous connecter';
                // redirection vers inscrip
                header('location:inscription.php');
                exit; 
            }

        }
    }
}

require_once('inc/header.php');
?>


<div class="">
    <h1>Inscription</h1>

<!-- formulaire inscription -->
<!-- ATTENTION --><?= $error ?><!-- ATTENTION -->

    <form method="post" action="">
        
        <div>
            <label>Nom</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>"/>
        </div>
        <div>
            <label>Prénom</label>
            <input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];} ?>"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>"/>
        </div>
        <div>
            <label>Mot de passe</label>
            <input type="password" name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>"/>
        </div>
        <div>
            <input type="submit" value="Inscription" />
        </div>
    </form>

</div>


<?php 
include('inc/footer.php');
?>