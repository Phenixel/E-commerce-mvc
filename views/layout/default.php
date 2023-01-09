<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= BASE_DIR ?>/staticfiles/medias/Favicon.png">

    <title><?php
                if ($_GET["p"] != ""){
                    echo ucfirst(str_replace("/", " - ", $_GET["p"])) . " | Samsung";
                } else {
                    echo "Bienvenu sur Samsung" ;
                }
            ?>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_DIR ?>/staticfiles/css/style.css">

    <script src="https://kit.fontawesome.com/1999efdd56.js" crossorigin="anonymous"></script>
</head>
<body>

<header class="header">
    <div class="text-in-header">
        <h1>Ouverture prochaine !</h1>
        <h6>Ce site est évidement fake</h6>
    </div>
    <div class="close-ban">
        <button type="button" class="btn-close btn-close-white" aria-label="Close" id="close-ban-x"></button>
    </div>
</header>
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_DIR ?>"><img class="logo_nav" src="<?= BASE_DIR ?>/staticfiles/medias/Samsung-Logo.png" alt="Logo samsung" style="<?php if($_GET["p"] == "") echo "height: 60px" ?>"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link <?php if($_GET["p"] == "articles") echo "active" ?>" aria-current="page" href="<?= BASE_DIR ?>/articles">Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($_GET["p"] == "main/about") echo "active" ?>" aria-current="page" href="<?= BASE_DIR ?>/main/about">A propos</a>
                </li>
                <?php if (isset($_SESSION['user']) && $_SESSION['user']["power"] == "admin"): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($_GET["p"] == "articles/ajouter_article" || $_GET["p"] == "utilisateurs") echo "active" ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Administration
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item">Interface d'administration</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <a class="dropdown-item <?php if($_GET["p"] == "articles/ajouter_article") echo "active" ?>" aria-current="page" href="<?= BASE_DIR ?>/articles/ajouter_article">Ajouter un article</a>
                        <a class="dropdown-item <?php if($_GET["p"] == "utilisateurs") echo "active" ?>" aria-current="page" href="<?= BASE_DIR ?>/utilisateurs">Liste des utilisateurs</a>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <?php if (isset($_SESSION['user'])): ?>
            <button type="button" class="btn btn-primary" id="btn-user-infos" data-bs-container="body" data-bs-toggle="popover" data-bs-title="Vos informations" data-bs-placement="bottom" data-bs-content="Nom : <?= $_SESSION['user']["name"] ?> | Mail : <?= $_SESSION['user']["email"] ?>">
                <i class="fa fa-solid fa-user"></i>
            </button>
            <a class="user ico_nav" href="<?= BASE_DIR ?>/utilisateurs/logout"><i class="fa-solid fa-right-from-bracket"></i></a>
        <?php else: ?>
            <a type="button" class="btn btn-primary" href="<?= BASE_DIR ?>/utilisateurs/login">Se connecter</a>
        <?php endif; ?>
        <a class="pannier ico_nav position-relative" href="<?= BASE_DIR ?>/paniers">
            <i class="fa fa-cart-shopping"></i>
            <?php if (count($_SESSION['cart']) != 0 ): ?>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php
                    echo count($_SESSION['cart']);
                ?>
            <span class="visually-hidden">Article dans le panier</span>
            <?php endif; ?>
        </a>
    </div>
</nav>

<div class="hero-div">
    <?= $content ?>
</div>

<footer class="py-3 footer">
    <ul class="nav justify-content-center pb-3 mb-3">
        <li class="nav-item"><a href="<?= BASE_DIR ?>/main/cgv" class="nav-link px-2 text-muted">CGV</a></li>
        <li class="nav-item"><a href="<?= BASE_DIR ?>/main/cgu" class="nav-link px-2 text-muted">CGU</a></li>
        <li class="nav-item"><a href="<?= BASE_DIR ?>/main/about" class="nav-link px-2 text-muted">A propos</a></li>
    </ul>
    <p class="text-center text-muted">&copy;Copyright Phenixel <?php echo date("Y"); ?></p>
</footer>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="<?= BASE_DIR ?>/staticfiles/js/functions.js"></script>

</body>
</html>