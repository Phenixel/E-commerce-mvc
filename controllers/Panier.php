<?php

class Panier extends Controller {
    public function index(){
        $this->loadModel('Panier');
        $this->render('index');
    }

}