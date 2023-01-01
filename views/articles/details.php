<?php
session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

?>

<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
            <div class="beauty-card text-center shadow">
                <img class="img-fluid m-5" src="<?= BASE_DIR ?>/<?= $article['images'] ?>" alt="image article <?= $article['nom'] ?>">
            </div>
            <div class="text-center mt-3">
                <div class="btn-group" role="group" aria-label="Quantité">
                    <button type="button" class="btn btn-primary btn-add-cart" onclick="addToCart(<?= $article['id'] ?>)">Ajouter au panier <i class="fa fa-cart-shopping"></i></button>
                    <input value="1" min="1" type="number" name="quantite" id="quantite" class="form-control form-control-sm" style="width: 40%;">
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="beauty-card text-start div-content-text p-5 fadeIn shadow">
                <h1 class="h1 mb-0 text-primary"><?= $article['nom'] ?></h1>
                <p class="mb-1 mt-2"><?= $article['content'] ?></p>
                <h5 class="h5 mb-3 text-primary"><?= $article['prix'] ?>,00€</h5>
                <p><?= $article['description'] ?></p>
            </div>
        </div>
    </div>
</div>

<script>
    function addToCart(articleId){
        $.ajax({
            url: '<?= BASE_DIR ?>/views/paniers/add-to-cart.php',
            type: 'POST',
            data: {
                articleId: articleId,
                quantite: $('#quantite').val()
            },
            success: function(response){
                alert('Article ajouté au panier !');
            }
        });
    }

</script>