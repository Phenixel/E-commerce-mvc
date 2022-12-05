<?php

class Users extends Controller {
    /**
     * Cette méthode affiche la liste des Utilisateurs
     *
     * @return void
     */
    public function index(){
        $this->loadModel('User');

        $users = $this->getAll();

        $this->render('index', compact('users'));
    }
}