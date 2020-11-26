<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/cssjc.css">
    <link rel="stylesheet" href="asset/css/distripizz.css">

    <title>Distripizz</title>
</head>
<body>
    <header>
        <nav class="mainHead ">
            <h1 class="title-distripizz "><a  href="index.php">DISTRIPIZZ</a></h1>
            <div class="zakNav">
             
                <div class="zakNav">
                    <div class="elem2">
                    <button  type="button" class="btn btn-secondary zakbouton"><a href="index.php?#formcontact">Contact</a></button>
                    <!-- mettre telephone -->
                    <!-- <div class="tel"><p>06 06 06 06 06</p></div> -->
                    </div> 
                    <?php if(!userConnecte()): ?>
                        <button  type="button" class="btn btn-secondary zakbouton"><a href="login.php">Connexion</a></button>
                        <?php else :  ?>
                            <button  type="button" class="btn btn-secondary zakbouton"><a href="deco.php">Déconnexion</a></button>
                            <button  type="button" class="btn btn-secondary zakbouton"><a href="documentation.php">Documentations</a></button>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
    







