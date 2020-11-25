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
    <ul class="card-list">
      <li class="card">
        <a
          class="card-image"
          href="https://michellezauner.bandcamp.com/album/psychopomp-2"
          target="_blank"
          style="background-image: url(/img/gamedesign_carousel.jpg)"
          data-image-full="/img/gamedesign_carousel.jpg"
        >
          <img src="/img/gamedesign_carousel.jpg" alt="Psychopomp" />
        </a>
        <a
          class="card-description"
          href="#"
          target="_blank"
        >
          <h2>Psychopomp</h2>
          <p>Japanese Breakfast</p>
        </a>
      </li>
    </ul>
     
    <!-- cinema fx -->
    <h2 class="titleJob"><a href="https://www.imdb.com/name/nm2417110/" target="_blank" rel="noopener noreferrer"></a>GRAPHISTE VFX & RESTORATION NUMERIQUE</h2>
    <!-- foreach pour afficher tous les elements de graph_vfx -->
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
    <!-- GAME DESIGNER -->
    <h2 class="titleJob">GAME DESIGNER</h2>
    <!-- foreach pour afficher tous les elements de game designer -->
    <?php foreach($gds as $gd): extract($gd)?>
    <ul class="card-list">
      <li class="card">
        <a
          class="card-image"
          href="https://michellezauner.bandcamp.com/album/psychopomp-2"
          target="_blank"
          style="background-image: url(/img/gamedesign_carousel.jpg)"
          data-image-full="/img/gamedesign_carousel.jpg"
        >
          <img src="/img/gamedesign_carousel.jpg" alt="Psychopomp" />
        </a>
        <a
          class="card-description"
          href="#"
          target="_blank"
        >
          <h2>Psychopomp</h2>
          <p>Japanese Breakfast</p>
        </a>
      </li>
    </ul>
    <?php endforeach ?>
  </div>

<?php
require_once('inc/footer.php');
?>