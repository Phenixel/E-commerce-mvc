<?php
session_start();

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
        <?php foreach($_SESSION['cart'] as $id): ?>
            <tr>
                <th scope="row"><?= $id ?></th>
<!--                <td>--><?php //= $user['name'] ?><!--</td>-->
<!--                <td>--><?php //= $user['email'] ?><!--</td>-->
<!--                <td>-->
<!--                    <input type="password" value="--><?php //= $user['password'] ?><!--" disabled id="password---><?php //= $user['id'] ?><!--">-->
<!--                    <i class="fa-solid fa-eye" data-password-id="--><?php //= $user['id'] ?><!--"></i>-->
<!--                </td>-->
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</main>