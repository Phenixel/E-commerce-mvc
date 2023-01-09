<div class="content">
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
                <td>
                    <p><?= $article['prix'] ?>,00 €</p>
                </td>
                <td>
                    <button id="<?= $article['id'] ?>" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#idModified"><i class="fa-solid fa-pen"></i></button>
                    <button id="<?= $article['id'] ?>" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#idConfirmDelete"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Confirmation -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="idConfirmDelete" tabindex="-1" aria-labelledby="confirmDelete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="confirmDelete">Confirmer la suppression ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" onclick="location.href='<?= BASE_DIR ?>/articles/delete/<?= $article['id'] ?>'">Confirmer <i class="fa-regular fa-trash-can"></i></button>
            </div>
        </div>
    </div>
</div>