<?php

class Articles extends Controller{
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
            header("location:". BASE_DIR ."/articles");
        } else {
            $this->render('add_article', compact('categories'));
        }
    }

    public function back_office(){
        $this->forAdmin();
        $this->loadModel("Article");

        $articles = $this->Article->getArticleWithCategorie();

        $this->render('back_office', compact('articles'));
    }

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