<main class="content">
    <h1 class="display-1 h1 text-center">Panier</h1>
    <hr class="mb-5">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Nom</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($panier as $article): ?>
            <tr>
                <th scope="row"><a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" style="text-decoration: none; color: #00002d"><img src="<?= $article['images'] ?>" alt="<?= $article['nom'] ?>"></a></th>
                <th scope="row"><a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" style="text-decoration: none; color: #00002d"><?= $article['nom'] ?></a></th>
                <td><input disabled class="form-control form-control-sm" type="number" min="0" value="<?= $_SESSION['cart'][$article['id']]["quantite"] ?>" style="width: 40%;" ></td>
                <td>
                    <p><?= $article['prix'] ?>,00€ x <?= $_SESSION['cart'][$article['id']]["quantite"] ?></p>
                    <br>
                    <p class="fw-bolder"><?= $article['prix'] * $_SESSION['cart'][$article['id']]["quantite"] ?>,00€</p>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</main>