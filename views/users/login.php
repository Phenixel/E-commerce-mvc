<div class="content p-5" style="width: 40%">
    <h1 class="h1 text-center">Connectez-vous</h1>

    <form class="form mt-4" method="POST" action="<?= BASE_DIR ?>/users/login">
        <div class="form-group mb-4">
            <label for="inputEmail" class="text-right">Adresse email</label>
            <input type="email" class="form-control mt-2" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Entrez votre email">
        </div>
        <div class="form-group">
            <label for="inputPassword" class="text-right">Mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Entrez votre mot de passe">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <a href="#" class="password-toggle" data-toggle="password-toggle"><i class="far fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary mt-4 ms-auto">Se connecter</button>
        </div>
        <?php if (isset($error)): ?>
            <p class="p text-danger"><?= $error ?></p>
        <?php endif; ?>
    </form>

</div>