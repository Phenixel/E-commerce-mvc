<?php
session_start();

class Paniers extends Controller {
    /**
     * Cette méthode affiche la liste des articles dans le panier
     *
     * @return void
     */
    public function index(){
        if (!empty($_SESSION['cart'])){
            $this->loadModel('Panier');
            $panier = $this->Panier->getCartArticles();
            $this->render('index', compact("panier"));
        } else {
            $this->render('index');
        }
    }

    public function checkout(){
        $this->loadModel('Panier');

        $check = $this->Panier->getCartArticles();

        $this->render('index', compact("check"));
    }

    public function delete(int $id){
        $this->render('delete', compact("id"));
    }

}