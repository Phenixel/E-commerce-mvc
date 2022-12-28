<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
            <div class="text-center shadow">
                <img class="img-fluid m-5" src="<?= BASE_DIR ?>/<?= $article['images'] ?>" alt="image article <?= $article['nom'] ?>">
            </div>
            <div class="text-center mt-3">
                <button type="button" class="btn btn-primary btn-add-cart float-right">Ajouter au panier <i class="fa fa-cart-shopping"></i></button>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="text-start div-content-text p-5 wow fadeIn shadow">
                <h1 class="h1 mb-0 text-primary"><?= $article['nom'] ?></h1>
                <p class="mb-1 mt-2"><?= $article['content'] ?></p>
                <h5 class="h5 mb-3 text-primary"><?= $article['prix'] ?>,00€</h5>
                <p><?= $article['description'] ?></p>
            </div>
        </div>
    </div>
</div>
