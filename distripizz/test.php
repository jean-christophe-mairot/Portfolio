<?php
//fait appel à init.php dans dossier inc (inclusion)
require_once('inc/init.php');
require_once('inc/fonctions.php');
//code php


require_once('inc/header.php');
?>
<nav class="mainHead">
            <h1 class="title-distripizz "><a  href="index.php">DISTRIPIZZ</a></h1>
            <div class="zakNav">
             
                <div class="zakNav">
                    <div class="elem2">
                    <button  type="button" class="btn btn-secondary zakbouton">Contact</button>
                    <!-- mettre telephone -->
                    <div class="tel"><p>06 06 06 06 06</p></div>
                    </div>
                    <?php if(!userConnecte()): ?>
                        <button  type="button" class="btn btn-secondary zakbouton"><a href="login.php">Connexion</a></button>
                        <?php else :  ?>
                        <button  type="button" class="btn btn-secondary zakbouton"><a href="deco.php">Déconnexion</a></button>
                    <?php endif; ?>
                </div>
            </div>
        </nav>



<?php 
include('inc/footer.php');
?>