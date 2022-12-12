<main class="content">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Mot de passe</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <th scope="row"><?= $user['id'] ?></th>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><input type="password" value="<?= $user['password'] ?>"></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</main>