<?php
//fait appel à init.php dans dossier inc (inclusion)
require_once('inc/init.php');
require_once('inc/fonctions.php');

//code php
//recupère et affiche tous les gamùe design
$result = $pdo->query("SELECT * FROM documentations");
$docs = $result->fetchall();

require_once('inc/header.php');
?>

<!-- injection des documentations dans HTML  -->
<div class="container indexBg">
    <?php foreach($docs as $doc): extract($doc)?>
        <div class="document">
            <h2><?= $title ?></h2> 
            <p class="txtDoc"><?= $text ?></p>      
        </div> 
    <?php endforeach ?>
</div>




<?php 
include('inc/footer.php');
?>