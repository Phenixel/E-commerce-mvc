<div class="content p-5" style="width: 40%">
    <h1 class="h1 text-center">Inscrivez vous</h1>

    <?php if (isset($error)): ?>
        <p class="p text-danger text-center"><?= $error ?></p>
    <?php endif; ?>

    <form class="form mt-4" method="POST" action="<?= BASE_DIR ?>/utilisateurs/signup">
        <div class="form-group mb-4">
            <label for="inputNom" class="text-right">Nom</label>
            <input required maxlength="250" type="text" class="form-control mt-2" id="inputNom" name="nomUser" placeholder="Entrez votre nom">
        </div>
        <div class="form-group mb-4">
            <label for="inputContent" class="text-right">Email</label>
            <input required maxlength="500" type="email" class="form-control" id="inputEmail" name="mailUser" placeholder="Entrez votre mail">
        </div>
        <div class="form-group mb-4">
            <label for="inputPassword" class="text-right">Mot de passe</label>
            <div class="input-group">
                <input required type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Entrez votre mot de passe">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <a class="password-toggle" data-toggle="password-toggle"><i class="far fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button type="button" data-bs-toggle="modal" data-bs-target="#idAddUser" class="btn btn-primary mt-4 ms-auto">Créer votre compte</button>
        </div>

        <!-- Confirmation -->
        <div class="modal fade" id="idAddUser" tabindex="-1" aria-labelledby="addToBdd" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addToCart">Confirmer la création de votre compte</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Confirmer <i class="fa-solid fa-circle-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

<script>
    document.querySelector('.password-toggle').addEventListener('click', function(e) {
        e.preventDefault();
        var input = document.getElementById('inputPassword');
        if (input.type === 'password') {
            input.type = 'text';
        } else {
            input.type = 'password';
        }
    });
</script>