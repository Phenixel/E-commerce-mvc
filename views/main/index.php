<div class="carousel-content">
    <div id="carouselPresentation" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselPresentation" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselPresentation" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselPresentation" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= BASE_DIR ?>/staticfiles/medias/Samsung-Galaxy-A53.jpg" class="d-block w-100" alt="image de présentation samsung">
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h5>First slide label</h5>-->
<!--                    <p>Some representative placeholder content for the first slide.</p>-->
<!--                </div>-->
            </div>
            <div class="carousel-item">
                <img src="<?= BASE_DIR ?>/staticfiles/medias/Samsung-Galaxy-S21.jpg" class="d-block w-100" alt="...">
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h5>Second slide label</h5>-->
<!--                    <p>Some representative placeholder content for the second slide.</p>-->
<!--                </div>-->
            </div>
            <div class="carousel-item">
                <img src="<?= BASE_DIR ?>/staticfiles/medias/GalaxyS21_Triplette.jpg" class="d-block w-100" alt="...">
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h5>Third slide label</h5>-->
<!--                    <p>Some representative placeholder content for the third slide.</p>-->
<!--                </div>-->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPresentation" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPresentation" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<main class="content">
    <div class="video-container">
        <video id="video_bg" class="video-player img-fluid" autoplay disableremoteplayback="" style="width: 100%; height: 100%;" spellcheck="false" muted>
            <source src="<?= BASE_DIR ?>/staticfiles/medias/image_fond_fold.webm" type="video/mp4">
        </video>
        <h3 class="video-overlay h3-lst_articles">Découvrez nos articles <br> directement dans <br> notre boutique</h3>
    </div>

    <div class="container">
        <div class="row row-cols-auto" style="justify-content: center;">
            <?php foreach($articles as $article): ?>
                <div class="col">
                    <a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" style="text-decoration: none; color: black">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?= $article['images'] ?>" alt="<?= $article['nom'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $article['nom'] ?></h5>
                                <p class="card-text content-shortDesc">
                                    <?php
                                    $maxLength = 60;
                                    if (strlen($article['content']) > $maxLength) {
                                        $lastSpace = strrpos(substr($article['content'], 0, $maxLength), ' ');
                                        $truncatedString = substr($article['content'], 0, $lastSpace);
                                        echo $truncatedString . '...';
                                    } else {
                                        echo $article['content'];
                                    }
                                    ?>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <a href="<?= BASE_DIR ?>/categories/boutique/<?= $article['idCat'] ?>" style="text-decoration: none;"><li class="list-group-item affiche-categorie"><?= $article['categorie'] ?></li></a>
                                <li class="list-group-item h6"><?= $article['prix'] ?>,00 €</li>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>