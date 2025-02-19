<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link id="theme-stylesheet" rel="stylesheet" href="./assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    " rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
<section id="header">


<div id="container">
    <nav class="nav-bar " id='nav-bar'>
        <div id="name">Tumblr Dev</div>
        <img id="logo" src="./assets/img/Group 1 (1).svg" alt="">

        <ul>
            <li class="list-menu">Contact</li>
            <li class="list-menu">Blog</li>
            
            <li class="list-menu">Lorem</li>
            <li><label class="switch">
                    <input type="checkbox" id="darkModeToggle">
                    <span class="slider"></span>
                </label></li>
            <li class="list-menu">
                <a href="<?= $router->generate('form-signup'); ?>">
                <button id="sign-in">Inscription</button>
                </a>
        </li>
        </ul>
        <a href="" id="burger">
            <img id="burgerr" src="./assets/img/Group 2.svg" alt="">
        </a>
    </nav>
</div>

<div class="container-theme">

    <section class="grid-carousel">
        <div id="com">
            // Le podscat qui veut résoudre le problème
            <br> // *avant* de passer au dev
        </div>
        <section class="splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide" data-text="JavaScript, the web programming language."><img
                            src="./assets/img/Firefly Génère une image illustrant JavaScript, le langage de programmation web, en mettant en avant (1).jpg"
                            alt=""></li>
                    <li class="splide__slide" data-text="Python, the versatile programming language."><img
                            src="./assets/img/Firefly Génère une image illustrant Python, le langage de programmation polyvalent, en mettant en av (1).jpg"
                            alt=""></li>
                    <li class="splide__slide"
                        data-text="PHP, the backend programming language for web development."><img
                            src="./assets/img/Firefly Génère une image illustrant PHP, un langage de programmation web backend, en mettant en avan (1).jpg"
                            alt=""></li>
                </ul>
            </div>
            <div class="slide-text" id="slide-text"></div>
        </section>

    </div>

    </section>

    <div class="burger-hidden">
        <ul>
            <li><button id="close">X</button></li>
            <li>Contact</li>
            <li>Blog</li>
            <li>Lorem</li>
            <li>Lorem</li>
            <li>Lorem</li>
            <label for="connexion"></label>
            <input id="submit" type="submit" name="connexion" placeholder="Connexion">
        </ul>
    </div>


    <section id="about">
        <section class="nos-article">
            <h1>Tout nos articles autour du developpement JavaScript </h1>
            <h2>//Navigation par thème</h2>
            <div id="filter">
                <p class="filter-article">Data</p>
                <p class="filter-article">iA</p>
                <p class="filter-article">Techno</p>
                <p class="filter-article">Hors-série</p>
                <p class="filter-article">Recrutement</p>
            </div>
            <article>
                <figure>
                    <img src="./assets/img/Firefly Génère une image illustrant PHP, un langage de programmation web backend, en mettant en avan (1).jpg"
                        alt="" height="50px">
                </figure>
                <div>
                    <p class="title-article">La nouvelle Anchor positioning API en CSS</p>
                    <p class="date-article">22 aout 2024</p>
                    <p class="content-article">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat debitis
                        iusto laboriosam alias nihil veniam consequatur eos quisquam sint quaerat!</p>
                </div>
            </article>
        </section>

        <section id="subscribe">
            <h2>Abonnez-vous <br> à notre AstroNews !</h2>
            <p>Retrouvez dans notre newsletter mensuelle les dernières actualités tech, une sélection de ressources et
                le meilleur de twitter</p>
            <label for="email"></label>
            <input id="email-newletter" type="email" name="email" placeholder="E-mail" required>
            <br>
            <div class="accept">
                <input id="checkbox" type="checkbox">
                <p id="checkbox-accept">J’accepte que la société TumblrDev utilise les informations recueillies à partir
                    de ce formulaire dans le
                    cadre de la gestion de ma demande. Pour en savoir plus, consultez notre politique de gestion des
                    données
                    personnelles</p>
            </div>
            <input id="submit-subscribe" type="submit" value="Envoyez">

        </section>


        <section class="nos-article">

            <article>
                <figure>
                    <img src="./assets/img/Firefly Génère une image illustrant PHP, un langage de programmation web backend, en mettant en avan (1).jpg"
                        alt="" height="50px">
                </figure>
                <div>
                    <p class="title-article">La nouvelle Anchor positioning API en CSS</p>
                    <p class="date-article">22 aout 2024</p>
                    <p class="content-article">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat debitis
                        iusto laboriosam alias nihil veniam consequatur eos quisquam sint quaerat!</p>
                </div>
            </article>
        </section>


    </section>

    <footer>
        <figure>
            <img src="./assets/img/Group 1 (1).svg" alt="">
        </figure>
        <section id="container-footer">
            <div>Web Development</div>
            <div>Web Design</div>
            <div>Frontend Developpement</div>
            <div>Backend Developpement</div>
            <div>UI/UX Design</div>
            </div>
            <section id="reseau">
                <img src="./assets/img/instagram.png" alt="">
                <img src="./assets/img/tic-tac.png" alt="">
                <img src="./assets/img/twitter.png" alt="">
                <img src="./assets/img/facebook.png" alt="">
                <img src="./assets/img/linkedin.png" alt="">
            </section>
    </footer>


<!-- Test accès BdD :  -->
    <?php foreach($datas as $data): ?>
        <article>
            <p><?= $data->getId_publication() ?></p>
            <p><?= $data->getTitle() ?></p>
            <p><?= $data->getArticle() ?></p>
        </article>
    <?php endforeach; ?>



    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/burger.js"></script>
    <script src="./assets/js/slider.js"></script>

    <script src="
        https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>


</body>

</html>




