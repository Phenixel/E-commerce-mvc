<div class="content">
    <div class="video-container">
        <video id="video_bg" class="video-player img-fluid" autoplay disableremoteplayback="" style="width: 100%; height: 100%;" spellcheck="false" muted>
            <source src="<?= BASE_DIR ?>/staticfiles/medias/image_fond_flip.webm" type="video/mp4">
        </video>
        <h1 class="video-overlay h1-lst_articles">Liste des <br> smartphones</h1>
    </div>

    <div class="container">
        <div class="text-center m-4">
            <?php foreach($categories as $categorie): ?>
                <a href="<?= BASE_DIR ?>/categories/boutique/<?= $categorie['id'] ?>" type="button" class="btn btn-primary category-button"><?= $categorie['nom'] ?></a>
            <?php endforeach ?>
        </div>

        <div id="list-of-article" class="row row-cols-auto" style="justify-content: center;">
            <!--      Liste des articles selon les catégories      -->
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
                                <li class="list-group-item h6"><?= $article['prix'] ?>,00 €</li>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>