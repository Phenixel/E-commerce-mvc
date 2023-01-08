<?php

class Articles extends Controller{
    public function index(){
        $this->loadModel('Article');
        $this->loadModel('Categorie');

        if (isset($_POST['categoryId'])) {
            // Si une catégorie est sélectionnée, affichez uniquement les articles de cette catégorie
            $articles = $this->Article->getArticlesByCategoryId($_POST['categoryId']);
        } else {
            // Affichez tous les articles
            $articles = $this->Article->getArticleWithCategorie();
        }

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
}