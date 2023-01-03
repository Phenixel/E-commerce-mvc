<?php
$prixTotal = 0;
?>

<main class="content">
    <h1 class="display-1 h1 text-center">Panier</h1>
    <hr class="mb-5">
    <?php if (isset($panier)): ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Nom</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($panier as $article): ?>
            <tr>
                <th scope="row"><a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" style="text-decoration: none; color: #00002d"><img src="<?= $article['images'] ?>" alt="<?= $article['nom'] ?>"></a></th>
                <th scope="row"><a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" style="text-decoration: none; color: #00002d"><?= $article['nom'] ?></a></th>
                <td><p><?= $_SESSION['cart'][$article['id']]["quantite"] ?></p></td>
                <td>
                    <p><?= $article['prix'] ?>,00€ x <?= $_SESSION['cart'][$article['id']]["quantite"] ?></p>
                    <br>
                    <p class="fw-bolder"><?= $article['prix'] * $_SESSION['cart'][$article['id']]["quantite"] ?>,00€</p>
                </td>
                <td>
                    <button id="<?= $article['id'] ?>" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#idConfirmDelete"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
            <?php $prixTotal += $article['prix'] * $_SESSION['cart'][$article['id']]["quantite"] ?>
        <?php endforeach ?>
        </tbody>
    </table>

    <div class="d-flex">
        <button onclick="location.href='<?= BASE_DIR ?>/paniers/checkout'" type="button" class="btn btn-primary" style="max-height: 45px">Confirmer le panier</button>
        <div class="prix ms-auto">
            <h4 class="h4 text-right" style="text-align: right"><?= $prixTotal ?>,00 € (HT)</h4>
            <h4 class="h4 text-right"><?= $prixTotal * 1.2 ?>,00 € (TTC)</h4>
        </div>
    </div>
    <?php else: ?>
        <div class="text-center">
            <h5 class="h5 text-center">Le panier est vide.</h5>
            <a href="<?= BASE_DIR ?>/articles" type="button" class="btn btn-primary m-5">Retourner à la boutique</a>
        </div>
    <?php endif; ?>
</main>

<!-- Confirmation -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="idConfirmDelete" tabindex="-1" aria-labelledby="confirmDelete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="confirmDelete">Confirmer la suppression ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="<?= BASE_DIR ?>/<?= $article['images'] ?>" alt="image article <?= $article['nom'] ?>">
                    </div>
                    <div class="col-md-6">
                        <h2 class="h2"><?= $article['nom'] ?></h2>
                        <h5>Quantité : <?= $_SESSION['cart'][$article['id']]["quantite"] ?></h5>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" onclick="location.href='<?= BASE_DIR ?>/paniers/delete/<?= $article['id'] ?>'">Confirmer <i class="fa-regular fa-trash-can"></i></button>
            </div>
        </div>
    </div>
</div>