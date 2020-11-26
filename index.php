<?php
require_once('inc/init.php');

//recupère et affiche tous les vfx
$result = $pdo->query("SELECT * FROM graph_vfx");
$gvfxs = $result->fetchall();

//recupère et affiche tous les game design
$result = $pdo->query("SELECT * FROM game_design");
$gds = $result->fetchall();

require_once('inc/header.php');
?>


<!-- cards pour les différents jobs -->
  <div class="containerCategorie">
    <!-- foreach pour afficher tous les elements de dev -->
    <h2 class="titleJob">DEVELOPPEUR WEB</h2>
    <div class="flex">
      
      <div class="container">
        <div>
          <h3>Exercice : Template pour une région</h3>
          <h3>Compétences : HTML/ CSS / PHOTOSHOP</i></h3>
          <h4><a href="https://github.com/jean-christophe-mairot/region_daufine">Github : Région Dauphiné</a></h4>
          <hr class="sepProject">
        </div>
        <iframe class="webSite" src="projet_1/index.html" sandbox="allow-same-origin" style="height: 500px; width:100%;"> </iframe>
      </div>
    
      <div class="container">
        <div>
          <h3>Exercice : Connexion avec accés à une documentation</h3>
          <h3>Compétences : HTML/ CSS / PHP / PHOTOSHOP / LEAD TEAM</i></h3>
          <h4><a href="https://github.com/JC-Mairot-Aimad-Leban-Distripizz/Distripizz">Github : Distripizz</a></h4>
          <hr class="sepProject">
        </div>
        <iframe class="webSite" src="distripizz/index.php" sandbox="allow-same-origin" style="height: 500px; width:100%;"> </iframe>
      </div>
    </div>

     <div class="container">
        <div>
          <h3>Site pour l'escadrille de chasse virtuelle JKAS</h3>
          <h3>Compétences :WORDPRESS/ PHOTOSHOP</h3>
          <h4><a href="https://www.escadrille-jkas.fr/" target="_blank" rel="noopener noreferrer">Escadrille-jkas.fr</a></h4>
          <hr class="sepProject">
          <!-- iframe pour integration du site escadrille jkas -->  
        </div>
        <iframe class="webSite" src="https://www.escadrille-jkas.fr/" sandbox="allow-same-origin" style="height: 500px; width:100%;"> </iframe>
      </div>     



    <!-- cinema fx -->
    <h2 class="titleJob"><a href="https://www.imdb.com/name/nm2417110/" target="_blank" rel="noopener noreferrer"></a>GRAPHISTE VFX & RESTORATION NUMERIQUE</h2>
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
    <!-- GAME DESIGNER -->
    <div class="bgColorGd">
    <h2 class="titleJob">GAME DESIGNER</h2>
    <!-- foreach pour afficher tous les elements de game designer -->
    
      <div class="container">
        <div class="flex">
          <?php foreach(array_slice($gds, 2) as $gd): extract($gd)?>
            <ul class="card-list">
              <li class="card">
                <a
                  class="card-image"
                  href="https://michellezauner.bandcamp.com/album/psychopomp-2"
                  target="_blank"
                  style="background-image: url(<?=$gd_image1?>)"
                  data-image-full="<?=$gd_image1?>"
                >
                  <img src="<?=$gd_image1?>" alt="Psychopomp" />
                </a>
                <a
                  class="card-description"
                  href="#"
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
  </div>

<?php
require_once('inc/footer.php');
?>