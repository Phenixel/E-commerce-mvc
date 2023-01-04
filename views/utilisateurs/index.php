<main class="content">
    <table class="table table-striped">
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
                <td>
                    <input type="password" value="<?= $user['password'] ?>" disabled id="password-<?= $user['id'] ?>">
                    <i class="fa-solid fa-eye" data-password-id="<?= $user['id'] ?>"></i>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</main>

<script>
    const eyeIcons = document.querySelectorAll('.fa-eye');
    eyeIcons.forEach(icon => {
        icon.addEventListener('click', () => {
            const passwordId = icon.getAttribute('data-password-id');
            const passwordInput = document.getElementById(`password-${passwordId}`);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    });
</script>