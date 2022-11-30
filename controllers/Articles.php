<?php

class Articles extends Controller{
    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function index(){
        $this->loadModel('Article');

        $articles = $this->getAll();

        $this->render('index', compact('articles'));
    }

    /**
     * Méthode permettant d'afficher un article à partir de son slug
     *
     * @param string $slug
     * @return void
     */
    public function lire(string $slug){
        $this->loadModel('Article');
        $article = $this->findBySlug($slug);
        $this->render('lire', compact('article'));
    }
}