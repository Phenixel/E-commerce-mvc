<?php
abstract class Controller{
    /**
     * Afficher une vue
     *
     * @param string $fichier
     * @param array $data
     * @return void
     */
    public function render(string $fichier, array $data = []){
        extract($data);

        ob_start();

        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');

        $content = ob_get_clean();

        require_once(ROOT.'views/layout/default.php');
    }

    /**
     * Permet de charger un modèle
     *
     * @param string $model
     * @return void
     */
    public function loadModel(string $model)
    {
        require_once(ROOT.'models/'.$model.'.php');
        $this->$model = new $model();
    }

    /**
     * Empêche l'accès aux pages réservés aux admins.
     *
     * @return void
     */
    public function forAdmin(){
        if (empty($_SESSION['user']) || $_SESSION['user']["power"] != "admin"){
            if (isset($_SERVER['HTTP_REFERER'])){
                header("location:". $_SERVER['HTTP_REFERER']);
            }else{
                header("location:". BASE_DIR);
            }
        }
    }

    /**
     * Empêche l'accès aux pages réservés aux connectés.
     *
     * @return void
     */
    public function forConnected(){
        if (empty($_SESSION['user'])){
            if (isset($_SERVER['HTTP_REFERER'])){
                header("location:". $_SERVER['HTTP_REFERER']);
            }else{
                header("location:". BASE_DIR);
            }
        }
    }
}