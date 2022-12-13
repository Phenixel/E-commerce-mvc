<?php

class Pannier extends Controller {

    public function index(){
        $this->loadModel('Pannier');

        $pannier = $this->Pannier->getAll();

        $this->render('index', compact('pannier'));
    }

}