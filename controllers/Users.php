<?php

class Users extends Controller {
    /**
     * Cette méthode affiche la liste des Utilisateurs
     *
     * @return void
     */
    public function index(){
        $this->loadModel('User');

        $users = $this->User->getAll();

        $this->render('index', compact('users'));
    }
}