<?php
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
//define('BASE_DIR', dirname("index.php"));

// Détermine le chemin absolu du fichier PHP actuellement exécuté
$current_file = $_SERVER['SCRIPT_FILENAME'];

// Détermine le chemin absolu du répertoire de la page actuelle
$current_dir = dirname($current_file);

// Remonte d'un niveau dans l'arborescence de répertoires jusqu'à la racine de votre projet
$root_dir = dirname($current_dir);

// Définit la constante BASE_DIR avec le chemin absolu de la racine de votre projet
define('BASE_DIR', $root_dir);

// Détermine l'URL de base de votre site
$base_url = 'http://' . $_SERVER['HTTP_HOST'];

// Détermine le chemin absolu du répertoire de la page actuelle
$current_dir = __DIR__;

// Remonte d'un niveau dans l'arborescence de répertoires jusqu'à la racine
$root_dir = dirname($current_dir);

// Calcule le chemin relatif de la racine de votre projet par rapport à la page actuelle
$relative_path = substr($root_dir, strlen($current_dir));

// Crée l'URL complète de la racine de votre projet en concaténant l'URL de base de votre site et le chemin relatif
$root_url = $base_url . $relative_path;

// Définit la constante BASE_URL avec l'URL complète de la racine de votre projet
define('BASE_URL', $root_url);

require_once(ROOT.'app/Model.php');
require_once(ROOT.'app/Controller.php');

$params = explode('/', $_GET['p']);

if($params[0] != ""){
    $controller = ucfirst($params[0]);
    $action = $params[1] ?? 'index';

    require_once(ROOT.'controllers/'.$controller.'.php');

    $controller = new $controller();

    if(method_exists($controller, $action)){
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller,$action], $params);
        $controller->$action();
    }else{
        http_response_code(404);
        require_once(ROOT.'controllers/Main.php');
    }
}else{
    require_once(ROOT.'controllers/Main.php');
    $controller = new Main();
    $controller->index();
}
