<?php
$prixTotal = 0;
?>

<main class="content">
    <h1 class="display-1 h1 text-center">Checkout</h1>
    <hr class="mb-5">
    <?php if (isset($check)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($check as $article): ?>
                <tr>
                    <th scope="row"><a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" style="text-decoration: none; color: #00002d"><?= $article['nom'] ?></a></th>
                    <td><p><?= $_SESSION['cart'][$article['id']]["quantite"] ?></p></td>
                    <td><p class="fw-bolder"><?= $article['prix'] * $_SESSION['cart'][$article['id']]["quantite"] ?>,00€</p></td>
                </tr>
                <?php $prixTotal += $article['prix'] * $_SESSION['cart'][$article['id']]["quantite"] ?>
            <?php endforeach ?>
            </tbody>
        </table>

        <div class="d-flex">
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

    <?php
    if(isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
        echo "votre panier a bien été réinitialisé";
    }
    ?>
</main>