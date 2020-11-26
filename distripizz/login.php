<?php
//fait appel à init.php dans dossier inc (inclusion)
require_once('inc/init.php');
require_once('inc/fonctions.php');

// accessibilité
if(userConnecte()){
	// si l'utilisateur est connecté, il n'a rien à faire ici, donc on le redirige...
	header('location:documentation.php');
}

//traitement pour la connexion
if($_POST){
    // vérifie que l'utilisateur existe bien
    $result = $pdo -> prepare("SELECT * FROM collaborateurs WHERE email = :email ");
    $result -> bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $result -> execute();
    //si il y a un email qui existe dans la bdd
    if($result -> rowCount()> 0){
        // var pour ce que l'on fecth dans le $result
        $collab=$result->fetch();
        //variable pour le mot de passe avec l'encodage md5
        $mdp=md5($_POST['password']);
        //vérifie que le mot de passe saisie correspond à celui du collaborateur
        if($mdp==$collab['password']){
        // on stock les infos du membre dans la session
        $_SESSION['collaborateurs']=$collab;
        header('location:documentation.php');
        }
        else{
			$error .= '<div class="alert alert-danger">Mauvais Mot de passe</div>';
		}
    }
    else{
		$error .= '<div class="alert alert-danger">Aucun compte existant</div>';
	}
}


require_once('inc/header.php');
?>
<div class="container indexBg">
	<div class="fullPage">
		<h1>Connexion</h1>
		<!----message d'erreur------>
		<?= $error ?> 
		<!-- formulaire pour le login -->
		<div id="login">
			<form method="post">
			<div class="form-group">
				<label>Email : </label>
				<input type="email" name="email" class="form-control" id="exampleFormControlInput1">
			</div>
			<div class="form-group">
				<label>Mot de passe : </label>
				<input type="password" name="password" class="form-control" id="exampleFormControlInput1">
			</div>
			<button type="submit" class="btn btn-dark" value="Connexion">Envoyer</button>
			</form>
		</div>
	</div>
	<div class="container-fluid photoBureau"></div>
</div>
<?php 
include('inc/footer.php');
?>