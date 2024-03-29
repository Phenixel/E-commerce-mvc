<?php

class Articles extends Controller{
    /**
     * Méthode permettant d'afficher la liste des articles
     *
     * @return void
     */
    public function index(){
        $this->loadModel('Article');
        $this->loadModel('Categorie');

        $articles = $this->Article->getArticleWithCategorie();
        $categories = $this->Categorie->getAll();

        $this->render('index', compact('articles', 'categories'));
    }

    /**
     * Méthode permettant d'afficher un article à partir de son slug
     *
     * @param string $slug
     * @return void
     */
    public function details(string $slug){
        $this->loadModel('Article');
        $article = $this->Article->findBySlug($slug);
        $this->render('details', compact('article'));
    }

    /**
     * Méthode permettant d'afficher la page d'ajout d'un article
     *
     * @return void
     */
    public function ajouter_article(){
        $this->forAdmin();
        $this->loadModel("Article");
        $this->loadModel("Categorie");

        $categories = $this->Categorie->getAll();

        if (isset($_POST['nomArticle']) && isset($_POST['contentArticle']) && isset($_POST['descArticle']) && isset($_POST['imageArticle']) && isset($_POST['prixArticle']) && isset($_POST['idCategorie'])) {
            // Tous les champs ont été remplis
            $nom = $_POST['nomArticle'];
            $content = $_POST['contentArticle'];
            $description = $_POST['descArticle'];
            $image = $_POST['imageArticle'];
            $prix = $_POST['prixArticle'];
            $idCategorie = $_POST['idCategorie'];

            $this->Article->addNewArticle($nom, $content, $description, $image, $prix, $idCategorie);
            header("location:". BASE_DIR ."/articles/back_office");
        } else {
            $this->render('add_article', compact('categories'));
        }
    }

    /**
     * Méthode permettant d'afficher un article pour le modifier à partir de son slug
     *
     * @param string $slug
     * @return void
     */
    public function modifier_article($slug){
        $this->forAdmin();
        $this->loadModel("Article");
        $this->loadModel("Categorie");

        $categories = $this->Categorie->getAll();
        $article = $this->Article->findBySlug($slug);

        if (isset($_POST['nomArticle']) && isset($_POST['contentArticle']) && isset($_POST['descArticle']) && isset($_POST['imageArticle']) && isset($_POST['prixArticle']) && isset($_POST['idCategorie'])) {
            // Tous les champs ont été remplis
            $nom = $_POST['nomArticle'];
            $content = $_POST['contentArticle'];
            $description = $_POST['descArticle'];
            $image = $_POST['imageArticle'];
            $prix = $_POST['prixArticle'];
            $idCategorie = $_POST['idCategorie'];

            $this->Article->updateArticle($article["id"], $nom, $content, $description, $image, $prix, $idCategorie);
            header("location:". BASE_DIR ."/articles/back_office");
        } else {
            $this->render('update_article', compact('categories', 'article'));
        }
    }

    /**
     * Méthode permettant d'afficher la page de back office
     *
     * @return void
     */
    public function back_office(){
        $this->forAdmin();
        $this->loadModel("Article");

        $articles = $this->Article->getArticleWithCategorie();

        $this->render('back_office', compact('articles'));
    }

    /**
     * Méthode permettant de supprimer un article
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id){
        $this->forAdmin();
        $this->loadModel("Article");

        $deleteSuccess = $this->Article->deleteArticle($id);
        if ($deleteSuccess) {
            $_SESSION['success'] = "L'article a été supprimé avec succès.";
        } else {
            $_SESSION['error'] = "Une erreur s'est produite lors de la suppression de l'article.";
        }

        header("location:". BASE_DIR ."/articles/back_office");
    }
}