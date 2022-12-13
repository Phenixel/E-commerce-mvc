<?php
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
define('BASE_DIR', dirname(__FILE__));

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
        echo "La page recherchée n'existe pas";
    }
}else{
    require_once(ROOT.'controllers/Main.php');
    $controller = new Main();
    $controller->index();
}
