<?php

class Paniers extends Controller {
    /**
     * Cette méthode affiche la liste des articles dans le panier
     *
     * @return void
     */
    public function index(){
        $this->loadModel('Panier');

        $panier = $this->Panier->getCartArticles();

        $this->render('index', compact("panier"));
    }

}