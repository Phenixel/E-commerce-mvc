<div class="content">

    <h1 class="h1 text-center"><?= $categories[0]["categorie"] ?></h1>

    <hr>

    <div class="container">
        <div class="row row-cols-auto" style="justify-content: center;">
            <?php foreach($categories as $article): ?>
                <div class="col">
                    <a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" style="text-decoration: none; color: black">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?= BASE_DIR ?>/<?= $article['images'] ?>" alt="<?= $article['nom'] ?>">
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
                                <li class="list-group-item"><?= $article['prix'] ?>,00 €</li>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>