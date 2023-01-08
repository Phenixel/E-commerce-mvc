<?php

class Categories extends Controller{
    /**
     * Cette méthode affiche la liste des categories
     *
     * @return void
     */
    public function index(){
        $this->loadModel('Categorie');

        $categories = $this->Categorie->getAll();

        $this->render('index', compact('categories'));
    }

    /**
     * Méthode permettant d'afficher la page d'une categorie
     *
     * @param string $nom
     * @return void
     */
    public function boutique(int $id){
        $this->loadModel('Categorie');
        $categories = $this->Categorie->getArticleFromCategorie($id);
        $nameCategorie = $this->Categorie->getAll();
        $this->render('boutique', compact('categories', 'nameCategorie'));
    }
}