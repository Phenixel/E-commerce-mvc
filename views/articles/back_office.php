<div class="content">
    <h1 class="display-1 h1 text-center">Back office</h1>
    <hr class="mb-5">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Nom</th>
            <th scope="col">Prix</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($articles as $article): ?>
            <tr>
                <td>
                    <a href="<?= BASE_DIR ?>/articles/details/<?= $article['slug'] ?>" style="text-decoration: none; color: black">
                        <img src="<?= BASE_DIR . "/" . $article['images'] ?>" alt="<?= $article['nom'] ?>">
                    </a>
                </td>
                <td>
                    <h5><?= $article['nom'] ?></h5>
                    <p>
                        <?= $article['content']; ?>
                    </p>
                </td>
                <td style="width: 10%">
                    <p><?= $article['prix'] ?>,00 €</p>
                </td>
                <td style="width: 15%">
                    <button id="<?= $article['id'] ?>" type="button" class="btn btn-warning" onclick="location.href='<?= BASE_DIR . "/articles/modifier_article/" . $article['slug'] ?>'"><i class="fa-solid fa-pen"></i></button>
                    <button id="<?= $article['id'] ?>" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#idConfirmDelete<?= $article['id'] ?>"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>

            <!-- Confirmation -->
            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="idConfirmDelete<?= $article['id'] ?>" tabindex="-1" aria-labelledby="confirmDelete" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="confirmDelete">Confirmer la suppression ?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body d-flex">
                            <img src="<?= BASE_DIR . "/" . $article['images'] ?>" alt="<?= $article['nom'] ?>">
                            <h5><?= $article['nom'] ?></h5>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-danger" onclick="location.href='<?= BASE_DIR ?>/articles/delete/<?= $article['id'] ?>'">Confirmer <i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="..." class="rounded me-2">
        <strong class="me-auto">Article supprimé</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        L'article a bien été supprimé !
    </div>
</div>


<div class="toast-container position-static">
<?php if (isset($_SESSION['success'])): ?>
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="..." class="rounded me-2">
            <strong class="me-auto">Article supprimé</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            L'article a bien été supprimé !
        </div>
    </div>
<?php unset($_SESSION['success']); endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="..." class="rounded me-2">
            <strong class="me-auto">Erreur</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            L'article n'a pas pu être supprimé !
        </div>
    </div>
<?php unset($_SESSION['error']); endif; ?>
</div>

<script>
    const toastLiveExample = document.getElementById('liveToast');
    const toast = new bootstrap.Toast(toastLiveExample)
    toast.show()
</script>
