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

    public function login(){
        $this->loadModel('User');

        if (isset($_SESSION['user'])){
            header('Location: '.BASE_DIR);
        }else{
            if (isset($_POST['inputEmail'])){
                // Récupération des données du formulaire
                $email = $_POST['inputEmail'];
                $pwd = $_POST['inputPassword'];

                // Appel de la méthode getConnect du modèle User
                $user = $this->User->getConnect($email, $pwd);

                // Si la méthode getConnect a renvoyé null, cela signifie que l'utilisateur n'a pas été trouvé
                if($user === null){
                    $error = "Adresse e-mail ou mot de passe incorrect";

                    // Affichage d'un message d'erreur
                    $this->render('login', compact("error"));
                }else{
                    // Si l'utilisateur a été trouvé, on le connecte en enregistrant ses informations dans la session
                    $_SESSION['user'] = $user;

                    if (isset($_SERVER['HTTP_REFERER'])){
                        // Redirection vers l'URL de la page précédemment visitée par l'utilisateur
                        header('Location: '.$_SERVER['HTTP_REFERER']);
                    }else{
                        // Redirection vers la page d'accueil
                        header('Location: '.BASE_DIR);
                    }
                }
            }else{
                $error = "";
                $this->render('login', compact("error"));
            }
        }
    }


    public function logout(){
        unset($_SESSION['user']);
        header('Location: '.BASE_DIR);
    }
}