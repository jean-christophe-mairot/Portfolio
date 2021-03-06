<?php
require_once('inc/init.php');

//recupère et affiche tous les vfx
$result = $pdo->query("SELECT * FROM graph_vfx");
$gvfxs = $result->fetchall();

//recupère et affiche tous les game design
$result = $pdo->query("SELECT * FROM game_design");
$gds = $result->fetchall();

// recupère et affiche les elemtns dev
$resultWeb = $pdo->query("SELECT * FROM dev_web");
$wds= $resultWeb->fetchAll();

require_once('inc/header.php');
?>


<!-- cards pour les différents jobs -->
  <div class="containerCategorie">
    <!-- foreach pour afficher tous les elements de dev -->
    <!-- -------------------------------------------------------------- DEVWEB ---------------------------------------------------------------------------- -->
    <div class="bgColorGd">
      <h2 class="titleJob">DEVELOPPEUR WEB</h2> 
        <div class="container">
         <div class="logoWeb">
          <i class="fab fa-html5"></i>
          <i class="fab fa-css3-alt"></i>
          <i class="fab fa-sass"></i>
          <i class="fab fa-js"></i>  
        </div>
        <div class="logoWeb">
          <i class="fab fa-node-js"></i>
          <i class="fab fa-wordpress"></i>
          <i class="fab fa-php"></i>
          <i class="fab fa-symfony"></i>
        </div>
        <div class="flex">
          <?php foreach ($wds as $wd): extract($wd)?>
            <div class="detailWeb">
              <h4><?= $titre ?><h4>
              <p class="detailTxt"><?= $description ?></p>
            </div>
          <?php endforeach ?>
         
        </div>
      </div>
      <div class="flex">
        <div class="container">
          <div class="projectTxt fondDark">
            <h3>Exercice : Template pour une région (from scratch)</h3>
            <h3>Compétences : HTML/ CSS / PHOTOSHOP</i></h3>
            <a href="https://github.com/jean-christophe-mairot/region_daufine"><i class="fab fa-github-square"></i></a>
            
          </div>
          <iframe class="webSite" src="projet_1/index.html" sandbox="allow-same-origin" style="height: 500px; width:100%;"> </iframe>
        </div>
        <div class="container">
          <div class="projectTxt fondDark">
            <h3>Exercice : Connexion avec accés à une documentation</h3>
            <h3>HTML/ CSS / PHP / PHOTOSHOP / LEAD TEAM</i></h3>
            <a href="https://github.com/JC-Mairot-Aimad-Leban-Distripizz/Distripizz"><i class="fab fa-github-square"></i></a>
           
          </div>
          <iframe class="webSite" src="distripizz/index.php" sandbox="allow-same-origin" style="height: 500px; width:100%;"> </iframe>
        </div>
        </div>
        <div class="container">
            <div class="projectTxt fondDark">
              <h3>Site pour l'escadrille de chasse virtuelle JKAS</h3>
              <h3>Compétences :WORDPRESS/ PHOTOSHOP</h3>
              <a href="https://www.escadrille-jkas.fr/" target="_blank" rel="noopener noreferrer"><i class="fab fa-avianex"></i></a>
              
              <!-- iframe pour integration du site escadrille jkas -->  
            </div>
            <iframe class="webSite" src="https://www.escadrille-jkas.fr/" sandbox="allow-same-origin" style="height: 500px; width:100%;"> </iframe>
        </div>    
    </div> 
      <!---------------------------------------------------------------- cinema fx ------------------------------------------------------------------------->
      <!-- description des postes -->
      <h2 class="titleJob">GRAPHISTE VFX & RESTORATION NUMERIQUE</h2>
      <div class="container">
        <div class="flex">
          <?php foreach (array_slice($gvfxs,0,3) as $gvfx): extract($gvfx)?>
            <div class="detailGraph">
              <h4><?= $titre ?><h4>
              <p class="detailTxt"><?= $description ?></p>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <!-- foreach pour afficher tous les elements de graph_vfx -->
      <div class="container">
        <div class="flex">
          <?php foreach (array_slice($gvfxs, 3) as $gvfx): extract($gvfx)?>
            <ul class="card-list">
              <li class="card">
                <a
                  class="card-image"
                  href="<?= $gvfx_video2?>"
                  target="_blank"
                  style="background-image: url(<?= $gvfx_image1?>)"
                  data-image-full="<?= $gvfx_image1?>"
                >
                  <img src="<?= $gvfx_image1?>" alt="Psychopomp" />
                </a>
                <a
                  class="card-description"
                  href="<?= $gvfx_video2?>"
                  target="_blank"
                >
                  <h2><?= $titre ?></h2>
                  <p></p>
                </a>
              </li>
            </ul>
          <?php endforeach ?>
        </div>
      </div>
    
    <!-- ----------------------------------------------------------- GAME DESIGNER --------------------------------------------------------------------------- -->
    <div class="bgColorGd">
      <!-- description des postes -->
      <h2 class="titleJob">GAME DESIGNER</h2>
      <div class="container">
        <div class="flex">
        <?php foreach(array_slice($gds, 0, 2) as $gd): extract($gd)?>
            <div class="detailGraph">
              <h4><?= $titre ?><h4>
              <p class="detailTxt"><?= $description ?></p>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    <!-- foreach pour afficher tous les elements de game designer -->
      <div class="container">
        <div class="flex">
          <?php foreach(array_slice($gds, 2) as $gd): extract($gd)?>
            <ul class="card-list">
              <li class="card">
                <a
                  class="card-image"
                  href="<?= $gd_video1?>"
                  target="_blank"
                  style="background-image: url(<?=$gd_image1?>)"
                  data-image-full="<?=$gd_image1?>"
                >
                  <img src="<?=$gd_image1?>" alt="Psychopomp" />
                </a>
                <a
                  class="card-description"
                  href="<?= $gd_video1?>"
                  target="_blank"
                >
                  <h2><?=$titre?></h2>
                  <p><?=$poste_gd?></p>
                </a>
              </li>
            </ul>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------ -->
  </div>

<?php
require_once('inc/footer.php');
?>