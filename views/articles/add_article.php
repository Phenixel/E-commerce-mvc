<div class="content p-5">
    <h1 class="h1 text-center">Ajouter un article</h1>

    <form class="form mt-4" method="POST" action="<?= BASE_DIR ?>/articles/ajouter_article">
        <div class="form-group mb-4">
            <label for="inputNom" class="text-right">Nom de l'article</label>
            <input required maxlength="250" type="text" class="form-control mt-2" id="inputNom" name="nomArticle" placeholder="Entrez le nom de l'article">
        </div>
        <div class="form-group mb-4">
            <label for="inputContent" class="text-right">Courte description de l'article</label>
            <input required maxlength="500" type="text" class="form-control" id="inputContent" name="contentArticle" placeholder="Entrez une courte description de l'article">
        </div>
        <div class="form-group mb-4">
            <label for="inputDescription" class="text-right">Description de l'article</label>
            <textarea required maxlength="500" class="form-control" id="inputDescription" name="descArticle" rows="3" placeholder="Entrez la description de l'article"></textarea>
        </div>
        <div class="form-group mb-4">
            <label for="inputImage" class="text-right">Image de l'article</label>
            <input required maxlength="250" type="text" class="form-control" id="inputImage" name="imageArticle" placeholder="Entrez l'URL de l'image de l'article">
        </div>
        <div class="form-group mb-4">
            <label for="inputPrix" class="text-right">Prix de l'article</label>
            <input required maxlength="11" type="number" class="form-control" id="inputPrix" name="prixArticle" placeholder="Entrez le prix de l'article">
        </div>
        <div class="form-group mb-4">
            <label for="inputCategorie" class="text-right">Catégorie de l'article</label>
            <select class="form-control" id="inputCategorie" name="idCategorie">
                <?php foreach ($categories as $categorie): ?>
                    <option value="<?= $categorie["id"] ?>"><?= $categorie["nom"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="d-flex">
            <button type="button" data-bs-toggle="modal" data-bs-target="#idAddArticle" class="btn btn-primary mt-4 ms-auto">Ajouter l'article</button>
        </div>

    <!-- Confirmation -->
    <div class="modal fade" id="idAddArticle" tabindex="-1" aria-labelledby="addToBdd" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addToCart">Confirmer l'ajout de l'article ?</h1>
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

