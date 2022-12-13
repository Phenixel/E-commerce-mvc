<div class="content">
    <div class="all-cards">
        <?php foreach($articles as $article): ?>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $article['images'] ?>" alt="<?= $article['nom'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $article['nom'] ?></h5>
                    <p class="card-text"><?= $article['content'] ?></p>
                    <a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>

        <?php endforeach ?>
    </div>
</div>