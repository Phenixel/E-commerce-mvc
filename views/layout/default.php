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
        }
        else
            echo "Bienvenu sur Samsung"
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
        <i class="fas fa-duotone fa-circle-xmark" id="close-ban-x"></i>
    </div>
</header>
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_DIR ?>"><img class="logo_nav" src="<?= BASE_DIR ?>/staticfiles/medias/Samsung-Logo.png" alt="Logo samsung"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link <?php if($_GET["p"] == "articles") echo "active" ?>" aria-current="page" href="<?= BASE_DIR ?>/articles">Liste des articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($_GET["p"] == "users") echo "active" ?>" aria-current="page" href="<?= BASE_DIR ?>/users">Liste des users</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
        <a class="user ico_nav" href="#"><i class="fa fa-solid fa-user"></i></a>
        <a class="pannier ico_nav" href="<?= BASE_DIR ?>/pannier"><i class="fa fa-cart-shopping"></i></a>
    </div>
</nav>

<div class="hero-div">
    <?= $content ?>
</div>

<footer class="py-3 footer">
    <ul class="nav justify-content-center pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Accueil</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Liste des articles</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">CGV</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">CGU</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">A propos</a></li>
    </ul>
    <p class="text-center text-muted">&copy;Copyright Phenixel <?php echo date("Y"); ?></p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="<?= BASE_DIR ?>/staticfiles/js/functions.js"></script>
</body>
</html>