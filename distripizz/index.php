<?php
//fait appel à init.php dans dossier inc (inclusion)
require_once('inc/init.php');
require_once('inc/fonctions.php');
//code php


require_once('inc/header.php');
?>
<!-- div générale pour le contenu de la onepage -->
<div class="container indexBg">

<!-- carousel bootstrap -->
    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="img/04.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img/02.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img/03.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img/04.jpg" alt="Third slide">
                </div>
            </div>
        
            </a>
        </div>
    </div>
<!-- block h1 + p qui somme nous -->
    <div class="whoRyou">
        <h2>Qui somme nous ?</h1>
        <div >
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Fuga autem eius quisquam soluta dolorum, neque doloremque 
                reprehenderit molestias assumenda voluptas pariatur magnam 
                deleniti amet, cupiditate labore suscipit, illo maiores consequatur. 
                Ipsum deserunt ducimus eaque porro reiciendis dolorum tenetur accusamus 
                atque.
            </p>
        </div>
    </div>
<!-- une image bouteille + pizza possibilité hover annimé-->
    <div class="container-fluid photoPizz"></div>
<!-- 1div>2div>h2+p -->
<div class="textDistripizz">
        <h2>Lorem ipsum dolor</h1>
        <div >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Exercitationem recusandae sit quisquam molestias odio 
                ullam optio sint voluptatem libero vel velit, sequi molestiae 
                reprehenderit. Obcaecati quia dignissimos maxime temporibus 
                cupiditate distinctio nemo aspernatur tempore, molestias doloribus 
                harum consequatur repudiandae incidunt odit sapiente, quis pariatur 
                similique accusamus optio facere blanditiis quae id modi. Reiciendis, 
                eos asperiores obcaecati quis laboriosam dicta qui vero eaque dolore 
                perspiciatis quas inventore officiis, 
                facilis cum veniam ad tempora debitis id ea incidunt provident 
                recusandae minima quidem facere! Consequatur, facere magni. 
                Eum id quaerat incidunt veritatis, maiores eligendi totam 
                repellendus voluptatem vero quod animi ullam aspernatur asperiores?
            </p>
        </div>
    </div>
    <div class="textDistripizz">
        <h2>Lorem ipsum dolor</h1>
        <div >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Exercitationem recusandae sit quisquam molestias odio 
                ullam optio sint voluptatem libero vel velit, sequi molestiae 
                reprehenderit. Obcaecati quia dignissimos maxime temporibus 
                cupiditate distinctio nemo aspernatur tempore, molestias doloribus 
                harum consequatur repudiandae incidunt odit sapiente, quis pariatur 
                similique accusamus optio facere blanditiis quae id modi. Reiciendis, 
                eos asperiores obcaecati quis laboriosam dicta qui vero eaque dolore 
                perspiciatis quas inventore officiis, 
                facilis cum veniam ad tempora debitis id ea incidunt provident 
                recusandae minima quidem facere! Consequatur, facere magni. 
                Eum id quaerat incidunt veritatis, maiores eligendi totam 
                repellendus voluptatem vero quod animi ullam aspernatur asperiores?
            </p>
        </div>
    </div>
<!-- 1 img team -->
    <div class="container-fluid photoTeam"></div>
<!-- 1div>2div>h2+p -->
<div class="textDistripizz">
        <h2>Lorem ipsum dolor</h1>
        <div >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Exercitationem recusandae sit quisquam molestias odio 
                ullam optio sint voluptatem libero vel velit, sequi molestiae 
                reprehenderit. Obcaecati quia dignissimos maxime temporibus 
                cupiditate distinctio nemo aspernatur tempore, molestias doloribus 
                harum consequatur repudiandae incidunt odit sapiente, quis pariatur 
                similique accusamus optio facere blanditiis quae id modi. Reiciendis, 
                eos asperiores obcaecati quis laboriosam dicta qui vero eaque dolore 
                perspiciatis quas inventore officiis, 
                facilis cum veniam ad tempora debitis id ea incidunt provident 
                recusandae minima quidem facere! Consequatur, facere magni. 
                Eum id quaerat incidunt veritatis, maiores eligendi totam 
                repellendus voluptatem vero quod animi ullam aspernatur asperiores?
            </p>
        </div>
    </div>
    <div class="textDistripizz">
        <h2 id="formcontact">Lorem ipsum dolor</h1>
        <div >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Exercitationem recusandae sit quisquam molestias odio 
                ullam optio sint voluptatem libero vel velit, sequi molestiae 
                reprehenderit. Obcaecati quia dignissimos maxime temporibus 
                cupiditate distinctio nemo aspernatur tempore, molestias doloribus 
                harum consequatur repudiandae incidunt odit sapiente, quis pariatur 
                similique accusamus optio facere blanditiis quae id modi. Reiciendis, 
                eos asperiores obcaecati quis laboriosam dicta qui vero eaque dolore 
                perspiciatis quas inventore officiis, 
                facilis cum veniam ad tempora debitis id ea incidunt provident 
                recusandae minima quidem facere! Consequatur, facere magni. 
                Eum id quaerat incidunt veritatis, maiores eligendi totam 
                repellendus voluptatem vero quod animi ullam aspernatur asperiores?
            </p>
        </div>
    </div>
<!-- 1div>2div>h2+p+img -->
<!-- formulaire contactez nous avec une ancre de contact du header -->
    <div id="contact">
        <form>
        <div class="form-group">
            <h3>Contactez nous !</h3>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tapez votre message ici..." rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Envoyer</button>
        </form>
    </div>
<!-- img  -->
    <div class="container-fluid photoBureau"></div>
</div>





<?php 
include('inc/footer.php');
?>