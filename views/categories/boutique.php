<div class="content">

    <?php $idCateg =  $nameCategorie[str_replace("categories/boutique/", "", $_GET["p"]) - 1]; ?>

    <h1 class="h1 text-center"><?= $idCateg["nom"] ?></h1>

    <hr>

    <div class="text-center m-4">
        <a href="<?= BASE_DIR ?>/articles" type="button" class="btn btn-primary category-button">Liste des articles</a>
        <?php foreach($nameCategorie as $categorie): ?>
<!--            <a href="--><?php //= BASE_DIR ?><!--/categories/boutique/--><?php //= $categorie['id'] ?><!--" type="button" class="btn btn-primary category-button">--><?php //= $categorie['nom'] ?><!--</a>-->
            <button <?php if ($idCateg["id"] == $categorie['id']) echo "disabled"; ?> onclick="location.href='<?= BASE_DIR ?>/categories/boutique/<?= $categorie['id'] ?>'" type="button" class="btn btn-primary category-button"><?= $categorie['nom'] ?></button>
        <?php endforeach ?>
    </div>

    <div class="container">
        <div class="row row-cols-auto" style="justify-content: center;">
            <?php if ($categories != array()): ?>
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
            <?php else: ?>
                <h5 class="h4 text-center">Pas de produit dans cette catégorie.</h5>
            <?php endif; ?>
        </div>
    </div>
</div>