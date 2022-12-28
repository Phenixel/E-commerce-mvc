<?php

class Pannier extends Controller {

    public function index(){
        $this->loadModel('Pannier');
        $this->render('index');
    }

}