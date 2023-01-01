<?php
//session_start();

?>

<main class="content">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($panier as $article): ?>
            <tr>
                <th scope="row"><?= $article['slug'] ?></th>
                <td><?= $article['nom'] ?></td>
                <td><?= $article['prix'] ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</main>