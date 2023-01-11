<?php

class Utilisateurs extends Controller {
    /**
     * Cette méthode affiche la liste des Utilisateurs
     *
     * @return void
     */
    public function index(){
        $this->forAdmin();
        $this->loadModel('Utilisateur');

        $users = $this->Utilisateur->getAll();
        $this->render('index', compact('users'));
    }

    public function login(){
        $this->loadModel('Utilisateur');

        if (isset($_SESSION['user'])){
            header('Location: '.BASE_DIR);
        }else{
            if (isset($_POST['inputEmail'])){
                // Récupération des données du formulaire
                $email = $_POST['inputEmail'];
                $pwd = $_POST['inputPassword'];

                // Appel de la méthode getConnect du modèle User
                $user = $this->Utilisateur->getConnect($email, $pwd);

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

    public function signup(){
        $this->loadModel("Utilisateur");

        if (isset($_POST['nomUser']) && isset($_POST['mailUser']) && isset($_POST['inputPassword'])) {
            // Je vérifie si le mail existe déjà
            if ($this->Utilisateur->ifEmailExist($_POST['mailUser']) == null){
                // Tous les champs ont été remplis
                $nom = $_POST['nomUser'];
                $mail = $_POST['mailUser'];
                $pwd = $_POST['inputPassword'];

                $this->Utilisateur->createUser($nom, $mail, $pwd);
                header("location:". BASE_DIR . "/utilisateurs/login");
            }else{
                $error = "Cette adresse mail est déjà enregistrée";
                $this->render('add_user', compact('error'));
            }
        } else {
            $error = "";
            $this->render('add_user', compact('error'));
        }
    }


    public function logout(){
        unset($_SESSION['user']);
        header('Location: '.BASE_DIR);
    }
}