<?php

class Main extends Controller{

    public function index(){
        $this->loadModel('Article');
        $articles = $this->Article->getArticleWithCategorie();
        $this->render('index', compact('articles'));
    }

    public function cgv(){
        $this->render('cgv');
    }

    public function cgu(){
        $this->render('cgu');
    }

    public function about(){
        $this->render('about');
    }
}