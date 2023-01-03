<?php
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#idAddToCart" onclick="prepareConfirm($('#quantite').val())">Ajouter au panier <i class="fa fa-cart-shopping"></i></button>
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

<!-- Confirmation -->
<div class="modal fade" id="idAddToCart" tabindex="-1" aria-labelledby="addToCart" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addToCart">Confirmer l'ajout au panier ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="<?= BASE_DIR ?>/<?= $article['images'] ?>" alt="image article <?= $article['nom'] ?>">
                    </div>
                    <div class="col-md-6">
                        <h1 class="h1"><?= $article['nom'] ?></h1>
                        <h5>Quantité : <span id="quantite-affichage"></span></h5>
                        <h4 id="prix-total"></h4>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary" onclick="addToCart(<?= $article['id'] ?>)">Confirmer <i class="fa fa-cart-shopping"></i></button>
            </div>
        </div>
    </div>
</div>

<script>
    function prepareConfirm(quantite) {
        $('#quantite-affichage').text(quantite);

        const prix = <?= $article['prix'] ?>;
        const prixTotal = quantite * prix;
        $('#prix-total').text(prixTotal + " €");
    }

    function addToCart(articleId){
        $.ajax({
            url: '<?= BASE_DIR ?>/views/paniers/add-to-cart.php',
            type: 'POST',
            data: {
                articleId: articleId,
                quantite: $('#quantite').val()
            },
            success: function(response){
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Article ajouté',
                    showConfirmButton: false,
                    timer: 1000
                })
                setTimeout(function() {
                    window.location.replace("<?= BASE_DIR ?>/paniers");
                }, 1200);

            }
        });
    }

</script>